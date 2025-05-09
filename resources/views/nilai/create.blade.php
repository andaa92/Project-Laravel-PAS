@extends('layouts.app')

@section('title', 'Tambah Data Nilai')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Data Nilai</h2>

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

        <form action="{{ route('nilai.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="murid_id" class="form-label">Murid</label>
                <select name="murid_id" class="form-select" required>
                    <option value="">-- Pilih Murid --</option>
                    @foreach ($murid as $item)
                        <option value="{{ $item->id }}" {{ old('murid_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }} (NIS: {{ $item->nis }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="mata_pelajaran_id" class="form-label">Mata Pelajaran</label>
                <select name="mata_pelajaran_id" class="form-select" required>
                    <option value="">-- Pilih Mata Pelajaran --</option>
                    @foreach ($mataPelajaran as $mp)
                        <option value="{{ $mp->id }}" {{ old('mata_pelajaran_id') == $mp->id ? 'selected' : '' }}>
                            {{ $mp->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="number" name="nilai" class="form-control" value="{{ old('nilai') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
