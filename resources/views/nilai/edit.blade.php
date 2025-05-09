@extends('layouts.app')

@section('title', 'Edit Nilai')

@section('content')
    <h2>Edit Nilai</h2>
    <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="number" name="nilai" value="{{ $nilai->nilai }}" required>
        <input type="text" name="predikat" value="{{ $nilai->predikat }}" required>
        <input type="text" name="semester" value="{{ $nilai->semester }}" required>
        <input type="number" name="id_mata_pelajaran" value="{{ $nilai->id_mata_pelajaran }}" required>
        <input type="number" name="id_guru" value="{{ $nilai->id_guru }}" required>
        <input type="number" name="id_murid" value="{{ $nilai->id_murid }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
