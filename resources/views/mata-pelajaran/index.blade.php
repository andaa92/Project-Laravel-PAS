@extends('layouts.app')

@section('title', 'Mata Pelajaran')

@section('content')
    <div class="container mt-4">
        <h2>Daftar Mata Pelajaran</h2>
        <a href="{{ route('mata-pelajaran.create') }}" class="btn btn-primary mb-3">Tambah Mata Pelajaran</a>

        <!-- Tabel Daftar Mata Pelajaran -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Mata Pelajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mataPelajaran as $mp)
                    <tr>
                        <td>{{ $mp->nama }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('mata-pelajaran.edit', $mp->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Form Hapus Mata Pelajaran -->
                            <form action="{{ route('mata-pelajaran.destroy', $mp->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin ingin menghapus?')"
                                    class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
