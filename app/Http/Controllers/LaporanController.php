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
    public function submitlap1(Request $request) {
        // Validasi input
        $data = $request->validate([
            'nama_lengkap' => 'required|string',
            'no_nik' => 'required|integer',
            'korban' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|integer',
            'email' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'alamat_lengkap' => 'required|string',
            'lokasi_kejadian' => 'required|string',
            'jenis_kejahatan' => 'required|string',
            'kerugian' => 'required|string',
            'tanggal_kejadian' => 'required|integer',
            'waktu_kejadian' => 'required|integer',
            'detail_motif' => 'required|string',
            'provinsi' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kode_pos' => 'required|integer',
        ]);
    
        // Menyimpan data ke database
        FormLap::create($data);
    
        return redirect('/form2');
    }
    public function submitlap2(Request $request) {
        $data = $request->validate([
            'ibu' => 'required|string',
            'bapak' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'pekerjaan_bapak' => 'required|string',

        ])

        FormLap::create($data);
    
        return redirect('/dashboard_anggota');

    }
}
