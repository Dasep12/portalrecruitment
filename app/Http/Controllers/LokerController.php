<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateAddress;
use App\Models\CandidateEducation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Svg\Tag\Rect;

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

    public function detailjob($id)
    {
        $detail = DB::table('tbl_mst_postjob as a')
            ->leftJoin('tbl_mst_type_job as b', 'b.id', 'a.type_job')
            ->where('a.id', $id)
            ->select('a.*', 'b.name as type_jobs')
            ->first();
        return view('backend.loker.detailjob', compact('detail'));
    }

    public function cekStatusLamaran(Request $req)
    {
        $validationJobs = DB::table('tbl_trn_apply')->where(
            ['account_id' => session()->get("user_id"), 'job_id' =>  $req->id]
        )->count();
        return response()->json([
            'status' => $validationJobs > 0 ? true : false,
            'message' => $validationJobs > 0 ? 'Anda Sudah Melamar Pekerjaan Ini' : ''
        ]);
    }

    public function listjob()
    {
        $data = DB::table('tbl_mst_postjob')->get();
        echo json_encode($data);
    }

    public function PartJobJson()
    {
        $data = DB::table('tbl_mst_partjob')->get();
        return response()->json($data);
    }
    public function JsonTypeJob()
    {
        $data = DB::table('tbl_mst_type_job')->get();
        return response()->json($data);
    }
}
