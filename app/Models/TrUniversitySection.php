<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrUniversitySection extends Model
{

    use HasFactory;

    protected $table = 'university_sections';

    protected $fillable = ['id', 'tr_university_id', 'section_title', 'parent_id', 'created_at', 'updated_at'];

    // Bölümün ait olduğu üniversite
    public function university()
    {
        return $this->belongsTo(TrUniversity::class, 'tr_university_id', 'id');
    }

    // Bölümün açıklamaları
    public function descriptions()
    {
        return $this->hasMany(TrUniversityDescription::class, 'section_id', 'id');
    }

    // Açıklama bölümündeki listeler
    public function lists()
    {
        return $this->hasMany(TrUniversityList::class, 'section_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(TrUniversityImages::class, 'section_id', 'id');
    }


    public function children()
    {
        return $this->hasMany(TrUniversitySection::class, 'parent_id'); // Alt bölümleri getirir
    }

    public function parent()
    {
        return $this->belongsTo(TrUniversitySection::class, 'parent_id'); // Üst bölümü getirir
    }
}
