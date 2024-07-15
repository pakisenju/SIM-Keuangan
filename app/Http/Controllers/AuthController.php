<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rules = [
            'username' => 'required',
            'password' => 'required|min:8',
        ];

        $messages = [
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password harus lebih dari 8 karakter',
        ];

        $request->validate($rules, $messages);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('SUCCESS', 'Login berhasil');
        }

        return redirect()->back()->with('ERROR', 'Username atau Password yang anda masukkan salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('dashboard');
    }
}
