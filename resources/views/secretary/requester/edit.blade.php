<x-secretary-layout title="Editer le demandeur #{{ $requester->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Editer le demandeur #{{ $requester->id }}
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('secretary.requester._form', [
            'requester' => $requester
            ])
        </x-card>
    </x-container>
</x-secretary-layout>
