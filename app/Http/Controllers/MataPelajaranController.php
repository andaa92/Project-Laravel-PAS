<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index() {
        return response()->json(MataPelajaran::all());
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama' => 'required|unique:mata_pelajaran',
        ]);

        $mp = MataPelajaran::create($validated);
        return response()->json($mp, 201);
    }

    public function show(MataPelajaran $mataPelajaran) {
        return response()->json($mataPelajaran);
    }

    public function update(Request $request, MataPelajaran $mataPelajaran) {
        $validated = $request->validate([
            'nama' => 'required|unique:mata_pelajaran,nama,' . $mataPelajaran->id,
        ]);

        $mataPelajaran->update($validated);
        return response()->json($mataPelajaran);
    }

    public function destroy(MataPelajaran $mataPelajaran) {
        $mataPelajaran->delete();
        return response()->json(null, 204);
    }
}
