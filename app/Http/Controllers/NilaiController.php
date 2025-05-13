<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Murid;
use App\Models\MataPelajaran;
use App\Models\Guru;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    // Menampilkan semua nilai beserta data guru, murid, dan mata pelajaran
    public function index()
    {
        $nilai = Nilai::with(['guru', 'murid', 'mataPelajaran'])->get();
        return view('nilai.index', compact('nilai'));
    }

    // Menampilkan form tambah nilai
    public function create()
    {
        $murid = Murid::all();
        $mataPelajaran = MataPelajaran::all();
        $guru = Guru::all();

        return view('nilai.create', compact('murid', 'mataPelajaran', 'guru'));
    }

    // Menyimpan data nilai baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nilai' => 'required|numeric',
            'predikat' => 'required|string',
            'semester' => 'required|string',
            'id_guru' => 'required|exists:guru,id',
            'id_murid' => 'required|exists:murid,id',
            'id_mata_pelajaran' => 'required|exists:mata_pelajaran,id',
        ]);

        Nilai::create($validated);

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil ditambahkan.');
    }

    // Menampilkan form edit nilai
    public function edit(Nilai $nilai)
    {
        $murid = Murid::all();
        $mataPelajaran = MataPelajaran::all();
        $guru = Guru::all();

        return view('nilai.edit', compact('nilai', 'murid', 'mataPelajaran', 'guru'));
    }

    // Mengupdate data nilai
    public function update(Request $request, Nilai $nilai)
    {
        $validated = $request->validate([
            'nilai' => 'required|numeric',
            'predikat' => 'required|string',
            'semester' => 'required|string',
            'id_guru' => 'required|exists:guru,id',
            'id_murid' => 'required|exists:murid,id',
            'id_mata_pelajaran' => 'required|exists:mata_pelajaran,id',
        ]);

        $nilai->update($validated);

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil diubah.');
    }

    // Menghapus data nilai
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil dihapus.');
    }

    // Menampilkan detail nilai (opsional jika pakai API)
    public function show(Nilai $nilai)
    {
        return response()->json($nilai->load(['guru', 'murid', 'mataPelajaran']));
    }
}
