<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Models\TrUniversity;
use App\Models\TrUniversityList;
use App\Models\TrUniversityImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class GermanyUniversityController extends Controller
{
    public function listUniversity()
    {
        $universities = TrUniversity::all();
        return view('admin.university-list', compact('universities'));
    }

    public function showUniversity($id)
    {
        try {
            $university = TrUniversity::with([
                'sections.descriptions',
                'sections.lists',
                'sections.images'  // images ilişkisini ekledik
            ])->findOrFail($id);
    
            // Her section için description ve lists işlemleri
            $university->sections->transform(function ($section) {
                // Description işlemleri
                if ($section->descriptions->isNotEmpty()) {
                    $description = $section->descriptions->first();
                    $section->original_content = $description->content;
                    $section->escaped_content = $this->safeEncodeContent($description->content);
                } else {
                    $section->original_content = '';
                    $section->escaped_content = json_encode('');
                }
    
                // Liste işlemleri
                if ($section->lists->isNotEmpty()) {
                    $section->list_items = $section->lists->pluck('item')->toArray();
                } else {
                    $section->list_items = [];
                }
    
                // Images işlemleri
                if ($section->images->isNotEmpty()) {
                    $section->images = $section->images->map(function($image) {
                        return [
                            'id' => $image->id,
                            'filename' => basename($image->image_url),
                            'url' => $image->image_url
                        ];
                    });
                } else {
                    $section->images = collect([]);
                }
    
                return $section;
            });
    
            return view('admin.university-detail', compact('university'));
        } catch (\Exception $e) {
            Log::error('University detail error: ' . $e->getMessage());
            return back()->with('error', 'Üniversite detayları yüklenirken bir hata oluştu.');
        }
    }

    public function update(Request $request, $id)
    {
        $university = TrUniversity::findOrFail($id);
        
        // Eğer bu bir section güncelleme isteği ise
        if ($request->header('X-Section-Update') === 'true' && $request->has('section_id')) {
            return $this->updateSection($request, $university, $request->section_id);
        }
        
        // Normal form gönderimi ise tüm üniversiteyi güncelle
        // Mevcut güncelleme kodunuz...
        
        return redirect()->route('admin.universities.index')->with('success', 'University updated successfully');
    }
    
    protected function updateSection(Request $request, $university, $sectionId)
    {
        try {
            $section = $university->sections()->findOrFail($sectionId);
            
            // Section başlığını güncelle
            if ($request->has('section_title')) {
                $section->section_title = $request->section_title;
                $section->save();
            }
            
            // İçeriği güncelle
            if ($request->has('description')) {
                // Eğer bir description ilişkisi varsa güncelle, yoksa yeni oluştur
                if ($section->descriptions->count() > 0) {
                    $description = $section->descriptions->first();
                    $description->content = $request->description;
                    $description->save();
                } else {
                    $section->descriptions()->create([
                        'content' => $request->description
                    ]);
                }
            }
            
            // Liste öğelerini güncelle
            if ($request->has('lists')) {
                // Mevcut liste öğelerini al
                $existingItems = TrUniversityList::where('university_id', $university->id)
                                            ->where('section_id', $section->id)
                                            ->get();
                
                $existingItemIds = $existingItems->pluck('id')->toArray();
                $updatedItemIds = [];
                
                // Yeni liste öğelerini ekle veya güncelle
                foreach ($request->lists as $index => $itemText) {
                    if (!empty($itemText)) {
                        if ($index < count($existingItems)) {
                            // Mevcut öğeyi güncelle
                            $item = $existingItems[$index];
                            $item->item = $itemText;
                            $item->save();
                            
                            $updatedItemIds[] = $item->id;
                        } else {
                            // Yeni öğe ekle
                            $newItem = TrUniversityList::create([
                                'university_id' => $university->id,
                                'section_id' => $section->id,
                                'item' => $itemText
                            ]);
                            
                            $updatedItemIds[] = $newItem->id;
                        }
                    }
                }
                
                // Artık gerekmeyen öğeleri sil
                TrUniversityList::whereIn('id', array_diff($existingItemIds, $updatedItemIds))->delete();
            }
            
            // Görselleri işle
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $filename = time() . '_' . $image->getClientOriginalName();
                    // storage/app/public/university_images altına kaydet
                    $path = $image->storeAs('university_images', $filename, 'public');
                    
                    // Veritabanına kaydet
                    TrUniversityImages::create([
                        'university_id' => $university->id,
                        'section_id' => $section->id,
                        'image_url' => $path // Direkt olarak path'i kaydediyoruz
                    ]);
                }
            }

            // Silinecek görselleri işle
            if ($request->has('remove_images')) {
                foreach ($request->remove_images as $imageId) {
                    if (!empty($imageId)) {
                        $image = TrUniversityImages::where([
                            'id' => $imageId,
                            'university_id' => $university->id,
                            'section_id' => $section->id
                        ])->first();

                        if ($image) {
                            // Dosyayı storage'dan sil
                            Storage::disk('public')->delete($image->image_url);
                            // DB kaydını sil
                            $image->delete();
                        }
                    }
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'Section updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating section: ' . $e->getMessage()
            ], 500);
        }
    }

    public function deleteUniversity($id)
    {
        $university = TrUniversity::findOrFail($id);
        $university->delete();

        return redirect()->route('admin.university.list')->with('success', 'University deleted successfully.');
    }

        /**
     * Helper method to safely encode HTML content
     */
    private function safeEncodeContent($content)
    {
        try {
            // HTML entity'leri decode et
            $decodedContent = html_entity_decode($content, ENT_QUOTES, 'UTF-8');
            // JSON olarak encode et
            return json_encode($decodedContent, JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS);
        } catch (\Exception $e) {
            Log::error('Content encoding error: ' . $e->getMessage());
            return json_encode('');
        }
    }  
}
