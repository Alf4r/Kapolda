<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function loginview()
    {
        return view('auth.login_form');
    } 


    public function login(Request $request)
    {
        try{
            $request->validate([
                'NPP' => 'required',
                'password' => 'required',
            ]);

            if (Auth::attempt([
                'NPP' => $request->NPP,
                'password' => $request->password
                ])){
                    session()->put('nama', Auth::user()->name);
                    return redirect('/dashboard_anggota');
            } else {
                return redirect('/login')->with('error', 'NPP/Password salah');   
            }
        }catch(Exception $e){
            $errorMessage = $e->getMessage();
            dd($errorMessage);
            return redirect('/login')->with('error', 'Gagal login. Error : ' . $errorMessage); 
        }
        
    }
}
