@extends('layouts.app')

@section('title', 'Data Nilai')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100">
        <div class="container mx-auto px-4 py-8">
            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                <div>
                    <h1 class="text-3xl font-semibold text-blue-800">Data Nilai</h1>
                    <p class="text-blue-600 mt-1">Kelola data nilai murid</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('nilai.create') }}"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Tambah Nilai
                    </a>
                </div>
            </div>

            <!-- Filter & Search Section (Optional) -->
            <div class="bg-white rounded-xl shadow-sm p-4 mb-6">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <input type="text" placeholder="Cari berdasarkan nama murid..."
                            class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div class="flex-1 md:flex-initial">
                        <select
                            class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Semua Semester</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                        </select>
                    </div>
                    <div class="flex-1 md:flex-initial">
                        <select
                            class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Semua Mata Pelajaran</option>
                            <option value="1">Matematika</option>
                            <option value="2">Bahasa Indonesia</option>
                            <option value="3">IPA</option>
                        </select>
                    </div>
                    <button class="px-4 py-2 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Data Table -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-blue-100">
                        <thead class="bg-blue-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-blue-600 uppercase tracking-wider">
                                    Murid</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-blue-600 uppercase tracking-wider">
                                    Guru</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-blue-600 uppercase tracking-wider">
                                    Mata Pelajaran</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-blue-600 uppercase tracking-wider">
                                    Nilai</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-blue-600 uppercase tracking-wider">
                                    Predikat</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-blue-600 uppercase tracking-wider">
                                    Semester</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-blue-600 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-blue-50">
                            @foreach ($nilai as $n)
                                <tr class="hover:bg-blue-50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-800">
                                        {{ $n->murid->nama ?? '-' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-800">
                                        {{ $n->guru->nama ?? '-' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-800">
                                        {{ $n->mataPelajaran->nama ?? '-' }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-800">
                                        {{ $n->nilai }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($n->predikat == 'A')
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                {{ $n->predikat }}
                                            </span>
                                        @elseif($n->predikat == 'B')
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                {{ $n->predikat }}
                                            </span>
                                        @elseif($n->predikat == 'C')
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                {{ $n->predikat }}
                                            </span>
                                        @else
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                {{ $n->predikat }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-800">{{ $n->semester }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('nilai.edit', $n->id) }}"
                                                class="text-blue-600 hover:text-blue-800 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <form action="{{ route('nilai.destroy', $n->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                                                    class="text-red-600 hover:text-red-800 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center">
                <nav class="inline-flex rounded-md shadow-sm">
                    <a href="#"
                        class="py-2 px-4 bg-white text-blue-600 border border-blue-200 rounded-l-lg hover:bg-blue-50 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>
                    <a href="#" class="py-2 px-4 bg-blue-600 text-white border border-blue-600">1</a>
                    <a href="#"
                        class="py-2 px-4 bg-white text-blue-600 border border-blue-200 hover:bg-blue-50 transition">2</a>
                    <a href="#"
                        class="py-2 px-4 bg-white text-blue-600 border border-blue-200 hover:bg-blue-50 transition">3</a>
                    <a href="#"
                        class="py-2 px-4 bg-white text-blue-600 border border-blue-200 rounded-r-lg hover:bg-blue-50 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </div>
@endsection
