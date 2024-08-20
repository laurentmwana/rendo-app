<x-admin-layout title="En savoir plus sur la grade #{{ $grade->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                En savoir plus sur la grade #{{ $grade->id }}
            </x-slot>
        </x-header-page>
    </x-container>
</x-admin-layout>
