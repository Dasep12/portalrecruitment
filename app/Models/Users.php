<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;


class Users extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'tbl_mst_users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'password',
        'email',
        'phone',
        'lock_user',
        'profile',
        'supplier_id',
        'role_id',
        'created_at',
        'created_by',
        'updated_by',
        'updated_at',
    ];
}
