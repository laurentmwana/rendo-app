<x-base-layout title="Prendre un rendez-vous">
    <x-container class="py-12">
        <x-header-page class="mb-4">
            <x-slot name="title">
                Prendre un rendez-vous
            </x-slot>
        </x-header-page>

        <div class="max-w-7xl">
            @include('reservation._form')
        </div>
    </x-container>
</x-base-layout>