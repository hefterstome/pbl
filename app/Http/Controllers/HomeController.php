<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home',[
            'title' => 'Home', 
        ]);
    }
    public function login(){
        return view('page.login');
    }
    public function admin(){
        return view('page.login-admin');
    }
    public function registrasi(){
        return view('page.registrasi');
    }
}
