@extends('layouts.app')

@section('title', 'Edit Mata Pelajaran')

@section('content')
    <div class="container mt-4">
        <h2>Edit Mata Pelajaran</h2>

        <form action="{{ route('mata-pelajaran.update', $mataPelajaran->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="nama">Nama Mata Pelajaran</label>
                <input type="text" name="nama" id="nama" class="form-control"
                    value="{{ old('nama', $mataPelajaran->nama) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('mata-pelajaran.index') }}" class="btn btn-secondary">Kembali</a>
        </form>



        <form action="{{ route('mata-pelajaran.destroy', $mataPelajaran->id) }}" method="POST" class="mt-3">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Yakin ingin menghapus mata pelajaran ini?')"
                class="btn btn-danger">Hapus Mata Pelajaran</button>
        </form>
    </div>
@endsection
