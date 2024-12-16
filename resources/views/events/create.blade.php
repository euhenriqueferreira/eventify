<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }} > {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-form :route="route('events.create')" post class="grid grid-cols-2 gap-x-6 gap-y-4">
                        <x-input.text name="name" id="name" label="Event name"/>
                        <x-input.text name="capacity" id="capacity" label="Capacity"/>
                        <x-input.date name="datetime" id="datetime" label="Event date" />
                        <x-input.text name="localization" id="localization" label="Localization"/>
                        <x-input.textarea name="description" id="description" label="Event description" class="col-span-2"></x-input.textarea>
                        <div class="col-span-2 flex justify-end gap-4">
                            <x-button.anchor outline :href="route('events.index')">Cancel</x-button>
                            <x-button solid type="submit">Create event</x-button>
                        </div>
                    </x-form>

                    
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
