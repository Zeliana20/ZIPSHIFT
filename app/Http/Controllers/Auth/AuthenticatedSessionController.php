<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        // Proses autentikasi
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            $request->session()->regenerate();

            // Redirect ke homepage-login setelah sukses login
            return redirect()->route('homepage-login');
        }

        // Jika gagal login, kembali ke halaman login dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        // Log out user
        Auth::guard('web')->logout();

        // Invalidate session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Redirect ke homepage setelah logout
        return redirect()->route('homepage'); // Arahkan ke homepage setelah logout
    }
}
