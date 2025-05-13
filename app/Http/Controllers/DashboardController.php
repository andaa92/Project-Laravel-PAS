<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        return match ($role) {
            'admin' => redirect()->route('admin.dashboard'),
            'guru' => redirect()->route('guru.dashboard'),
            'murid' => redirect()->route('murid.dashboard'),
            default => abort(403),
        };
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function guru()
    {
        return view('guru.index');
    }

    public function murid()
    {
        return view('murid.index');
    }
}
