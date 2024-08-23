<x-secretary-layout title="Editer l'utilisateur #{{ $user->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Editer l'utilisateur #{{ $user->id }}
            </x-slot>
        </x-header-page>

        <x-card class="max-w-lg">
            @include('secretary.user._form', [
            'user' => $user
            ])
        </x-card>
    </x-container>
</x-secretary-layout>
