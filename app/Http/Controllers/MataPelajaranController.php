<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    // Menampilkan semua mata pelajaran (untuk API)
    public function index() {
        return response()->json(MataPelajaran::all());
    }

    // Menampilkan form untuk menambah mata pelajaran
    public function create() {
        return view('mata-pelajaran.create');  // Mengembalikan tampilan Blade untuk form tambah mata pelajaran
    }

    // Menyimpan data mata pelajaran yang baru
    public function store(Request $request) {
        $validated = $request->validate([
            'nama' => 'required|unique:mata_pelajaran',
        ]);

        // Menyimpan mata pelajaran ke database
        $mp = MataPelajaran::create($validated);

        // Mengalihkan ke halaman daftar mata pelajaran dengan pesan sukses
        return redirect()->route('mata-pelajaran.index')->with('success', 'Mata Pelajaran berhasil ditambahkan');
    }

    // Menampilkan detail mata pelajaran berdasarkan ID (untuk API)
    public function show(MataPelajaran $mataPelajaran) {
        return response()->json($mataPelajaran);
    }

    // Menampilkan form untuk mengedit mata pelajaran
    public function edit(MataPelajaran $mataPelajaran) {
        return view('mata-pelajaran.edit', compact('mataPelajaran'));  // Mengembalikan tampilan Blade untuk edit
    }

    // Mengupdate data mata pelajaran yang sudah ada
    public function update(Request $request, MataPelajaran $mataPelajaran) {
        $validated = $request->validate([
            'nama' => 'required|unique:mata_pelajaran,nama,' . $mataPelajaran->id,
        ]);

        // Mengupdate data mata pelajaran
        $mataPelajaran->update($validated);

        // Mengalihkan ke halaman daftar mata pelajaran dengan pesan sukses
        return redirect()->route('mata-pelajaran.index')->with('success', 'Mata Pelajaran berhasil diperbarui');
    }

    // Menghapus data mata pelajaran
    public function destroy(MataPelajaran $mataPelajaran) {
        $mataPelajaran->delete();

        // Menghapus dan mengalihkan ke halaman daftar mata pelajaran dengan pesan sukses
        return redirect()->route('mata-pelajaran.index')->with('success', 'Mata Pelajaran berhasil dihapus');
    }
}
