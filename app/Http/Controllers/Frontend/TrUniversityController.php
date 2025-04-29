<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TrUniversity;

class TrUniversityController extends Controller
{
    // Üniversitelerin listesini göster
    public function listUniversities()
    {
        $universities = TrUniversity::all();
        return view('frontend.tr-universities', compact('universities'));
    }

    // Belirli bir üniversiteyi ve ilişkili verilerini göster
    public function showUniversity($slug)
    {
        // Üniversiteyi tüm ilişkileriyle birlikte çekiyoruz
        $university = TrUniversity::with([
            'sections.children.children.lists',    // Alt bölümleri ve onların listelerini getir
            'sections.lists',                      // Bölümlerin doğrudan listelerini getir
            'sections.descriptions',               // Bölümlerin açıklamalarını getir
            'sections.images',                     // Bölümlerin görsellerini getir
            'sections.children.images',            // Alt bölümlerin görsellerini getir
            'sections.children.children.images'    // Alt-alt bölümlerin görsellerini getir
        ])
        ->where('slug', $slug)
        ->firstOrFail();

        // Her section için görselleri düzenle
        $university->sections->each(function ($section) {
            // Ana bölüm görselleri
            if ($section->images) {
                $section->formatted_images = $section->images->map(function ($image) use ($section) {
                    return [
                        'id' => $image->id,
                        'url' => asset($image->image_url),
                        'alt' => $section->section_title
                    ];
                });
            }

            // Alt bölümlerin görsellerini düzenle
            if ($section->children) {
                $section->children->each(function ($child) {
                    if ($child->images) {
                        $child->formatted_images = $child->images->map(function ($image) use ($child) {
                            return [
                                'id' => $image->id,
                                'url' => asset($image->image_url),
                                'alt' => $child->section_title
                            ];
                        });
                    }
                });
            }
        });

        // İlgili üniversitenin programlarını çekiyoruz
        $programs = $university->programs()->orderBy('specialization')->get();

        return view('frontend.tr-university', compact('university', 'programs'));
    }
}