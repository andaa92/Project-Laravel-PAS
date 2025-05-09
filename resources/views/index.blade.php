{{-- @extends('layouts.app') --}}

{{-- @section('title', 'Dashboard') --}}

{{-- @section('content') --}}
<div class="container mt-4">
    <h1>Selamat Datang di Sistem Manajemen Nilai Sekolah</h1>
    <p>Dashboard ini memberikan gambaran umum tentang data yang ada di sistem.</p>

    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    {{-- Total Guru: {{ $totalGuru }} --}}
                </div>
                <div class="card-body">
                    <ul>
                        @if ($gurus->isEmpty())
                            <li>Tidak ada data guru.</li>
                        @else
                            @foreach ($gurus as $item)
                                <li>
                                    Nama: {{ $item->nama }} <br>
                                    NIP: {{ $item->nip }} <br>
                                    Email: {{ $item->email }} <br>
                                    Mata Pelajaran: {{ $item->mataPelajaran->nama ?? 'Tidak ada mata pelajaran' }}
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                Total Murid
            </div>
            <div class="card-body">
                {{-- <h5 class="card-title">{{ $totalMurid }}</h5> --}}
                <p class="card-text">Jumlah total murid yang terdaftar di sistem.</p>
                <a href="{{ route('murid.index') }}" class="btn btn-success">Lihat Data Murid</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header bg-warning text-white">
                Total Mata Pelajaran
            </div>
            <div class="card-body">
                {{-- <h5 class="card-title">{{ $totalMataPelajaran }}</h5> --}}
                <p class="card-text">Jumlah mata pelajaran yang tersedia di sistem.</p>
                <a href="{{ route('mata-pelajaran.index') }}" class="btn btn-warning">Lihat Mata Pelajaran</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header bg-info text-white">
                Total Nilai
            </div>
            <div class="card-body">
                {{-- <h5 class="card-title">{{ $totalNilai }}</h5> --}}
                <p class="card-text">Jumlah nilai yang terdaftar di sistem.</p>
                <a href="{{ route('nilai.index') }}" class="btn btn-info">Lihat Data Nilai</a>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}
