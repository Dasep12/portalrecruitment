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
        $data  = [
            'personal' => Candidate::find($this->sessId)
        ];
        return view('backend/datadiri', $data);
    }

    public function account()
    {
        $data  = [
            'personal' => Candidate::find($this->sessId)
        ];
        return view('backend/account', $data);
    }

    public function updatePhoto(Request $req)
    {
        DB::beginTransaction();
        try {
            if ($req->file('img_profile')) {
                $file = $req->file('img_profile');
                $fileName = $this->sessId . '' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('photo'), $fileName);
                $data = [
                    'photo'    => $fileName,
                ];
                DB::table("tbl_mst_candidate as a")
                    ->where('id', $this->sessId)
                    ->update($data);
            }
            try {
                DB::commit();
                return response()->json(['success' => true]);
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json(['error' => $e->getMessage()], 500);
            }
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    public function updatePassword(Request $req)
    {
        DB::beginTransaction();
        try {
            $data = [
                'password'    => $req->new_password,
            ];
            DB::table("tbl_mst_account as a")
                ->where('candidate_id', $this->sessId)
                ->update($data);
            try {
                DB::commit();
                return response()->json(['success' => true]);
            } catch (Exception $e) {
                DB::rollBack();
                return response()->json(['error' => $e->getMessage()], 500);
            }
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
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

            if ($data) {
                $data->address_now = $req->address_now;
                $data->province_now = $req->province_now;
                $data->city_now = $req->city_now;
                $data->village_now = $req->village_now;
                $data->phone_now = $req->phone_now;
                $data->phone_home_now = $req->phone_home_now;
                $data->zip_code_now = $req->zip_code_now;
                $data->save();
            } else {
                $params = [
                    'candidate_id' => $this->sessId,
                    'address_now' => $req->address_now,
                    'province_now' => $req->province_now,
                    'city_now' => $req->city_now,
                    'village_now' => $req->village_now,
                    'zip_code_now' => $req->zip_code_now,
                    'phone_home_now' => $req->phone_home_now,
                    'phone_now' => $req->phone_now,
                    'created_at' => date('Y-m-d H:i:s'),
                    'created_by' => $this->sessId
                ];
                DB::table('tbl_mst_candidate_address')->insert($params);
            }

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

    //education data
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
            // Check if any data exists in the request
            if ($req->level_education && count($req->level_education) > 0) {

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
            }

            DB::commit();
            return response()->json(['success' => true]);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    //working history data
    public function workingHistoryCandidate(Request $req)
    {
        $data = DB::table('tbl_mst_candidate_workinghistory as a')
            ->where('a.candidate_id', $this->sessId)
            ->select('a.*')
            ->get();
        return response()->json($data);
    }

    public function updateworkingHistory(Request $req)
    {
        DB::beginTransaction();
        try {
            DB::table("tbl_mst_candidate_workinghistory")->where("candidate_id", $this->sessId)->delete();
            $params = [];
            // Check if any data exists in the request
            if ($req->company_job && count($req->company_job) > 0) {

                for ($i = 0; $i < count($req->company_job); $i++) {
                    $data = [
                        'candidate_id' => $this->sessId,
                        'company_job' => $req->company_job[$i],
                        'position_job' => $req->position_job[$i],
                        'country_job' => $req->country_job[$i],
                        'industry' => $req->industry[$i],
                        'type_job' => $req->type_job[$i],
                        'location_job' => $req->location_job[$i],
                        'start_year_job' => $req->start_year_job[$i],
                        'end_year_job' => $req->end_year_job[$i],
                        'sallary' => $req->sallary[$i],
                        'reason_stop' => $req->reason_stop[$i],
                        'description' => $req->description[$i],
                        'created_at' => date('Y-m-d H:i:s'),
                        'created_by' => $this->sessId,
                    ];
                    array_push($params, $data);
                }
                DB::table("tbl_mst_candidate_workinghistory")->insert($params);
            }

            DB::commit();
            return response()->json(['success' => true]);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    //organization data
    public function organizationCandidate(Request $req)
    {
        $data = DB::table('tbl_mst_candidate_organization as a')
            ->where('a.candidate_id', $this->sessId)
            ->select('a.*')
            ->get();
        return response()->json($data);
    }

    public function updateorganization(Request $req)
    {
        DB::beginTransaction();
        try {
            DB::table("tbl_mst_candidate_organization")->where("candidate_id", $this->sessId)->delete();
            $params = [];
            // Check if any data exists in the request
            if ($req->name_org && count($req->name_org) > 0) {

                for ($i = 0; $i < count($req->name_org); $i++) {
                    $data = [
                        'candidate_id' => $this->sessId,
                        'name_org' => $req->name_org[$i],
                        'jabatan' => $req->jabatan[$i],
                        'peran' => $req->peran[$i],
                        'created_at' => date('Y-m-d H:i:s'),
                        'created_by' => $this->sessId,
                    ];
                    array_push($params, $data);
                }
                DB::table("tbl_mst_candidate_organization")->insert($params);
            }

            DB::commit();
            return response()->json(['success' => true]);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    //skills data
    public function skillsCandidate(Request $req)
    {
        $data = DB::table('tbl_mst_candidate_skills as a')
            ->where('a.candidate_id', $this->sessId)
            ->select('a.*')
            ->get();
        return response()->json($data);
    }

    public function updateskills(Request $req)
    {
        DB::beginTransaction();
        try {
            DB::table("tbl_mst_candidate_skills")->where("candidate_id", $this->sessId)->delete();
            $params = [];
            // Check if any data exists in the request
            if ($req->skills && count($req->skills) > 0) {

                for ($i = 0; $i < count($req->skills); $i++) {
                    $data = [
                        'candidate_id' => $this->sessId,
                        'skills' => $req->skills[$i],
                        'level' => $req->level[$i],
                        'created_at' => date('Y-m-d H:i:s'),
                        'created_by' => $this->sessId,
                    ];
                    array_push($params, $data);
                }
                DB::table("tbl_mst_candidate_skills")->insert($params);
            }

            DB::commit();
            return response()->json(['success' => true]);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    //document pendukung 
    public function uploadDocument(Request $req)
    {
        DB::beginTransaction();
        try {
            $fileName = "";
            if ($req->file('name_file')) {
                $file = $req->file('name_file');
                $fileName = $this->sessId . '' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('document'), $fileName);
            }
            $data = [
                'candidate_id' => $this->sessId,
                'name_file'   => $fileName,
                'document'    => $req->document,
                'created_at'  => '',
                'created_by'  => '',
                'updated_at' => '',
                'updated_by' => ''
            ];

            $cek = DB::table("tbl_mst_candidate_document as a")
                ->where(['document' => $req->document, 'candidate_id' => $this->sessId])
                ->select('a.*');

            if ($cek->count() > 0) {
                $par =  $cek->first();
                $data['created_at'] = $par->created_at;
                $data['created_by'] = $par->created_by;
                $data['updated_at'] = date('Y-m-d H:i:s');
                $data['updated_by'] = $this->sessId;
                DB::table("tbl_mst_candidate_document as a")
                    ->where(['document' => $req->document, 'candidate_id' => $this->sessId, 'id' => $par->id])
                    ->update($data);
            } else {
                $data['created_at'] = date('Y-m-d H:i:s');
                $data['created_by'] = $this->sessId;
                $data['updated_at'] = date('Y-m-d H:i:s');
                $data['updated_by'] = $this->sessId;
                DB::table("tbl_mst_candidate_document")->insert($data);
            }
            DB::commit();
            return response()->json(['success' => true]);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }


    public function cekDocument(Request $req)
    {
        $data = DB::table('tbl_mst_candidate_document')
            ->where('candidate_id', $this->sessId)
            ->get();
        return response()->json($data);
    }

    public function cekDataFull(Request $req)
    {
        $doc = DB::table('tbl_mst_candidate_document')->where('candidate_id', $this->sessId)->count();
        $skills = DB::table('tbl_mst_candidate_skills')->where('candidate_id', $this->sessId)->count();
        $organization = DB::table('tbl_mst_candidate_organization')->where('candidate_id', $this->sessId)->count();
        $workinghistory = DB::table('tbl_mst_candidate_workinghistory')->where('candidate_id', $this->sessId)->count();
        $education = DB::table('tbl_mst_candidate_education')->where('candidate_id', $this->sessId)->count();
        $address = DB::table('tbl_mst_candidate_address')->where('candidate_id', $this->sessId)->count();
        $candidate = DB::table('tbl_mst_candidate')->where('id', $this->sessId)->count();
        $data = array(
            ['name' => 'complete_document', 'count' => $doc],
            ['name' => 'complete_skill', 'count' => $skills],
            ['name' => 'complete_organisasi', 'count' => $organization],
            ['name' => 'complete_experience', 'count' => $workinghistory],
            ['name' => 'complete_pendidikan', 'count' => $education],
            ['name' => 'complete_alamat', 'count' => $address],
            ['name' => 'complete_datadiri', 'count' => $candidate],
            ['name' => 'complete_pp', 'count' => $doc]
        );
        return response()->json($data);
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

    public function typeWork(Request $req)
    {
        $data = DB::table('tbl_mst_type_job as a')
            ->select('a.id', 'a.name')
            ->get();
        return response()->json($data);
    }
    public function workIndustry(Request $req)
    {
        $data = DB::table('tbl_mst_industry as a')
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
        $data  = [
            'personal' => DB::table('vw_personaldata')->where('id', $this->sessId)->first(),
            'education' => DB::table('vw_education')->where('candidate_id', $this->sessId)->get(),
            'experience' => DB::table('vw_experience')->where('candidate_id', $this->sessId)->get(),
            'organisasi' => DB::table('tbl_mst_candidate_organization')->where('candidate_id', $this->sessId)->get(),
            'skills' => DB::table('vw_skills')->where('candidate_id', $this->sessId)->get(),
            'document' => DB::table('tbl_mst_candidate_document')->where('candidate_id', $this->sessId)->get()
        ];
        return view('backend/cv', $data);
    }
    public function job_vacany()
    {
        return view('backend/job_vacany');
    }
}
