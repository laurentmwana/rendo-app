<x-admin-layout title="Editer l'horaire #{{ $hourly->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Editer l'horaire #{{ $hourly->id }}
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('admin.hourly._form', [
            'hourly' => $hourly
            ])
        </x-card>
    </x-container>
</x-admin-layout>
