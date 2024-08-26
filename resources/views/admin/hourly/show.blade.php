<x-admin-layout title="En savoir plus sur l'horaire #{{ $hourly->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                En savoir plus sur l'horaire #{{ $hourly->id }}
            </x-slot>
        </x-header-page>
        <div class="mt-4">
            <h2 class="capitalize mb-4 text-4xl font-manrope leading-snug text-slate-700">
                {{ __($hourly->day) }}
            </h2>

            <p class="text-sm text-muted-foreground">
                @if ($hourly->lock)
                Nous sommes fermés
                @else
                Nous sommes ouvert de {{ $hourly->start }} à {{$hourly->end}}
                @endif
            </p>
        </div>
    </x-container>
</x-admin-layout>
