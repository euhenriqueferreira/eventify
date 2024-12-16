<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }} > {{ __('Edit') }}
        </h2>
    </x-slot>

    <x-container>
        <x-form :route="route('events.edit', $event)" put class="grid grid-cols-2 gap-x-6 gap-y-4">
            <x-input.text name="name" id="name" label="Event name" :value="old('name', $event->name)"/>
            <x-input.text name="capacity" id="capacity" label="Capacity" :value="old('capacity', $event->capacity)"/>
            <x-input.date name="datetime" id="datetime" label="Event date" :value="old('datetime', $event->datetime)"/>
            <x-input.text name="localization" id="localization" label="Localization" :value="old('localization', $event->localization)"/>
            <x-input.textarea name="description" id="description" label="Event description" class="col-span-2">
                {{ old('description', $event->description) }}
            </x-input.textarea>
            <div class="col-span-2 flex justify-end gap-4">
                <x-button.anchor outline :href="route('events.show', $event)">Cancel</x-button>
                <x-button solid type="submit">Update event</x-button>
            </div>
        </x-form>
    </x-container>
</x-layouts.app>
