<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;


class CandidateEducation extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'tbl_mst_candidate_education';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'candidate_id',
        'level_education',
        'campus',
        'type_campus',
        'faculty',
        'major',
        'country_edu',
        'city',
        'start_year',
        'end_year',
        'ipk',
        'from_ipk',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
