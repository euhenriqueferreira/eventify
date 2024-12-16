@props([
    'route' => null,
    'post' => null,
])

@php
    $method = $post ? 'POST' : 'GET';
@endphp

<form {{ $attributes }} action="{{ $route }}" method="{{ $method }}">
    @if($method !== 'GET')
        @csrf
    @endif
    
    {{ $slot }}
</form>