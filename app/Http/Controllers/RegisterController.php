<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        
            return view('auth.register');
    }

    public function store(Request $request)
    {
        // return request()->all();
        
        $validatedData = $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

            return redirect()->intended('login');
        // }

        // return back()->withInput()->with('failed','Register Failed!');
        }
}