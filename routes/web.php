<?php

use App\Http\Controllers\ApplayController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PortalController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PortalController::class, 'index']);
Route::get('/login', [PortalController::class, 'login']);
Route::post('/auth', [PortalController::class, 'cekAccount']);
Route::get('/logout', [LogoutController::class, 'index']);
Route::get('/regis', [PortalController::class, 'regis']);
Route::post('/registrasi', [PortalController::class, 'registrasi']);
Route::post('/load_vacancy_by_company', [PortalController::class, 'load_vacancy_by_company']);


Route::middleware(['check.session'])->prefix('/main')->group(function () {

    // Data Diri
    Route::get('/datadiri', [CVController::class, 'index']);
    Route::get('/account', [CVController::class, 'account']);
    Route::post('/updatePhoto', [CVController::class, 'updatePhoto']);
    Route::post('/updatePassword', [CVController::class, 'updatePassword']);
    Route::post('/personaldata', [CVController::class, 'personaldata']);
    Route::post('/updatepersonaldata', [CVController::class, 'updatepersonaldata']);
    Route::post('/address', [CVController::class, 'address']);
    Route::post('/updateaddress', [CVController::class, 'updateaddress']);
    Route::post('/educationCandidate', [CVController::class, 'educationCandidate']);
    Route::post('/updateEducation', [CVController::class, 'updateEducation']);
    Route::post('/workingHistoryCandidate', [CVController::class, 'workingHistoryCandidate']);
    Route::post('/updateworkingHistory', [CVController::class, 'updateworkingHistory']);
    Route::post('/organizationCandidate', [CVController::class, 'organizationCandidate']);
    Route::post('/updateorganization', [CVController::class, 'updateorganization']);
    Route::post('/skillsCandidate', [CVController::class, 'skillsCandidate']);
    Route::post('/updateskills', [CVController::class, 'updateskills']);
    Route::post('/uploadDocument', [CVController::class, 'uploadDocument']);
    Route::get('/cekDocument', [CVController::class, 'cekDocument']);
    Route::get('/cekDataFull', [CVController::class, 'cekDataFull']);

    Route::get('/country', [CVController::class, 'country']);
    Route::get('/regencies', [CVController::class, 'regencies']);
    Route::get('/provinces', [CVController::class, 'provinces']);
    Route::get('/districts', [CVController::class, 'districts']);
    Route::get('/faculty', [CVController::class, 'faculty']);
    Route::get('/major', [CVController::class, 'major']);
    Route::get('/degree', [CVController::class, 'degree']);
    Route::get('/skills', [CVController::class, 'skills']);
    Route::get('/education', [CVController::class, 'education']);
    Route::get('/typeWork', [CVController::class, 'typeWork']);
    Route::get('/workIndustry', [CVController::class, 'workIndustry']);
    Route::get('/cv', [CVController::class, 'cv']);


    // APPLY
    Route::get('/apply', [ApplayController::class, 'index']);
    Route::get('/formapply/{id}', [ApplayController::class, 'form']);
    Route::post('/applyJob', [ApplayController::class, 'applyJob']);
    // Route::get('/home', [ApplayController::class, 'index']);

    // LOWONGAN
    Route::get('/job_vacany', [LokerController::class, 'index']);
    Route::get('/PartJobJson', [LokerController::class, 'PartJobJson']);
    Route::get('/listjob', [LokerController::class, 'listjob']);
    Route::get('/JsonTypeJob', [LokerController::class, 'JsonTypeJob']);
    Route::get('/cekStatusLamaran', [LokerController::class, 'cekStatusLamaran']);
    Route::get('/detailjob/{id}', [LokerController::class, 'detailjob']);
});
