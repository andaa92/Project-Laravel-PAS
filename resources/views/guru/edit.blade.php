@extends('layouts.app')

@section('title', 'Edit Data Guru')

@section('content')
    <div class="container mt-4">
        <h2>Edit Data Guru</h2>

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

        <form action="{{ route('guru.update', $guru->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Guru</label>
                <input type="text" class="form-control" name="nama" value="{{ old('nama', $guru->nama) }}" required>
            </div>

            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" name="nip" value="{{ old('nip', $guru->nip) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ old('email', $guru->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telp" value="{{ old('no_telp', $guru->no_telp) }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label><br>
                <label>
                    <input type="radio" name="jenis_kelamin" value="L"
                        {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'L' ? 'checked' : '' }}>
                    Laki-laki
                </label>
                <label class="ms-3">
                    <input type="radio" name="jenis_kelamin" value="P"
                        {{ old('jenis_kelamin', $guru->jenis_kelamin) == 'P' ? 'checked' : '' }}>
                    Perempuan
                </label>
            </div>

            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir', $guru->tgl_lahir) }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="id_user" class="form-label">Akun User</label>
                <select name="id_user" class="form-select" required>
                    <option value="">-- Pilih User --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}"
                            {{ old('id_user', $guru->id_user) == $user->id ? 'selected' : '' }}>
                            {{ $user->name }} ({{ $user->email }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_mata_pelajaran" class="form-label">Mata Pelajaran</label>
                <select name="id_mata_pelajaran" class="form-select">
                    <option value="">-- Pilih Mata Pelajaran --</option>
                    @foreach ($mataPelajaran as $mp)
                        <option value="{{ $mp->id }}"
                            {{ old('id_mata_pelajaran', $guru->id_mata_pelajaran) == $mp->id ? 'selected' : '' }}>
                            {{ $mp->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('guru.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
