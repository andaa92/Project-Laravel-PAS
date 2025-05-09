<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index() {
        return response()->json(Nilai::with(['guru', 'murid', 'mataPelajaran'])->get());
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nilai' => 'required|numeric',
            'predikat' => 'required',
            'semester' => 'required',
            'id_guru' => 'required|exists:guru,id',
            'id_murid' => 'required|exists:murid,id',
            'id_mata_pelajaran' => 'required|exists:mata_pelajaran,id',
        ]);

        $nilai = Nilai::create($validated);
        return response()->json($nilai, 201);
    }

    public function show(Nilai $nilai) {
        return response()->json($nilai->load(['guru', 'murid', 'mataPelajaran']));
    }

    public function update(Request $request, Nilai $nilai) {
        $validated = $request->validate([
            'nilai' => 'sometimes|numeric',
            'predikat' => 'sometimes',
            'semester' => 'sometimes',
            'id_guru' => 'sometimes|exists:guru,id',
            'id_murid' => 'sometimes|exists:murid,id',
            'id_mata_pelajaran' => 'sometimes|exists:mata_pelajaran,id',
        ]);

        $nilai->update($validated);
        return response()->json($nilai);
    }

    public function destroy(Nilai $nilai) {
        $nilai->delete();
        return response()->json(null, 204);
    }
}
