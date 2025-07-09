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
        $detail = DB::table('vw_mst_postjobs as a')
            ->where('a.id', $id)
            ->select('a.*')
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

    public function listjob(Request $req)
    {
        $data = DB::table('vw_mst_postjobs');
        if (!empty($req->education)) {
            $data = $data->whereRaw("FIND_IN_SET(?, education)", [$req->education]);
        }

        if (!empty($req->position)) {
            $data = $data->where('position_id', $req->position);
        }

        if (!empty($req->type_job)) {
            $data = $data->whereRaw("FIND_IN_SET(?, type_job)", [$req->type_job]);
        }
        if ($req->has('search_jobs') && !empty($req->search_jobs)) {
            $search = $req->search_jobs;
            $data->where(function ($q) use ($search) {
                $q->where('company', 'like', "%{$search}%")
                    ->orWhere('position', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%")
                    ->orWhere('job_part', 'like', "%{$search}%")
                    ->orWhere('type_job', 'like', "%{$search}%")
                    ->orWhere('kuota', 'like', "%{$search}%")
                    ->orWhere('education', 'like', "%{$search}%");
            });
        }
        $data = $data->get();
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
