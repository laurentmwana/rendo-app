<x-admin-layout title="Ajouter une grade">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Ajouter une grade
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('admin.grade._form', [
            'grade' => $grade
            ])
        </x-card>
    </x-container>
</x-admin-layout>
