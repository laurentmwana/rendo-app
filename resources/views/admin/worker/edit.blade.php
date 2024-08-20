<x-admin-layout title="Editer le travailleur #{{ $worker->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Editer le travailleur #{{ $worker->id }}
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('admin.worker._form', [
            'worker' => $worker
            ])
        </x-card>
    </x-container>
</x-admin-layout>