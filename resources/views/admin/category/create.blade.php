<x-admin-layout title="Ajout d'une categorie">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Ajout d'une categorie
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('admin.category._form', [
            'category' => $category
            ])
        </x-card>
    </x-container>
</x-admin-layout>
