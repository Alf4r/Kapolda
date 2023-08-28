<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\UserController@loginView');
Route::get('/logout', 'App\Http\Controllers\UserController@logout');
Route::post('/authenticate', 'App\Http\Controllers\UserController@login');
Route::get('/dashboard_ad', 'App\Http\Controllers\DashboardController@indexAdmin');
Route::get('/dashboard_at', 'App\Http\Controllers\DashboardController@indexAtasan');
Route::get('/dashboard_ag', 'App\Http\Controllers\DashboardController@indexAnggota');
Route::get('/beranda_ad', 'App\Http\Controllers\DashboardController@berandaAdmin');
Route::get('/beranda_at', 'App\Http\Controllers\DashboardController@berandaAtasan');
Route::get('/beranda_ag', 'App\Http\Controllers\DashboardController@berandaAnggota');
Route::get('/form1', 'App\Http\Controllers\LaporanController@formAnggota1');
Route::post('/form1/submit_lap1', 'App\Http\Controllers\LaporanController@submitlap1');
Route::get('/manage', 'App\Http\Controllers\DashboardController@manage');
Route::post('/beranda_ad/naikkanStatus/{id}', 'App\Http\Controllers\LaporanController@naikkanStatus');



// Route::get('/form2', 'App\Http\Controllers\LaporanController@formAnggota2');
// Route::post('/form2/submit_lap2', 'App\Http\Controllers\LaporanController@submitlap2');

// Route::post('/form2', 'App\Http\Controllers\LaporanController@handleForm2Post');

