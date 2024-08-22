<x-secretary-layout title="Ajouter un demandeur">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Ajouter un demandeur
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('secretary.requester._form', [
            'requester' => $requester
            ])
        </x-card>
    </x-container>
</x-secretary-layout>
