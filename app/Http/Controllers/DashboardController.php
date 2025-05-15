<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


public function index()
{
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login'); // Atau tampilkan error
    }

    return match ($user->role) {
        'admin' => redirect()->route('admin.index'),
        'guru' => redirect()->route('guru.index'),
        'murid' => redirect()->route('murid.index'),
        default => abort(403),
    };
}

}
