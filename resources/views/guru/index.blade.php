@extends('layouts.app')

@section('title', 'Daftar Guru')

@section('content')
    <div class="container mt-4">
        <h2>Daftar Guru</h2>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        Daftar Guru {{-- Total: {{ $totalGuru }} --}}
                    </div>
                    <div class="card-body">
                        @if ($gurus->isEmpty())
                            <p class="text-muted">Tidak ada data guru.</p>
                        @else
                            <ul class="list-unstyled">
                                @foreach ($gurus as $item)
                                    <li class="mb-3 border-bottom pb-2">
                                        <strong>{{ $item->nama }}</strong><br>
                                        NIP: {{ $item->nip }}<br>
                                        Email: {{ $item->email }}<br>
                                        Mata Pelajaran: {{ $item->mataPelajaran->nama ?? '-' }}<br>

                                        <a href="{{ route('guru.edit', $item->id) }}" class="btn btn-sm btn-warning mt-2">
                                            Edit
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
