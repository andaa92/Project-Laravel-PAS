@php
    $icons = [
        'calendar' =>
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10..." />',
        'clipboard-list' =>
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6..." />',
        'speakerphone' =>
            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24..." />',
        'cog' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3..." />',
    ];
@endphp

<div
    class="bg-white rounded-xl shadow-sm p-6 flex flex-col items-center text-center hover:bg-blue-50 transition cursor-pointer">
    <div class="bg-blue-100 p-4 rounded-full mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            {!! $icons[$icon] ?? '' !!}
        </svg>
    </div>
    <h4 class="font-medium text-blue-800">{{ $title }}</h4>
    <p class="text-xs text-blue-400 mt-1">{{ $subtitle }}</p>
</div>
