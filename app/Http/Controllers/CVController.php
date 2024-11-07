<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Administrator\App\Models\Users;

class CVController extends Controller
{
    //
    public function index()
    {
        return view('backend/datadiri');
    }

    public function apply()
    {
        return view('backend/apply');
    }

    public function home()
    {
        return view('backend/home');
    }


    public function cv()
    {
        return view('backend/cv');
    }
    public function job_vacany()
    {
        return view('backend/job_vacany');
    }
}
