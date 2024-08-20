<x-admin-layout title="Editer le secretaire #{{ $secretary->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Editer le secretaire #{{ $secretary->id }}
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('admin.secretary._form', [
            'secretary' => $secretary
            ])
        </x-card>
    </x-container>
</x-admin-layout>
