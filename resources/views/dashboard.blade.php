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
                    <div class="mb-6 flex justify-between items-center">
                        <a href="#" class="cursor-pointer whitespace-nowrap bg-transparent rounded-md border border-black px-4 py-2 text-sm font-medium tracking-wide text-black transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-white dark:text-white dark:focus-visible:outline-white">
                            Create an Event
                        </a>

                        <form class="w-2/5">
                            <div class="relative flex w-full flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="absolute left-2.5 top-1/2 size-5 -translate-y-1/2 text-neutral-600/50 dark:text-neutral-300/50"> 
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                                <input type="search" class="w-full rounded-md border border-neutral-300 bg-neutral-50 py-2 pl-10 pr-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:focus-visible:outline-white" name="search" placeholder="Search" aria-label="search"/>
                            </div>   
                        </form>       
                    </div>

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
                
                    <div class="mt-6">{{ $events->links() }}</div>        
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
