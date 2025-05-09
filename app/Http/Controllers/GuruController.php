<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index() {
        return response()->json(Guru::with(['user', 'mataPelajaran'])->get());
    }

    public function store(Request $request) {
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

        $guru = Guru::create($validated);
        return response()->json($guru, 201);
    }

    public function show(Guru $guru) {
        return response()->json($guru->load(['user', 'mataPelajaran']));
    }

    public function update(Request $request, Guru $guru) {
        $validated = $request->validate([
            'nama' => 'sometimes',
            'nip' => 'sometimes|unique:guru,nip,' . $guru->id,
            'email' => 'sometimes|email|unique:guru,email,' . $guru->id,
            'no_telp' => 'sometimes',
            'jenis_kelamin' => 'sometimes|in:L,P',
            'tgl_lahir' => 'sometimes|date',
            'id_user' => 'sometimes|exists:users,id',
            'id_mata_pelajaran' => 'nullable|exists:mata_pelajaran,id',
        ]);

        $guru->update($validated);
        return response()->json($guru);
    }

    public function destroy(Guru $guru) {
        $guru->delete();
        return response()->json(null, 204);
    }
}
