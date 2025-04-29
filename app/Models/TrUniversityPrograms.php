<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrUniversityPrograms extends Model
{

    use HasFactory;

    protected $table = 'university_programs';

    protected $fillable = ['id', 'tr_university_id', 'degree_level', 'specialization', 'duration', 'study_mode', 'language', 'fee', 'created_at', 'updated_at'];

    // Bölümün ait olduğu üniversite
    public function university()
    {
        return $this->belongsTo(TrUniversity::class, 'tr_university_id', 'id');
    }
}
