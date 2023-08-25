<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function loginview()
    {
        return view('auth.login_form');
    } 

    public function login(Request $request)
    {
        try 
        {
            // Validasi input
            $request->validate([
                'NPP' => 'required',
                'password' => 'required',
                'role' => 'required|in:Admin,Atasan,Anggota'
            ]);

            // Coba autentikasi tanpa role
            if (Auth::attempt([
                'NPP' => $request->NPP, 
                'password' => $request->password
            ])) {
                if (Auth::user()->role == $request->role) {
                    switch (Auth::user()->role) {
                        case 'Admin':
                            return redirect('/dashboard_admin');
                        case 'Atasan':
                            return redirect('/dashboard_atasan');
                        case 'Anggota':
                            return redirect('/dashboard_anggota');
                        default:
                            Auth::logout();
                            return redirect('/login')->with('error', 'Role tidak dikenali');
                    }
                } else {
                    Auth::logout();
                    return redirect('/login')->with('error', 'Role yang dipilih tidak sesuai dengan role Anda di sistem.');
                }
            } else {
                return redirect('/login')->with('error', 'NPP/Password salah');
            }
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            // Log::error("Gagal login: {$errorMessage}");
            return redirect('/login')->with('error', 'Gagal login. Silahkan coba lagi.');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return redirect('/welcome');
    }
}