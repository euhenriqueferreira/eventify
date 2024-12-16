<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }} > {{ $event->name }} > {{ __('Subscribers') }}
        </h2>
    </x-slot>

    <x-container>
        <div class="space-y-6">
            <x-button.anchor :href="route('events.show', $event)" solid>
                {{ __('Back') }}
            </x-button.anchor>
            <x-table :headers="[__('Name'), __('Email'), __('Actions')]">
                @foreach ($subscribers as $subscriber)
                    <tr>
                        <x-table.td>{{ $subscriber->name }}</x-table.td>
                        <x-table.td>{{  $subscriber->email }}</x-table.td>
                        <x-table.td>
                            @if($userOwner)
                                <x-button.anchor href="#" solid>
                                    {{ __('Unsubscribe') }}
                                </x-button.anchor>
                            @else
                                <span>{{ __('No actions.') }}</span>
                            @endif
                        </x-table.td>
                    </tr>
                @endforeach
            </x-table>
            <div class="mt-6">{{ $subscribers->links() }}</div>
        </div>
    </x-container>
</x-layouts.app>
