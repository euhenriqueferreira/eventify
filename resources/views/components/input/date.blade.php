@props([
    'label' => null,
    'id' => null,
    'name',
])

<div class="flex w-full flex-col gap-1 text-neutral-600 dark:text-neutral-300">
    @if($label)
        <label for="textInputDefault" class="w-fit pl-0.5 text-sm font-bold">{{ $label }}</label>
    @endif
    <input id="{{ $id }}" type="datetime-local" {{ $attributes->class("w-full rounded-md border border-neutral-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white") }}
           name="{{ $name }}"/>
    @error($name)
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>