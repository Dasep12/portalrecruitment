<?php

use App\Http\Controllers\CVController;
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
Route::get('/regis', [PortalController::class, 'regis']);
Route::post('/load_vacancy_by_company', [PortalController::class, 'load_vacancy_by_company']);


Route::prefix('/main')->group(function () {
    Route::get('/datadiri', [CVController::class, 'index']);
    Route::get('/home', [CVController::class, 'home']);
    Route::get('/apply', [CVController::class, 'apply']);
    Route::get('/cv', [CVController::class, 'cv']);
    Route::get('/job_vacany', [CVController::class, 'job_vacany']);
});
