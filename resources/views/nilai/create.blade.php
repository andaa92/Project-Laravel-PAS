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
                <label for="id_murid" class="form-label">Murid</label>
                <select name="id_murid" class="form-select" required>
                    <option value="">-- Pilih Murid --</option>
                    @foreach ($murid as $item)
                        <option value="{{ $item->id }}" {{ old('id_murid') == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }} (NIS: {{ $item->nis }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_guru" class="form-label">Guru</label>
                <select name="id_guru" class="form-select" required>
                    <option value="">-- Pilih Guru --</option>
                    @foreach ($guru as $g)
                        <option value="{{ $g->id }}" {{ old('id_guru') == $g->id ? 'selected' : '' }}>
                            {{ $g->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_mata_pelajaran" class="form-label">Mata Pelajaran</label>
                <select name="id_mata_pelajaran" class="form-select" required>
                    <option value="">-- Pilih Mata Pelajaran --</option>
                    @foreach ($mataPelajaran as $mp)
                        <option value="{{ $mp->id }}" {{ old('id_mata_pelajaran') == $mp->id ? 'selected' : '' }}>
                            {{ $mp->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="number" name="nilai" class="form-control" value="{{ old('nilai') }}" required>
            </div>

            <div class="mb-3">
                <label for="predikat" class="form-label">Predikat</label>
                <input type="text" name="predikat" class="form-control" value="{{ old('predikat') }}" required>
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <select name="semester" class="form-select" required>
                    <option value="">-- Pilih Semester --</option>
                    <option value="Ganjil" {{ old('semester') == 'Ganjil' ? 'selected' : '' }}>Ganjil</option>
                    <option value="Genap" {{ old('semester') == 'Genap' ? 'selected' : '' }}>Genap</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
