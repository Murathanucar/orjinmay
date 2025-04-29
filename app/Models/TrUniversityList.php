<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrUniversityList extends Model
{
    protected $table = 'university_lists';

    protected $fillable = ['tr_university_id', 'section_id', 'subsection_id', 'item', "created_at", "updated_at"];

    // Liste öğesinin bağlı olduğu bölüm
    public function section()
    {
        return $this->belongsTo(TrUniversitySection::class, 'section_id', 'id');
    }

    // Liste öğesinin bağlı olduğu üniversite
    public function university()
    {
        return $this->belongsTo(TrUniversity::class, 'tr_university_id', 'id');
    }
}
