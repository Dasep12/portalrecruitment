<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Administrator\App\Models\Users;

class LogoutController extends Controller
{
    //
    public function index()
    {
        session()->flush();
        return redirect("/");
    }
}
