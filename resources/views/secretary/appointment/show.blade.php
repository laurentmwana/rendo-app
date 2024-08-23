<x-secretary-layout title="En savoir plus sur le rendez-vous #{{ $appointment->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                En savoir plus sur le rendez-vous #{{ $appointment->id }}
            </x-slot>
        </x-header-page>
    </x-container>
</x-secretary-layout>
