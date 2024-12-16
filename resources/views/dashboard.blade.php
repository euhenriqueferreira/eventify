<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <x-container>
        <div class="mb-6 flex justify-between items-center">
            <x-buttons.anchor :href="route('events.create')" outline>Create an Event</x-buttons.anchor>

            <x-form class="w-2/5">
                <x-input.search name="search" placeholder="Search" />
            </x-form>    
        </div>

        <x-table :headers="[__('Name'), __('Date'), __('Place'), __('Actions')]">
            @foreach ($events as $event)
                <tr>
                    <x-table.td>{{ $event->name }}</x-table.td>
                    <x-table.td>{{ $event->datetime }}</x-table.td>
                    <x-table.td>{{ $event->localization }}</x-table.td>
                    <x-table.td>
                        <x-buttons.anchor :href="route('events.index')" solid>
                            {{ __('See more') }}
                        </x-buttons.anchor>
                    </x-table.td>
                </tr>
            @endforeach
        </x-table>    
    
        <div class="mt-6">{{ $events->links() }}</div>
    </x-container>           
</x-layouts.app>
