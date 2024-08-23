<x-secretary-layout title="Editer le rendez-vous #{{ $appointment->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Editer le rendez-vous #{{ $appointment->id }}
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('secretary.appointment._form', [
            'appointment' => $appointment
            ])
        </x-card>
    </x-container>
</x-secretary-layout>
