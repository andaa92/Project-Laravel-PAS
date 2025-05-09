@extends('layouts.app')

@section('title', 'Data Nilai')

@section('content')
    <h2>Data Nilai</h2>
    <a href="{{ route('nilai.create') }}">Tambah Nilai</a>
    <table>
        <thead>
            <tr>
                <th>Murid</th>
                <th>Guru</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
                <th>Predikat</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $n)
                <tr>
                    <td>{{ $n->murid->nama ?? '-' }}</td>
                    <td>{{ $n->guru->nama ?? '-' }}</td>
                    <td>{{ $n->mataPelajaran->nama ?? '-' }}</td>
                    <td>{{ $n->nilai }}</td>
                    <td>{{ $n->predikat }}</td>
                    <td>{{ $n->semester }}</td>
                    <td>
                        <a href="{{ route('nilai.edit', $n->id) }}">Edit</a>
                        <form action="{{ route('nilai.destroy', $n->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
