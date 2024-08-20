<x-admin-layout title="Ajouter un utilisateur">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Ajouter un utilisateur
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('admin.user._form', [
            'user' => $user
            ])
        </x-card>
    </x-container>
</x-admin-layout>
