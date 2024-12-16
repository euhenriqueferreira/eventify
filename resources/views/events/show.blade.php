<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }} > {{ $event->name }}
        </h2>
    </x-slot>

    <x-container>
        <div class="grid grid-cols-4 gap-4 p-4">
            <div>
                <h2 class="text-base font-normal">{{ __('Event name') }}</h2>
                <p class="text-xl font-extrabold">{{ $event->name }}</p>
            </div>
            <div>
                <h2 class="text-base font-normal">{{ __('Event date') }}</h2>
                <p class="text-xl font-extrabold">{{ $event->datetime->format('d/m/Y - H:i') }}</p>
            </div>
            <div>
                <h2 class="text-base font-normal">{{ __('Capacity') }}</h2>
                <p class="text-xl font-extrabold">{{ number_format($event->capacity, 0, ',', '.') }}</p>
            </div>
            <div>
                <h2 class="text-base font-normal">{{ __('Localization') }}</h2>
                <p class="text-xl font-extrabold">{{ $event->localization }}</p>
            </div>
            <div class="col-span-4">
                <h2 class="text-base font-normal">{{ __('Description') }}</h2>
                <p class="text-base font-bold">{{ $event->description }}</p>
            </div>
            <div class="col-span-4 flex justify-start gap-4 mt-5">
                @if($userOwner)
                    <x-form :route="route('events.delete', $event)" delete onsubmit="return confirm('{{ __('Are you sure?') }}');">
                        <x-button type="submit" outline>{{ __('Delete Event') }}</x-button>
                    </x-form>
                    <x-button.anchor :href="route('events.edit', $event)" solid>{{ __('Edit Info') }}</x-button.anchor>
                @else
                    <x-button.anchor :href="route('events.index')" solid>{{ __('Cancel subscription') }}</x-button.anchor>
                    <x-button.anchor :href="route('events.index')" solid>{{ __('Subscribe') }}</x-button.anchor>
                @endif
            </div>
        </div>         
    </x-container>
</x-layouts.app>
