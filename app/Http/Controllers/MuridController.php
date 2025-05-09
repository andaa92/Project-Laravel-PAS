<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index() {
        return response()->json(Murid::with('user')->get());
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:murid',
            'kelas' => 'required',
            'no_telp' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'id_user' => 'required|exists:users,id',
        ]);

        $murid = Murid::create($validated);
        return response()->json($murid, 201);
    }

    public function show(Murid $murid) {
        return response()->json($murid->load('user'));
    }

    public function update(Request $request, Murid $murid) {
        $validated = $request->validate([
            'nama' => 'sometimes',
            'nis' => 'sometimes|unique:murid,nis,' . $murid->id,
            'kelas' => 'sometimes',
            'no_telp' => 'sometimes',
            'jenis_kelamin' => 'sometimes|in:L,P',
            'tgl_lahir' => 'sometimes|date',
            'id_user' => 'sometimes|exists:users,id',
        ]);

        $murid->update($validated);
        return response()->json($murid);
    }

    public function destroy(Murid $murid) {
        $murid->delete();
        return response()->json(null, 204);
    }
}
