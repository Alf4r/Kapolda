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
            'role' => 'required'
        ]);

        if (Auth::attempt([
            'NPP' => $request->NPP,
            'password' => $request->password,
            'role' => $request->role
        ])){
            session()->put('nama', Auth::user()->name);
            
            // Cek role dari user yang login
            switch(Auth::user()->role) { // Asumsikan ada kolom 'role' pada model User
                case 'Admin':
                    return redirect('/dashboard_admin');
                case 'Anggota':
                    return redirect('/dashboard_anggota');
                case 'Atasan':
                    return redirect('/dashboard_atasan');
                default:
                    return redirect('/login')->with('error', 'Role tidak dikenali');
            }
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
