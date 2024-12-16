@props([
    'label' => null,
    'id' => null,
    'placeholder' => null,
    'name',
])

<div {{ $attributes->class('flex w-full flex-col gap-1 text-neutral-600 dark:text-neutral-300') }}>
    @if($label)
        <label for="{{ $id }}" class="w-fit pl-0.5 text-sm">{{ $label }}</label>
    @endif
    <textarea id="{{ $id }}" name="{{ $name }}" class="w-full min-h-32 rounded-md border border-neutral-300 bg-neutral-50 px-2.5 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white"
     placeholder="{{ $placeholder }}"></textarea>
    @error($name)
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>
