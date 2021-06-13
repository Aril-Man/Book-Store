<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // baru


class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function proses_login(Request $request)
    {
       $credentials = $request->only('username','password','akses');

       if (Auth::attempt($credentials)) {
           return redirect('/admin')->with('alert','Anda berhasil masuk');
       }

       return redirect('/')->with('alert', 'Username atau password salah');
    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }
}
