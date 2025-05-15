@php
    $icons = [
        'user' => '<path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />',
        'users' => '<path d="M17 20h5v-2a3 3 0 00-5.356-1.857..."/>',
        'book' => '<path d="M12 6.253v13M12 6.253C10.832 5.477..."/>',
    ];
@endphp

<div
    class="bg-white rounded-xl shadow-sm border border-{{ $color }}-100 overflow-hidden transform transition hover:scale-105 hover:shadow-md">
    <div class="p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-{{ $color }}-400">{{ $title }}</p>
                <h2 class="text-3xl font-bold text-{{ $color }}-800 mt-1">{{ $value }}</h2>
            </div>
            <div class="bg-{{ $color }}-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-{{ $color }}-600" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    {!! $icons[$icon] ?? '' !!}
                </svg>
            </div>
        </div>
        <div class="mt-4 pt-4 border-t border-{{ $color }}-50">
            <p class="text-xs text-{{ $color }}-400">Lihat detail</p>
        </div>
    </div>
    <div class="h-1 bg-gradient-to-r from-{{ $color }}-400 to-{{ $color }}-600"></div>
</div>
