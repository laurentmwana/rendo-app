<x-admin-layout title="Ajouter un travailleur">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Ajouter un travailleur
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('admin.worker._form', [
            'worker' => $worker
            ])
        </x-card>
    </x-container>
</x-admin-layout>