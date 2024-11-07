<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function cekAccount(Request $req)
    {

        try {
            $email = $req->email;
            $password = $req->password;
            $cekUser = DB::table('tbl_mst_account')
                ->where(['email' => $email, 'password' => $password, 'status' => 1]);
            if ($cekUser->count() > 0) {
                $data = $cekUser->first();
                session()->put('user_id', $data->user_id);
                session()->flash('message', 'Verifikasi Akun Anda Segera Lewat Link Aktivasi Yang di Terima di Email Anda');
                return response()->json(['success' => true, 'msg' => 'ok']);
            } else {
                return response()->json('User Not Found', 404);
            }
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }


    public function regis()
    {
        return view('frontend/regis');
    }

    public function registrasi(Request $req)
    {
        try {
            $email = $req->email;
            $password = $req->password;
            $namaLengkap = $req->fullname;
            $id_card = $req->ktp;
            $cekEmail = DB::table('tbl_mst_account')
                ->Where(['email' => $email]);
            $cekUser = DB::table('tbl_mst_candidate')
                ->Where(['id_card' => $id_card]);
            if ($cekUser->count() > 0 || $cekEmail->count() > 0) {
                return response()->json('Email atau KTP Sudah Terdaftar', 404);
            } else {
                $account =  [
                    'email' => $email,
                    'password' => $password,
                    'status' => 0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'user_id' => ''
                ];
                $candidate = [
                    'fullname' => $namaLengkap,
                    'id_card' => $id_card,
                    'created_at' => date('Y-m-d H:i:s')
                ];
                DB::beginTransaction();
                DB::table('tbl_mst_candidate')->insert($candidate);
                $lastId = DB::getPdo()->lastInsertId();
                $account['user_id'] = $lastId;
                DB::table('tbl_mst_account')->insert($account);
                try {
                    DB::commit();
                    return response()->json(['success' => true]);
                } catch (Exception $ex) {
                    return response()->json(['error' => $ex->getMessage()], 500);
                }
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
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
