@props([
    'title' => null,
    'data'
])

<div {{ $attributes }}>
    @if($title)
        <h2 class="text-base font-normal">{{ $title }}</h2>
    @endif
    <p class="text-xl font-extrabold">{{ $data }}</p>
</div>