<x-secretary-layout title="En savoir plus sur le grade #{{ $grade->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                En savoir plus sur le grade #{{ $grade->id }}
            </x-slot>
        </x-header-page>

        <div class="max-w-lg">
            <x-card class="mb-4">
                <h2 class="text-xl font-semibold text-slate-800">
                    {{ $grade->name }}
                </h2>
                <div class="my-3">
                    @include('shared.ago', [
                    'now' => $grade->created_at
                    ])
                </div>
                <p class="text-muted-foreground text-sm">
                    {{ $grade->description }}
                </p>
            </x-card>
        </div>
    </x-container>
</x-secretary-layout>
