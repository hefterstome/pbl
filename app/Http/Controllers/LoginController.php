<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/admin/beranda')->with('primary', 'Berhasil login');
        } else {
            return redirect('/admin')->with('danger', 'Email atau password salah. Silakan coba lagi.');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::guard('warga')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/warga/profil')->with('primary', 'Berhasil login');
        } else {
            return redirect('/login')->with('danger', 'Email atau password salah. Silakan coba lagi.');
        }
    }
    

}
