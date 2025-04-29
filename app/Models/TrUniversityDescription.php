<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrUniversityDescription extends Model
{
    protected $table = 'university_descriptions';

    protected $fillable = ['tr_university_id', 'section_id', 'content', 'created_at', 'updated_at'];

    // Açıklamanın ait olduğu üniversite
    public function university()
    {
        return $this->belongsTo(TrUniversity::class, 'tr_university_id', 'id');
    }

    // Açıklamanın ait olduğu bölüm
    public function sections()
    {
        return $this->belongsTo(TrUniversitySection::class, 'section_id', 'id');
    }
}
