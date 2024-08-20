<x-admin-layout title="Ajout d'une formation">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Ajout d'une formation
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('admin.formation._form', [
            'formation' => $formation
            ])
        </x-card>
    </x-container>
</x-admin-layout>