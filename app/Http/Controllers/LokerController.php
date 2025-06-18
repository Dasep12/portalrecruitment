<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateAddress;
use App\Models\CandidateEducation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LokerController extends Controller
{
    private $sessId;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // Now the session is available here
            $this->sessId = session()->get("user_id");
            return $next($request);
        });
    }
    public function index()
    {
        return view('backend.loker.job');
    }

    public function detailjob(Request $req)
    {
        return view('backend.loker.detailjob');
    }

    public function listjob()
    {
        $data = array(
            'result' => array(
                [
                    'id' => 1,
                    'vacancy_base_url' => '?category=detailjob',
                    'vacancy_company_name' => 'Bonecom Tricom',
                    'vacancy_name'   => 'IT PROGRAMMER ON KARAWANG PLANT',
                    'education_name' => 'S1',
                    'stream_group_name' => 'Manufactur',
                    'job_description'  => 'Web Developer',
                    'percentage'  => 20

                ],
                [
                    'id' => 2,
                    'vacancy_base_url' => '?category=detailjob',
                    'vacancy_company_name' => 'Ravalia Inti Mandiri BEKASI PLANT',
                    'vacancy_name'   => 'MARKETING',
                    'education_name' => 'S1',
                    'stream_group_name' => 'Manufactur',
                    'job_description'  => 'Sales',
                    'percentage'  => 90
                ],
            )
        );
        echo json_encode($data);
    }
}
