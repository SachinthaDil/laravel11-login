<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // dd(Auth::user()->role);exit;
            return Auth::user()->isAdmin()
                ? redirect()->route('admin.dashboard')
                : redirect()->route('member.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput($request->only('email'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
