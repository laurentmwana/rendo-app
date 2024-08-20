<x-admin-layout title="En savoir plus sur l'horaire #{{ $hourly->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                En savoir plus sur l'horaire #{{ $hourly->id }}
            </x-slot>
        </x-header-page>
    </x-container>
</x-admin-layout>
