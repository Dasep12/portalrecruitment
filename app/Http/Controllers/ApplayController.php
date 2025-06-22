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
    public function form($id)
    {
        $detail = DB::table('tbl_mst_postjob as a')
            ->leftJoin('tbl_mst_type_job as b', 'b.id', 'a.type_job')
            ->where('a.id', $id)
            ->select('a.*', 'b.name as type_jobs')
            ->first();
        return view('backend.apply.formapply', compact('detail'));
    }

    public function applyJob(Request $req)
    {
        $nik = $req->nik;
        $idJobs = $req->job_id;
        $source_jobs = $req->source_jobs;
        // CEK NIK Apakah sama dengan
        $validationNIK = DB::table('tbl_mst_candidate')->where('id_card', $nik)->count();
        if ($validationNIK <= 0) {
            return response()->json([
                'status' => false,
                'message' => 'NIK tidak ada atau belum terdaftar di CV kamu'
            ]);
        }

        $validationJobs = DB::table('tbl_trn_apply')->where(
            ['account_id' => session()->get("user_id"), 'job_id' =>  $idJobs]
        )->count();
        if ($validationJobs > 0) {
            return response()->json([
                'status' => false,
                'message' => 'Anda Sudah Melamar Pekerjaan Ini'
            ]);
        }

        DB::beginTransaction();
        try {
            $data = [
                'job_id' => $idJobs,
                'account_id' => session()->get("user_id"),
                'source_jobs' => $source_jobs,
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' =>  session()->get("user_id"),
            ];
            DB::table("tbl_trn_apply")->insert($data);
            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Anda Berhasil Melamar Pekerjaan Ini'
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json(['status' => false, 'error' => $ex->getMessage()], 500);
        }
    }
}
