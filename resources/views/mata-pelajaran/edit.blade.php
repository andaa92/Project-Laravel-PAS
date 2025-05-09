@extends('layouts.app')

@section('title', 'Edit Mata Pelajaran')

@section('content')
    <h2>Edit Mata Pelajaran</h2>
    <form action="{{ route('mata-pelajaran.update', $mataPelajaran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nama" value="{{ $mataPelajaran->nama }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
