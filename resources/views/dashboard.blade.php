<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300 dark:border-neutral-700">
                        <x-table :headers="[__('Name'), __('Date'), __('Place'), __('Actions')]">
                            @foreach ($events as $event)
                                <tr>
                                    <td class="p-4">{{ $event->name }}</td>
                                    <td class="p-4">{{ $event->datetime }}</td>
                                    <td class="p-4">{{ $event->localization }}</td>
                                    <td class="p-4">
                                        <a href="#" class="cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-white dark:text-black dark:focus-visible:outline-white">
                                            {{ __('See more') }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </x-table>
                    </div>        
                    
                    <div class="mt-5">{{ $events->links() }}</div>        
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
