@props([
    'route' => null,
    'post' => null,
    'put' => null,
    'delete' => null,
])

@php
    $method = $post || $delete || $put ? 'POST' : 'GET';
@endphp

<form {{ $attributes }} action="{{ $route }}" method="{{ $method }}">
    @if($method !== 'GET')
        @csrf
    @endif

    @if($delete)
        @method('delete')
    @endif

    @if($put)
        @method('put')
    @endif

    {{ $slot }}
</form>