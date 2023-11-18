<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ],
        [
            'username.required'=>'Email tidak boleh kosong',
            'password.required'=>"Password tidak boleh kosong"
        ]);

        $infologin = [
            'username'=>$request->username,
            'password'=>$request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('/admin');
        } else {
            return redirect('/admin/login')->withErrors('Username dan Password salah')->withInput();
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
