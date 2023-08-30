<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolresController extends Controller
{
    public function PolresBandaraSoetta(){
        return view('atasan.polres_bandara_inter_soetta');
    }
    public function PolresBekasi(){
        return view('atasan.polres_bekasi');
    }
    public function PolresDepok(){
        return view('atasan.polres_depok');
    }
    public function PolresJakBar(){
        return view('atasan.polres_jakarta_barat');
    }
    public function PolresJakPus(){
        return view('atasan.polres_jakarta_pusat');
    }
    public function PolresJakSel(){
        return view('atasan.polres_jakarta_selatan');
    }
    public function polresJakTim(){
        return view('atasan.polres_jakarta_timur');
    }
    public function polresJakUt(){
        return view('atasan.polres_jakarta_utara');
    }
    public function PolresKotaBekasi(){
        return view('atasan.polres_kota_bekasi');
    }
    public function PolresKotaTang(){
        return view('atasan.polres_kota_tangerang');
    }
    public function PolresKpSeribu(){
        return view('atasan.polres_kp_seribu');
    }
    public function PolresTangSel(){
        return view('atasan.polres_tangerang_selatan');
    }
    public function PolresTjPriok(){
        return view('atasan.polres_tj_priok');
    }

}
