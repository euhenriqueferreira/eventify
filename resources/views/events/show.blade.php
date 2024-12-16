<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }} > {{ $event->name }}
        </h2>
    </x-slot>

    <x-container>
        <div class="grid grid-cols-4 gap-4 p-4">

            <x-info-item :title="__('Event name')" :data="$event->name"/>
            <x-info-item :title="__('Event date')" :data="$event->datetime->format('d/m/Y - H:i')"/>
            <x-info-item :title="__('Capacity')" :data="number_format($event->capacity, 0, ',', '.')"/>
            <x-info-item :title="__('Localization')" :data="$event->localization"/>
            <x-info-item :title="__('Description')" :data="$event->description"/>
            
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
