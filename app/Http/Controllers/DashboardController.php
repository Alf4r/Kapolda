<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Laporan;

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
    public function manage(){
        $users = User::all(); // Mengambil semua data pengguna dari tabel user
        return view('admin.manage_user', ['users' => $users]);
    }
    public function berandaAnggota(){
        $laporan = Laporan::all(); // Mengambil semua data laporan

        return view('anggota.beranda', ['laporan' => $laporan]);
    }
    public function berandaAtasan(){
        return view('atasan.beranda');
    }
}
