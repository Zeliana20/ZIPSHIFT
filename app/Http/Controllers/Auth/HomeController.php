<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function showLogin()
    {
        return view('auth.login'); // View login bawaan Laravel
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('homepageLogin'); // Redirect ke homepage login
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
