@extends('layouts.app')

@section('title', 'Tambah Data Guru')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Data Guru</h2>

        <!-- Menampilkan error jika ada input yang salah -->
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

        <!-- Form untuk input data guru -->
        <form action="{{ route('guru.store') }}" method="POST">
            @csrf

            <!-- Nama Guru -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Guru</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama') }}" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- NIP -->
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
                    value="{{ old('nip') }}" required>
                @error('nip')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nomor Telepon -->
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                    value="{{ old('no_telp') }}" required>
                @error('no_telp')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Jenis Kelamin -->
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label><br>
                <label><input type="radio" name="jenis_kelamin" value="L"
                        {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }}> Laki-laki</label>
                <label class="ms-3"><input type="radio" name="jenis_kelamin" value="P"
                        {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}> Perempuan</label>
            </div>

            <!-- Tanggal Lahir -->
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                    value="{{ old('tgl_lahir') }}" required>
                @error('tgl_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Pilih User -->
            <div class="mb-3">
                <label for="id_user" class="form-label">Akun User</label>
                <select name="id_user" class="form-select @error('id_user') is-invalid @enderror" required>
                    <option value="">-- Pilih User --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('id_user') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }} ({{ $user->email }})
                        </option>
                    @endforeach
                </select>
                @error('id_user')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Pilih Mata Pelajaran -->
            <div class="mb-3">
                <label for="id_mata_pelajaran" class="form-label">Mata Pelajaran</label>
                <select name="id_mata_pelajaran" class="form-select @error('id_mata_pelajaran') is-invalid @enderror">
                    <option value="">-- Pilih Mata Pelajaran --</option>
                    @foreach ($mataPelajaran as $mp)
                        <option value="{{ $mp->id }}" {{ old('id_mata_pelajaran') == $mp->id ? 'selected' : '' }}>
                            {{ $mp->nama }}
                        </option>
                    @endforeach
                </select>
                @error('id_mata_pelajaran')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('guru.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
