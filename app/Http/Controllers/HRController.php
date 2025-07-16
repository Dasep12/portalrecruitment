<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateAddress;
use App\Models\CandidateEducation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Svg\Tag\Rect;

class HRController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // Now the session is available here
            $this->sessId = session()->get("user_id");
            return $next($request);
        });
    }

    // Master Post JOB
    public function postjob()
    {
        $education = DB::table('tbl_mst_education')->orderBy('sort', 'ASC')->get();
        $typejob = DB::table('tbl_mst_type_job')->get();
        $bagian = DB::table("tbl_mst_partjob")->get();
        return view('backend.hr.postjob.index', compact('education', 'typejob', 'bagian'));
    }

    public function listJobJson(Request $request)
    {
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);
        $offset = ($page - 1) * $limit;

        $query = DB::table('vw_mst_postjobs')->where('is_deleted', 0);

        // Search global
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('company', 'like', "%{$search}%")
                    ->orWhere('position', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%")
                    ->orWhere('job_part', 'like', "%{$search}%")
                    ->orWhere('type_job', 'like', "%{$search}%")
                    ->orWhere('kuota', 'like', "%{$search}%")
                    ->orWhere('education', 'like', "%{$search}%");
            });
        }

        // Sorting
        if ($request->has('sort')) {
            $sort = $request->input('sort');
            $direction = $request->input('order', 'asc'); // default asc
            $query->orderBy($sort, $direction);
        }

        $total = $query->count();

        // Paging
        $data = $query->offset($offset)->limit($limit)->get();

        return response()->json([
            'total' => $total,
            'totalNotFiltered' => $total,
            'rows' => $data
        ]);
    }

    public function crudPostJob(Request $req)
    {
        $action = $req->CrudAction;
        $data = [
            "company" => $req->company,
            "location" => $req->location,
            "position" => $req->position,
            "job_part" => $req->job_part,
            "jobdescription" => $req->jobdescription,
            "jobrequirement" => $req->jobrequirement,
            "skill_requirement" => $req->skill_requirement,
            "type_job" => is_array($req->type_job ?? null) ? implode(',', $req->type_job) : '',
            "education" => is_array($req->education ?? null) ? implode(',', $req->education) : '',
            "start" =>  $req->start,
            "end" => $req->end,
            "kuota" => $req->kuota,
        ];
        try {
            switch (strtolower($action)) {
                case 'create':
                    $data["created_at"] = date('Y-m-d H:i:s');
                    $data["created_by"] = session()->get("user_id");
                    $data["status"] = "open";
                    DB::table("tbl_mst_postjob")->insert($data);
                    break;
                case 'update':
                    $data["updated_at"] = date('Y-m-d H:i:s');
                    $data["updated_by"] = session()->get("user_id");
                    DB::table('tbl_mst_postjob')->where('id', $req->id)->update($data);
                    break;
                case 'delete':
                    DB::table('tbl_mst_postjob')->where('id', $req->id)->update(['is_deleted' => 1]);
                    break;
            }
            DB::beginTransaction();
            try {
                DB::commit();
                return response()->json(['success' => true, 'msg' => 'Berhasil ' . $action . ' Data', 'data' => $req->position, 'status' => 200]);
            } catch (Exception $ex) {
                DB::rollBack();
                return response()->json(['success' => false, 'msg' => $ex, 'status' => 404]);
            }
        } catch (Exception $ex) {
            return response()->json($ex->getMessage());
        }
    }

    public function listJsonPelamar(Request $req)
    {
        $personal = DB::table('tbl_trn_apply as a')
            ->leftJoin('vw_personaldata as b', 'b.id', '=', 'a.account_id')
            ->select('a.account_id', 'b.fullname', 'b.photo', 'b.phone_wa', 'b.email', 'b.usia', 'b.gender')
            ->where('a.job_id', $req->id)
            ->get();

        $data = [];

        foreach ($personal as $person) {
            $education = DB::table('vw_education')
                ->where('candidate_id', $person->account_id)
                ->get();

            $experience = DB::table('vw_experience')
                ->where('candidate_id', $person->account_id)
                ->get();

            $skills = DB::table('vw_skills')
                ->where('candidate_id', $person->account_id)
                ->get();

            $data[] = [
                'personal' => $person,
                'education' => $education,
                'experience' => $experience,
                'skills' => $skills,
            ];
        }
        return response()->json($data);
    }

    // END


    // Proses Recruitment 
    public function proseRecruitment()
    {
        $lowongan = DB::table("vw_mst_postjobs")->get();
        $progress = DB::table("tbl_application_stages")->get();
        $personal = DB::table('vw_personaldata')->where('id', $this->sessId)->first();
        $education = DB::table('vw_education')->where('candidate_id', $this->sessId)->get();
        $experience = DB::table('vw_experience')->where('candidate_id', $this->sessId)->get();
        $organisasi = DB::table('tbl_mst_candidate_organization')->where('candidate_id', $this->sessId)->get();
        $skills = DB::table('vw_skills')->where('candidate_id', $this->sessId)->get();
        $document = DB::table('tbl_mst_candidate_document')->where('candidate_id', $this->sessId)->get();
        return view('backend.hr.proses.index', compact('lowongan', 'progress', 'personal', 'education', 'experience', 'organisasi', 'skills', 'document'));
    }

    public function getDataPelamar(Request $req)
    {
        $personal = DB::table('vw_personaldata')->where('id', $req->candidate_id)->first();
        $education = DB::table('vw_education')->where('candidate_id', $req->candidate_id)->get();
        $experience = DB::table('vw_experience')->where('candidate_id', $req->candidate_id)->get();
        $organisasi = DB::table('tbl_mst_candidate_organization')->where('candidate_id', $req->candidate_id)->get();
        $skills = DB::table('vw_skills')->where('candidate_id', $req->candidate_id)->get();
        $document = DB::table('tbl_mst_candidate_document')->where('candidate_id', $req->candidate_id)->get();
        return response()->json(
            [
                'personal' => $personal,
                'education' => $education,
                'experience' => $experience,
                'organisasi' => $organisasi,
                'experience' => $experience,
                'skills' => $skills,
                'document' => $document,
            ]
        );
    }


    public function stagesList()
    {
        $data =  DB::table("tbl_application_stages")->get();
        return response()->json($data);
    }
    public function stagesEmployee(Request $req)
    {
        $data =  DB::table("vw_stage_application")
            ->where([
                'job_id' => $req->job_id,
                'stage_id' => $req->stage_id,
            ])->get();
        return response()->json($data);
    }

    public function CrudStages(Request $req)
    {
        $progress = $req->progress_sort;
        $job_id = $req->job_id;
    }
}
