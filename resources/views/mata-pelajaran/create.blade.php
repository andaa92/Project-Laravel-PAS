@extends('layouts.app')

@section('title', 'Tambah Mata Pelajaran')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Mata Pelajaran</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mata-pelajaran.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mata Pelajaran</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Mata Pelajaran"
                    value="{{ old('nama') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('mata-pelajaran.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
