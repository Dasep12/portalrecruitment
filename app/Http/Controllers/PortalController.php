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

    public function load_vacancy_by_company()
    {
        $data = array([
            'vacancy_id' => 'Bonecom Tricom',
            'vacancy_base_url' => 'detail',
            'vacancy_logo_company' => 'img',
            'vacancy_name' => 'das',
            'job_description' => 'ts',
            'stream_group_name' => 'fsf',
            'education_name' => '1',
            'group_code' => "BONEC",
            'group_name' => "BONE",
            'total_vacancy' => 40
        ]);

        return response()->json($data);
    }
}
