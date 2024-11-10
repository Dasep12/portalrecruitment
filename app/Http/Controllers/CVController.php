<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateAddress;
use App\Models\CandidateEducation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CVController extends Controller
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
        return view('backend/datadiri');
    }

    //address personal data
    public function address(Request $req)
    {
        $data = DB::table('tbl_mst_candidate_address as a')
            ->where('a.candidate_id', $this->sessId)
            ->select('a.*')
            ->first();
        return response()->json($data);
    }
    public function updateaddress(Request $req)
    {
        DB::beginTransaction();
        try {
            $data = CandidateAddress::where('candidate_id', $this->sessId)->first();
            $data->address_now = $req->address_now;
            $data->province_now = $req->province_now;
            $data->city_now = $req->city_now;
            $data->village_now = $req->village_now;
            $data->phone_now = $req->phone_now;
            $data->phone_home_now = $req->phone_home_now;
            $data->zip_code_now = $req->zip_code_now;
            $data->save();
            DB::commit();
            return response()->json(['success' => true]);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }
    //personal data
    public function personaldata(Request $req)
    {
        $data = DB::table('tbl_mst_candidate as a')
            ->where('a.id', $this->sessId)
            ->select('a.*')
            ->first();
        return response()->json($data);
    }
    public function updatepersonaldata(Request $req)
    {
        DB::beginTransaction();
        try {
            $data = Candidate::find($this->sessId);
            $data->firstname =  $req->firstname;
            $data->lastname =  $req->lastname;
            $data->fullname =  $req->fullname;
            $data->address =  $req->address;
            $data->phone =  $req->phone;
            $data->phone_wa =  $req->phone_wa;
            $data->email =  $req->email;
            $data->biografi =  $req->biografi;
            $data->born_place =  $req->born_place;
            $data->born_date =  $req->born_date;
            $data->religion =  $req->religion;
            $data->gender =  $req->gender;
            $data->facebook =  $req->facebook;
            $data->linkedin =  $req->linkedin;
            $data->twitter =  $req->twitter;
            $data->instagram =  $req->instagram;
            $data->status_married =  $req->status_married;
            $data->id_card =  $req->id_card;
            $data->gelar_1 =  $req->gelar_1;
            $data->gelar_2 =  $req->gelar_2;
            $data->gelar_3 =  $req->gelar_3;
            $data->city_trip =  $req->city_trip;
            $data->lokasi_penempatan =  $req->lokasi_penempatan;
            $data->save();
            DB::commit();
            return response()->json(['success' => true]);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    //personal data
    public function educationCandidate(Request $req)
    {
        $data = DB::table('tbl_mst_candidate_education as a')
            ->where('a.candidate_id', $this->sessId)
            ->select('a.*')
            ->get();
        return response()->json($data);
    }

    public function updateEducation(Request $req)
    {
        DB::beginTransaction();
        try {
            DB::table("tbl_mst_candidate_education")->where("candidate_id", $this->sessId)->delete();
            $params = [];
            for ($i = 0; $i < count($req->level_education); $i++) {
                $data = [
                    'candidate_id' => $this->sessId,
                    'level_education' => $req->level_education[$i],
                    'campus' => $req->campus[$i],
                    'type_campus' => $req->type_campus[$i],
                    'faculty' => $req->faculty[$i],
                    'major' => $req->major[$i],
                    'country_edu' => $req->country_edu[$i],
                    'city' => $req->city[$i],
                    'start_year' => $req->start_year[$i] . '-01-01',
                    'end_year' => $req->end_year[$i] . '-01-01',
                    'ipk' => $req->ipk[$i],
                    'from_ipk' => $req->from_ipk[$i],
                    'created_at' => date('Y-m-d H:i:s'),
                    'created_by' => $this->sessId,
                ];
                array_push($params, $data);
            }
            DB::table("tbl_mst_candidate_education")->insert($params);
            DB::commit();
            return response()->json(['success' => true]);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }


    public function apply()
    {
        return view('backend/apply');
    }

    public function country(Request $req)
    {
        $data = DB::table('tbl_mst_country as a')
            ->select('a.id', 'a.name')
            ->orderBy('a.name', 'ASC')
            ->get();
        return response()->json($data);
    }

    public function provinces(Request $req)
    {
        $data = DB::table('tbl_mst_provinces as a')
            ->select('a.id', 'a.name')
            ->orderBy('a.name', 'ASC')
            ->get();
        return response()->json($data);
    }

    public function regencies(Request $req)
    {
        $data = DB::table('tbl_mst_regencies as a')
            ->select('a.id', 'a.name')
            ->orderBy('a.name', 'ASC')
            ->get();
        return response()->json($data);
    }
    public function skills(Request $req)
    {
        $data = DB::table('tbl_mst_skills as a')
            ->select('a.id', 'a.name')
            ->orderBy('a.name', 'ASC')
            ->get();
        return response()->json($data);
    }
    public function districts(Request $req)
    {
        $data = DB::table('tbl_mst_districts as a')
            ->select('a.id', 'a.name')
            ->orderBy('a.name', 'ASC')
            ->get();
        return response()->json($data);
    }

    public function degree(Request $req)
    {
        $data = DB::table('tbl_mst_degree as a')
            ->select('a.id', 'a.name')
            ->get();
        return response()->json($data);
    }
    public function education(Request $req)
    {
        $data = DB::table('tbl_mst_education as a')
            ->select('a.id', 'a.name')
            ->get();
        return response()->json($data);
    }

    public function faculty(Request $req)
    {
        $data = DB::table('tbl_mst_faculty as a')
            ->select('a.id', 'a.name')
            ->get();
        return response()->json($data);
    }
    public function major(Request $req)
    {
        $data = DB::table('tbl_mst_major as a')
            ->select('a.id', 'a.name')
            ->get();
        return response()->json($data);
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
