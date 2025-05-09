<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\User;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index()
    {
        $murid = Murid::with('user')->get();
        return view('murid.index', compact('murid'));
    }

    public function create()
    {
        $users = User::all();
        return view('murid.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:murid',
            'kelas' => 'required',
            'no_telp' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'id_user' => 'required|exists:users,id',
        ]);

        Murid::create($validated);
        return redirect()->route('murid.index')->with('success', 'Data murid berhasil ditambahkan');
    }

    public function show(Murid $murid)
    {
        return view('murid.show', compact('murid'));
    }

    public function edit(Murid $murid)
    {
        $users = User::all();
        return view('murid.edit', compact('murid', 'users'));
    }

    public function update(Request $request, Murid $murid)
    {
        $validated = $request->validate([
            'nama' => 'sometimes|required',
            'nis' => 'sometimes|required|unique:murid,nis,' . $murid->id,
            'kelas' => 'sometimes|required',
            'no_telp' => 'sometimes|required',
            'jenis_kelamin' => 'sometimes|required|in:L,P',
            'tgl_lahir' => 'sometimes|required|date',
            'id_user' => 'sometimes|required|exists:users,id',
        ]);

        $murid->update($validated);
        return redirect()->route('murid.index')->with('success', 'Data murid berhasil diperbarui');
    }

    public function destroy(Murid $murid)
    {
        $murid->delete();
        return redirect()->route('murid.index')->with('success', 'Data murid berhasil dihapus');
    }
}
