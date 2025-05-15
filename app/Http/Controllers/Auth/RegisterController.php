<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Pastikan file ini ada di: resources/views/auth/register.blade.php
    }

    public function register(Request $request)
{
    $request->validate([
        'username' => 'required|string|unique:users',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|confirmed|min:6',
        'role' => 'required|in:admin,guru,murid',
    ]);

    User::create([
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
    ]);

    return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
}


}
