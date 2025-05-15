<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Murid;
use App\Models\Nilai;
use App\Models\MataPelajaran;

class AdminController extends Controller
{
    public function index()
    {
        // Hitung jumlah entitas yang akan ditampilkan di dashboard
        $jumlahGuru = Guru::count();
        $jumlahMurid = Murid::count();
        $jumlahNilai = Nilai::count();
        $jumlahMapel = MataPelajaran::count();

        // Kirim semua data ke view
        return view('admin.index', compact('jumlahGuru', 'jumlahMurid', 'jumlahNilai', 'jumlahMapel'));
    }
}
