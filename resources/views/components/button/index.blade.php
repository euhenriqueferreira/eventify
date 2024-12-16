@props([
    'href',
    'solid' => null,
    'outline' => null,
])

<button {{ $attributes }} @class([
    'cursor-pointer whitespace-nowrap rounded-md px-4 py-2 font-medium text-sm transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:focus-visible:outline-white',
    'bg-black tracking-wide text-neutral-100 dark:text-black dark:bg-white' => $solid,
    'bg-transparent border border-black tracking-wide text-black dark:border-white dark:text-white'=> $outline
    ])>
    {{ $slot }}          
</button>