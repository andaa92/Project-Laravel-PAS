@extends('layouts.app')

@section('title', 'Edit Data Murid')

@section('content')
    <div class="container mt-4">
        <h2>Edit Data Murid</h2>

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

        <form action="{{ route('murid.update', $murid->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama', $murid->nama) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">NIS</label>
                <input type="text" name="nis" class="form-control" value="{{ old('nis', $murid->nis) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $murid->email) }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">No Telepon</label>
                <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp', $murid->no_telp) }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label><br>
                <label><input type="radio" name="jenis_kelamin" value="L"
                        {{ old('jenis_kelamin', $murid->jenis_kelamin) == 'L' ? 'checked' : '' }}> Laki-laki</label>
                <label class="ms-3"><input type="radio" name="jenis_kelamin" value="P"
                        {{ old('jenis_kelamin', $murid->jenis_kelamin) == 'P' ? 'checked' : '' }}> Perempuan</label>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control"
                    value="{{ old('tgl_lahir', $murid->tgl_lahir) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Akun User</label>
                <select name="id_user" class="form-select" required>
                    <option value="">-- Pilih User --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}"
                            {{ old('id_user', $murid->id_user) == $user->id ? 'selected' : '' }}>
                            {{ $user->name }} ({{ $user->email }})
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('murid.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
