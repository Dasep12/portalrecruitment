<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;


class CandidateAddress extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'tbl_mst_candidate_address';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'candidate_id',
        'address_now',
        'provience_now',
        'city_now',
        'village_now',
        'zip_code_now',
        'phone_home_now',
        'phone_now',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
