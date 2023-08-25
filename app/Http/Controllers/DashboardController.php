<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexAdmin(){
        return view('admin.dashboard');
    }
    public function indexAtasan(){
        return view('atasan.dashboard');
    }
    public function indexAnggota(){
        return view('anggota.dashboard');
    }
}
