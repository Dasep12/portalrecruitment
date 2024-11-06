<?php

use Illuminate\Support\Facades\DB;
use Modules\Administrator\App\Models\Customers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Encryption\Encrypter;



function getRomawiMonth($month)
{
    $romawiMonths = [
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
        6 => 'VI',
        7 => 'VII',
        8 => 'VIII',
        9 => 'IX',
        10 => 'X',
        11 => 'XI',
        12 => 'XII',
    ];

    return $romawiMonths[$month];
}

function CrudMenuPermission($MenuUrl, $UserId, $act)
{
    $data = DB::table("vw_menu")
        ->where('MenuUrl', $MenuUrl)
        ->where('user_id', $UserId)
        ->select('view', 'delete', 'edit', 'add')
        ->get()
        ->first();
    if ($act == "add") {
        if ($data) {
            return $data->add;
        } else {
            return null;
        }
    } else  if ($act == "delete") {
        if ($data) {
            return $data->delete;
        } else {
            return null;
        }
    } else if ($act == "edit") {
        if ($data) {
            return $data->edit;
        } else {
            return null;
        }
    } else if ($act == "view") {
        if ($data) {
            return $data->view;
        } else {
            return null;
        }
    }
}
