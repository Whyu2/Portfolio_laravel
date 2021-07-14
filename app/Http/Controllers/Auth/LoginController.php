<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('name', 'password'))) {
            return redirect('/admin');
        }
        return redirect('login')->with('status', 'Login Gagal Username Password Tidak Sesuai');
    }

    public function logout (){
        Auth::logout();
        return redirect('/');
    }
}
