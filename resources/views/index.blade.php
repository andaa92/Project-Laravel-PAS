@extends('layouts.app')

@section('title', 'Dashboard')

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
                <!-- Card Guru -->
                <div
                    class="bg-white rounded-xl shadow-sm border border-blue-100 overflow-hidden transform transition hover:scale-105 hover:shadow-md">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-blue-400">Jumlah Guru</p>
                                <h2 class="text-3xl font-bold text-blue-800 mt-1">{{ $jumlahGuru }}</h2>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 pt-4 border-t border-blue-50">
                            <p class="text-xs text-blue-400">Lihat detail</p>
                        </div>
                    </div>
                    <div class="h-1 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                </div>

                <!-- Card Murid -->
                <div
                    class="bg-white rounded-xl shadow-sm border border-blue-100 overflow-hidden transform transition hover:scale-105 hover:shadow-md">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-blue-400">Jumlah Murid</p>
                                <h2 class="text-3xl font-bold text-blue-800 mt-1">{{ $jumlahMurid }}</h2>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 pt-4 border-t border-blue-50">
                            <p class="text-xs text-blue-400">Lihat detail</p>
                        </div>
                    </div>
                    <div class="h-1 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                </div>

                <!-- Card Mata Pelajaran -->
                <div
                    class="bg-white rounded-xl shadow-sm border border-blue-100 overflow-hidden transform transition hover:scale-105 hover:shadow-md">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-blue-400">Jumlah Mata Pelajaran</p>
                                <h2 class="text-3xl font-bold text-blue-800 mt-1">{{ $jumlahMapel }}</h2>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 pt-4 border-t border-blue-50">
                            <p class="text-xs text-blue-400">Lihat detail</p>
                        </div>
                    </div>
                    <div class="h-1 bg-gradient-to-r from-blue-400 to-blue-600"></div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="bg-white rounded-xl shadow-sm mb-8 overflow-hidden">
                <div class="border-b border-blue-100 p-6">
                    <h3 class="text-lg font-semibold text-blue-800">Aktivitas Terbaru</h3>
                </div>
                <div class="p-6">
                    <ul class="space-y-4">
                        <li class="flex items-center p-3 bg-blue-50 rounded-lg">
                            <div class="bg-blue-200 p-2 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-blue-800">Guru baru ditambahkan</p>
                                <p class="text-xs text-blue-400">Hari ini, 10:30 AM</p>
                            </div>
                        </li>
                        <li class="flex items-center p-3 bg-blue-50 rounded-lg">
                            <div class="bg-blue-200 p-2 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-blue-800">Jadwal pelajaran diperbarui</p>
                                <p class="text-xs text-blue-400">Kemarin, 16:45 PM</p>
                            </div>
                        </li>
                        <li class="flex items-center p-3 bg-blue-50 rounded-lg">
                            <div class="bg-blue-200 p-2 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-blue-800">Laporan nilai semester diunggah</p>
                                <p class="text-xs text-blue-400">2 hari yang lalu, 09:15 AM</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Quick Access -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div
                    class="bg-white rounded-xl shadow-sm p-6 flex flex-col items-center text-center hover:bg-blue-50 transition cursor-pointer">
                    <div class="bg-blue-100 p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="font-medium text-blue-800">Jadwal</h4>
                    <p class="text-xs text-blue-400 mt-1">Kelola jadwal pelajaran</p>
                </div>
                <div
                    class="bg-white rounded-xl shadow-sm p-6 flex flex-col items-center text-center hover:bg-blue-50 transition cursor-pointer">
                    <div class="bg-blue-100 p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h4 class="font-medium text-blue-800">Nilai</h4>
                    <p class="text-xs text-blue-400 mt-1">Input dan kelola nilai</p>
                </div>
                <div
                    class="bg-white rounded-xl shadow-sm p-6 flex flex-col items-center text-center hover:bg-blue-50 transition cursor-pointer">
                    <div class="bg-blue-100 p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </div>
                    <h4 class="font-medium text-blue-800">Pengumuman</h4>
                    <p class="text-xs text-blue-400 mt-1">Buat pengumuman baru</p>
                </div>
                <div
                    class="bg-white rounded-xl shadow-sm p-6 flex flex-col items-center text-center hover:bg-blue-50 transition cursor-pointer">
                    <div class="bg-blue-100 p-4 rounded-full mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h4 class="font-medium text-blue-800">Pengaturan</h4>
                    <p class="text-xs text-blue-400 mt-1">Kelola pengaturan sistem</p>
                </div>
            </div>
        </div>
    </div>
@endsection
