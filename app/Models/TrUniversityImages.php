<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrUniversityImages extends Model
{

    use HasFactory;

    protected $table = 'university_images';

    protected $fillable = ['id', 'tr_university_id', 'section_id', 'image_url', 'created_at', 'updated_at'];

    // Resimin ait olduğu üniversite
    public function university()
    {
        return $this->belongsTo(TrUniversity::class, 'tr_university_id', 'id');
    }

    // Resimin ait olduğu bölüm
    public function section()
    {
        return $this->belongsTo(TrUniversitySection::class, 'section_id', 'id');
    }

    // Resim URL'sini döndürür
    public function getImageUrlAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }
}
