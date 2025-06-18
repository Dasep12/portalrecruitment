<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateAddress;
use App\Models\CandidateEducation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplayController extends Controller
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
        return view('backend.apply.apply');
    }
}
