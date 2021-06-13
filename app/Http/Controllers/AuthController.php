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
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->username == 'admin') {
                return view('admin.index');
            }
            elseif ($user->username == 'kasir') {
                return redirect()->route('/kasir/index');
            }
            elseif ($user->username == 'manager') {
                return redirect()->intended('manager');
            }
        }
        return redirect('/')->with('alert','Oppes! Silahkan Cek Inputanmu');
    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }
}
