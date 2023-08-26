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
        formlap::create([
            'nama_lengkap' => $request->nama_lengkap,
            'no_nik' => $request->no_nik,
            'korban' => $request->korban,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'kewarganegaraan' => $request->kewarganegaraan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->nama_lengkap,
            'alamat_lengkap' => $request->alamat_lengkap,
            'lokasi_kejadian' => $request->lokasi_kejadian,
            'jenis_kejahatan' => $request->jenis_kejahatan,
            'kerugian' => $request->kerugian,
            'tanggal_kejadian' => $request->tanggal_kejadian,
            'waktu_kejadian' => $request->waktu_kejadian,
            'detail_motif' => $request->detail_motif,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
        ]);     
    
        return redirect('/form2');
    }
    public function submitlap2(Request $request) {
        $data = $request->validate([
            'ibu' => 'required|string',
            'bapak' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'pekerjaan_bapak' => 'required|string',

        ])

        formlap::create([
            'ibu' => $request->ibu,
            'bapak' => $request->bapak,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pekerjaan_bapak' => $request->pekerjaan_bapak,
        ])
    
        return redirect('/dashboard_anggota');

    }
}
