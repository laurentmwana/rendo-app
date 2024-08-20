<x-admin-layout title="Ajouter un sécretaire">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Ajouter un sécretaire
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('admin.secretary._form', [
            'secretary' => $secretary
            ])
        </x-card>
    </x-container>
</x-admin-layout>
