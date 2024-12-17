<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;

class RegisteredUserController extends Controller
{
    /**
     * Show the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('signin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
        ]);

        event(new \Illuminate\Auth\Events\Registered($user));

        \Illuminate\Support\Facades\Auth::login($user);

        return redirect()->intended(route('homepage-login'));
    }
}
