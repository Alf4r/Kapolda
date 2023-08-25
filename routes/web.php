<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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
Route::get('/dashboard_admin', 'App\Http\Controllers\DashboardController@indexAdmin');
Route::get('/dashboard_atasan', 'App\Http\Controllers\DashboardController@indexAtasan');
Route::get('/dashboard_anggota', 'App\Http\Controllers\DashboardController@indexAnggota');
Route::get('/form1', 'App\Http\Controllers\LaporanController@formAnggota1');
Route::post('/submit_lap1', 'App\Http\Controllers\LaporanController@submitlap1');
Route::get('/form2', 'App\Http\Controllers\LaporanController@formAnggota2');
Route::post('/submit_lap2', 'App\Http\Controllers\LaporanController@submitlap2');

// Route::post('/form2', 'App\Http\Controllers\LaporanController@handleForm2Post');

