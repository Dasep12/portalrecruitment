<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;


class CandidateWorking extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'tbl_mst_candidate_workinghistory';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'candidate_id',
        'company_job',
        'position_job',
        'country_job',
        'industry',
        'type_job',
        'location_job',
        'city',
        'start_year_job',
        'end_year_job',
        'sallary',
        'reason_stop',
        'description',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
