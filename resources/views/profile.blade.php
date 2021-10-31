<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Name -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="name" class="mt-2" value="{{ __('No') }}" />
                    <x-jet-input id="name" type="text" class="mt-2 block w-full" value="{{$user['id']}}" wire:model.defer="state.name" autocomplete="name" />
                    <x-jet-input-error for="name" class="mt-2" />
                </div>
                <!-- Name -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="name" class="mt-2" value="{{ __('Name') }}" />
                    <x-jet-input id="name" type="text" class="mt-2 block w-full" value="{{$user['name']}}" wire:model.defer="state.name" autocomplete="name" />
                    <x-jet-input-error for="name" class="mt-2" />
                </div>
                <!-- Name -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="name" class="mt-2" value="{{ __('Email') }}" />
                    <x-jet-input id="name" type="text" class="mt-2 block w-full" value="{{$user['email']}}" wire:model.defer="state.name" autocomplete="name" />
                    <x-jet-input-error for="name" class="mt-2" />
                </div>
                <!-- Name -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="name" class="mt-2" value="{{ __('Role') }}" />
                    <x-jet-input id="name" type="text" class="mt-2 block w-full" value="{{$user['role']}}" wire:model.defer="state.name" autocomplete="name" />
                    <x-jet-input-error for="name" class="mt-2" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>