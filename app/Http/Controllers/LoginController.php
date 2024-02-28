<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required',
            'password' => 'required|min:5'
        ],
        [
            'email.required' => 'Email Wajib di isi',
            'password.required' => 'Password Wajib di isi',
            'password.min' => 'Password Minimal 5 karakter'
        ]);

        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();

            return redirect()->route('pelanggan.index')->with('success','Berhasil Login!!');
        }
        return back();
    }

    public function registrasi(){
        return view('auth.registrasi');
        
    }

    public function auth_regis(Request $request) 
    {
       
    }

      
}