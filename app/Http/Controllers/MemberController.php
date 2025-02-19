<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members',
            'phone' => 'nullable|string|max:15',
            'password' => 'required|min:6|confirmed',
        ]);

        // Check if this is the first user
        $role = Member::count() == 0 ? 'admin' : 'member';

        $member = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => $role, // Assign role dynamically
        ]);

        Auth::login($member); // Auto-login after registration

        return $role === 'admin'
            ? redirect()->route('admin.dashboard')->with('success', 'Super Admin account created!')
            : redirect()->route('member.dashboard')->with('success', 'Registration successful!');
    }
}
