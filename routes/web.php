<?php

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
