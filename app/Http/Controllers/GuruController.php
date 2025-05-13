<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        // Eager load relasi 'user' dan 'mataPelajaran'
        $gurus = Guru::with(['user', 'mataPelajaran'])->get();

        return view('guru.index', [
            'gurus' => $gurus,
        ]);
    }

    public function create()
    {
        $users = User::all();
        $mataPelajaran = MataPelajaran::all();
        return view('guru.create', compact('users', 'mataPelajaran'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validated = $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:guru',
            'email' => 'required|email|unique:guru',
            'no_telp' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'id_user' => 'required|exists:users,id',
            'id_mata_pelajaran' => 'nullable|exists:mata_pelajaran,id',
        ]);

        // Jika id_mata_pelajaran tidak disertakan, set ke null
        $validated['id_mata_pelajaran'] = $validated['id_mata_pelajaran'] ?? null;

        // Simpan data guru
        Guru::create($validated);
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    public function edit(Guru $guru)
    {
        $users = User::all();
        $mataPelajaran = MataPelajaran::all();
        return view('guru.edit', compact('guru', 'users', 'mataPelajaran'));
    }

    public function update(Request $request, Guru $guru)
    {
        // Validasi data untuk update
        $validated = $request->validate([
            'nama' => 'sometimes|required',
            'nip' => 'sometimes|required|unique:guru,nip,' . $guru->id,
            'email' => 'sometimes|required|email|unique:guru,email,' . $guru->id,
            'no_telp' => 'sometimes|required',
            'jenis_kelamin' => 'sometimes|required|in:L,P',
            'tgl_lahir' => 'sometimes|required|date',
            'id_user' => 'sometimes|required|exists:users,id',
            'id_mata_pelajaran' => 'nullable|exists:mata_pelajaran,id',
        ]);

        // Jika id_mata_pelajaran tidak disertakan, set ke null
        $validated['id_mata_pelajaran'] = $validated['id_mata_pelajaran'] ?? null;

        // Update data guru
        $guru->update($validated);
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus');
    }
}
