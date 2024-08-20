<x-admin-layout title="Editer la categorie #{{ $category->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Editer la categorie #{{ $category->id }}
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('admin.category._form', [
            'category' => $category
            ])
        </x-card>
    </x-container>
</x-admin-layout>
