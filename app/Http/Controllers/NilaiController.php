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
        return response()->json(Nilai::with(['guru', 'murid', 'mataPelajaran'])->get());
    }

    // Menyimpan data nilai baru
    public function store(Request $request)
    {
        // Validasi input dari request
        $validated = $request->validate([
            'nilai' => 'required|numeric',
            'predikat' => 'required|string',
            'semester' => 'required|string',
            'id_guru' => 'required|exists:guru,id',
            'id_murid' => 'required|exists:murid,id',
            'id_mata_pelajaran' => 'required|exists:mata_pelajaran,id',
        ]);

        // Menyimpan data nilai ke database
        $nilai = Nilai::create($validated);

        return response()->json($nilai, 201);
    }

    // Menampilkan detail nilai berdasarkan ID
    public function show(Nilai $nilai)
    {
        return response()->json($nilai->load(['guru', 'murid', 'mataPelajaran']));
    }

    // Mengupdate data nilai yang sudah ada
    public function update(Request $request, Nilai $nilai)
    {
        $validated = $request->validate([
            'nilai' => 'sometimes|numeric',
            'predikat' => 'sometimes|string',
            'semester' => 'sometimes|string',
            'id_guru' => 'sometimes|exists:guru,id',
            'id_murid' => 'sometimes|exists:murid,id',
            'id_mata_pelajaran' => 'sometimes|exists:mata_pelajaran,id',
        ]);

        $nilai->update($validated);

        return response()->json($nilai);
    }

    // Menghapus data nilai
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();

        return response()->json(null, 204);
    }

    // Menampilkan form tambah nilai beserta data yang diperlukan (guru, murid, mata pelajaran)
    public function create()
    {
        $murid = Murid::all();
        $mataPelajaran = MataPelajaran::all();
        $guru = Guru::all();

        return view('nilai.create', compact('murid', 'mataPelajaran', 'guru'));
    }
}
