<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Fungsi login
    public function login(Request $request)
{
    $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ]);

    // Auth::attempt akan pakai username dan password
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Redirect berdasarkan role
        $user = Auth::user();
        return match ($user->role) {
            'admin' => redirect()->route('admin.index'),
            'guru' => redirect()->route('guru.index'),
            'murid' => redirect()->route('murid.index'),
            default => redirect('/index'),
        };
    }

    return back()->withErrors([
        'username' => 'Username atau password salah.',
    ]);
}

}
