@props([
    'route' => null,
    'post' => null,
    'delete' => null,
])

@php
    $method = $post || $delete ? 'POST' : 'GET';
@endphp

<form {{ $attributes }} action="{{ $route }}" method="{{ $method }}">
    @if($method !== 'GET')
        @csrf
    @endif

    @if($delete)
        @method('delete')
    @endif

    {{ $slot }}
</form>