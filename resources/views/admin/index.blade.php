@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100">
        <div class="container mx-auto px-4 py-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-semibold text-blue-800">Dashboard</h1>
                <p class="text-blue-600 mt-2">Selamat datang kembali, Admin</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Guru -->
                @include('partials.dashboard_card', [
                    'title' => 'Jumlah Guru',
                    'value' => $jumlahGuru,
                    'icon' => 'user',
                    'color' => 'blue',
                ])
                <!-- Murid -->
                @include('partials.dashboard_card', [
                    'title' => 'Jumlah Murid',
                    'value' => $jumlahMurid,
                    'icon' => 'users',
                    'color' => 'blue',
                ])
                <!-- Mata Pelajaran -->
                @include('partials.dashboard_card', [
                    'title' => 'Jumlah Mata Pelajaran',
                    'value' => $jumlahMapel,
                    'icon' => 'book',
                    'color' => 'blue',
                ])
            </div>

            <!-- Aktivitas Terbaru -->
            <div class="bg-white rounded-xl shadow-sm mb-8 overflow-hidden">
                <div class="border-b border-blue-100 p-6">
                    <h3 class="text-lg font-semibold text-blue-800">Aktivitas Terbaru</h3>
                </div>
                <div class="p-6">
                    <ul class="space-y-4">
                        <li class="flex items-center p-3 bg-blue-50 rounded-lg">
                            <div class="bg-blue-200 p-2 rounded-full mr-4">
                                <x-heroicon-o-plus class="h-4 w-4 text-blue-600" />
                            </div>
                            <div>
                                <p class="text-sm text-blue-800">Guru baru ditambahkan</p>
                                <p class="text-xs text-blue-400">Hari ini, 10:30 AM</p>
                            </div>
                        </li>
                        <li class="flex items-center p-3 bg-blue-50 rounded-lg">
                            <div class="bg-blue-200 p-2 rounded-full mr-4">
                                <x-heroicon-o-calendar class="h-4 w-4 text-blue-600" />
                            </div>
                            <div>
                                <p class="text-sm text-blue-800">Jadwal pelajaran diperbarui</p>
                                <p class="text-xs text-blue-400">Kemarin, 16:45 PM</p>
                            </div>
                        </li>
                        <li class="flex items-center p-3 bg-blue-50 rounded-lg">
                            <div class="bg-blue-200 p-2 rounded-full mr-4">
                                <x-heroicon-o-document-text class="h-4 w-4 text-blue-600" />
                            </div>
                            <div>
                                <p class="text-sm text-blue-800">Laporan nilai semester diunggah</p>
                                <p class="text-xs text-blue-400">2 hari yang lalu, 09:15 AM</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Akses Cepat -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                @include('partials.quick_access', [
                    'title' => 'Jadwal',
                    'subtitle' => 'Kelola jadwal pelajaran',
                    'icon' => 'calendar',
                ])
                @include('partials.quick_access', [
                    'title' => 'Nilai',
                    'subtitle' => 'Input dan kelola nilai',
                    'icon' => 'clipboard-list',
                ])
                @include('partials.quick_access', [
                    'title' => 'Pengumuman',
                    'subtitle' => 'Buat pengumuman baru',
                    'icon' => 'speakerphone',
                ])
                @include('partials.quick_access', [
                    'title' => 'Pengaturan',
                    'subtitle' => 'Kelola akun & sistem',
                    'icon' => 'cog',
                ])
            </div>
        </div>
    </div>
@endsection
