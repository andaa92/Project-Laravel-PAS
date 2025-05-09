@extends('layouts.app')

@section('content')
    <h1>Tambah Murid Baru</h1>
    <form action="{{ route('murid.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama"><br>

        <label>NIS:</label>
        <input type="text" name="nis"><br>

        <label>Kelas:</label>
        <input type="text" name="kelas"><br>

        <label>No Telp:</label>
        <input type="text" name="no_telp"><br>

        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir"><br>

        <label>User ID:</label>
        <input type="number" name="id_user"><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
