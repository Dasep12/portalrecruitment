<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;


class Candidate extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'tbl_mst_candidate';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'fullname',
        'photo',
        'address',
        'phone',
        'phone_wa',
        'email',
        'biografi',
        'born_place',
        'born_date',
        'religion',
        'gender',
        'facebook',
        'linkedin',
        'twitter',
        'instagram',
        'status_married',
        'lokasi_penempatan',
        'id_card',
        'status',
        'hired',
        'gelar_1',
        'gelar_2',
        'gelar_3',
        'city_trip',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
