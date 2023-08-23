<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function formAnggota1(){
        return view('anggota.form1');
    }
    public function formAnggota2(){
        return view('anggota.form2');
    }
}
