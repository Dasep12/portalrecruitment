<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Administrator\App\Models\Users;

class PortalController extends Controller
{
    //
    public function index()
    {
        return view('frontend/beranda');
    }

    public function login()
    {
        return view('frontend/login');
    }

    public function regis()
    {
        return view('frontend/regis');
    }
}
