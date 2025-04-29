<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TrUniversityPrograms;


class TrUniversity extends Model
{
    protected $table = 'turkish_universities';

    protected $fillable = ['name', 'url', 'logo', 'slug', 'descrition'];

    // Üniversitenin bölümleri (1'e çok)
    public function sections()
    {
        return $this->hasMany(TrUniversitySection::class, 'tr_university_id', 'id');
    }

    // Üniversitenin açıklamaları (1'e çok)
    public function descriptions()
    {
        return $this->hasMany(TrUniversityDescription::class, 'tr_university_id', 'id');
    }

    // University.php modeline
    public function programs()
    {
        return $this->hasMany(TrUniversityPrograms::class);
    }
}
