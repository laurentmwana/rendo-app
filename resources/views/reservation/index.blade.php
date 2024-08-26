<x-base-layout title="Comment faire pour avoir un rendez-vous">
    <x-container class="py-12">
        <x-header-page class="mb-4">
            <x-slot name="title">
                Comment faire pour avoir un rendez-vous
            </x-slot>
            <x-slot name="description">
                Veuillez noter que nous ne sommes pas disponibles en dehors de ces horaires. Si vous souhaitez prendre
                un rendez-vous, merci de nous contacter pendant nos heures d'ouverture pour convenir d'un créneau qui
                vous convient.
            </x-slot>
        </x-header-page>

        <div class="max-w-3xl">
            <table class="mb-4 w-full caption-bottom text-sm responsive-table">
                <thead class="[&_tr]:border-b">
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <th
                            class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                            Jour
                        </th>
                        <th
                            class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                            Heure
                        </th>
                        <th
                            class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                            Statut
                        </th>
                    </tr>
                </thead>

                <tbody class="[&_tr:last-child]:border-0">
                    @foreach ($hourlies as $hourly)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td
                            class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                            {{ (__($hourly->day)) }}
                        </td>
                        <td
                            class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                            @if ($hourly->start === null && $hourly->end === null)
                            -
                            @else
                            {{ $hourly->start }} à {{ $hourly->end }}
                            @endif
                        </td>

                        <td
                            class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                            @if (!$hourly->lock)
                            <x-badge type="success">
                                Ouvert
                            </x-badge>
                            @else
                            <x-badge type="destructive">
                                Fermer
                            </x-badge>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <x-button-link href="{{ route('.reservation.create') }}">
                Réservation
            </x-button-link>
        </div>
    </x-container>
</x-base-layout>
