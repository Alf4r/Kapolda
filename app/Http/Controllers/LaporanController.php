<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Session;

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
        
        try{
            // define('REQUIRED', 'required');
            // $this->validate($request,[
            //     'nama_lengkap' => REQUIRED. '|string|max:255',
            //     'nik' => REQUIRED. '|numeric',
            //     'korban' =>  REQUIRED . '|string|max:255',
            //     'tempat_lahir' => REQUIRED . '|string|max:255',
            //     'tanggal_lahir' => REQUIRED . '|date',
            //     'email' => REQUIRED . '|email|max:255',
            //     'kewarganegaraan' => REQUIRED .'|string|max:255',
            //     'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            //     'agama' =>  REQUIRED .'|string|max:255',
            //     'pekerjaan' => REQUIRED .'|string|max:255',
            //     'alamat_lengkap' => REQUIRED . '|string',
            //     'lokasi_kejadian' => REQUIRED . '|string',
            //     'jenis_kejahatan' => REQUIRED . '|string|max:255',
            //     'kerugian' => REQUIRED . '|string',
            //     'tanggal_kejadian' => REQUIRED . '|date',
            //     'waktu_kejadian' => REQUIRED . '|date_format:H:i',
            //     'detail_motif' => REQUIRED . '|string',
            //     'provinsi' => REQUIRED . '|string|max:255',
            //     'kabupaten' => REQUIRED . '|string|max:255',
            //     'kecamatan' => REQUIRED . '|string|max:255',
            //     'kode_pos' => REQUIRED . '|numeric',
            // ]);
            $laporan = new Laporan;
            $laporan->nama_lengkap = $request->nama_lengkap;
            $laporan->nik = $request->nik;
            $laporan->korban = $request->korban;
            $laporan->tempat_lahir = $request->tempat_lahir;
            $laporan->tanggal_lahir = $request->tanggal_lahir;
            $laporan->no_telp = $request->no_telp;
            $laporan->email = $request->email;
            $laporan->kewarganegaraan = $request->kewarganegaraan;
            $laporan->jenis_kelamin = $request->jenis_kelamin;
            $laporan->agama = $request->agama;
            $laporan->pekerjaan = $request->pekerjaan;
            $laporan->alamat_lengkap = $request->alamat_lengkap;
            $laporan->lokasi_kejadian = $request->lokasi_kejadian;
            $laporan->jenis_kejahatan = $request->jenis_kejahatan;
            $laporan->kerugian = $request->kerugian;
            $laporan->tanggal_kejadian = $request->tanggal_kejadian;
            $laporan->waktu_kejadian = $request->waktu_kejadian;
            $laporan->detail_motif = $request->detail_motif;
            $laporan->provinsi = $request->provinsi;
            $laporan->kabupaten = $request->kabupaten;
            $laporan->kecamatan = $request->kecamatan;
            $laporan->kode_pos = $request->kode_pos;
            $laporan->nama_ibu = $request->nama_ibu;
            $laporan->nama_bapak = $request->nama_bapak;
            $laporan->pekerjaan_ibu = $request->pekerjaan_ibu;
            $laporan->pekerjaan_bapak = $request->pekerjaan_bapak;
            $laporan->save();
            return redirect('/dashboard_anggota');
        } catch(Exception $e){
            $errorMessage = $e->getMessage();
            return redirect('/form1')->with('msg', 'Data gagal di tambah. Error : ' . $errorMessage);
        }    
    
        
    }
}
