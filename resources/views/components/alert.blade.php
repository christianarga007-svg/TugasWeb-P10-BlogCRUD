@props(['type' => 'success'])

@php
    $color = $type === 'success' ? 'bg-green-100 text-green-800 border-green-400' : 'bg-red-100 text-red-800 border-red-400';
@endphp

<div class="{{ $color }} px-4 py-3 rounded border mb-4 shadow-sm">
    {{ $slot }}
</div>