<x-secretary-layout title="Gestion des demandeurs">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Gestion des demandeurs
            </x-slot>
        </x-header-page>


        @include('shared.searchable', [
        'routeCreate' => route('&requester.create')
        ])

        <table class="mb-4 w-full caption-bottom text-sm responsive-table">
            <thead class="[&_tr]:border-b">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        Nom
                    </th>
                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        Postnom
                    </th>

                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        Nombre de rendez-vous
                    </th>
                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        Télpéhone
                    </th>
                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        Créer
                    </th>
                </tr>
            </thead>

            <tbody class="[&_tr:last-child]:border-0">
                @foreach ($requesters as $requester)
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        <a href="{{ route('&requester.show', $requester) }}" class="hover:underline">
                            {{ $requester->name }}
                        </a>
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        <a href="{{ route('&requester.show', $requester) }}" class="hover:underline">
                            {{ $requester->firstname }}
                        </a>
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        <a href="{{ route('&requester.show', $requester) }}" class="hover:underline">
                            {{ $requester->appointments->count() }}
                        </a>
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        <a href="{{ route('&requester.show', $requester) }}" class="hover:underline">
                            {{ $requester->phone }}
                        </a>
                    </td>


                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        @include('shared.ago', ['now' => $requester->created_at])
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        @include('shared.action', [
                        'routeDestroy' => route('&requester.destroy', $requester),
                        'routeEdit' => route('&requester.edit', $requester),
                        ])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            {{ $requesters->links() }}
        </div>

    </x-container>
</x-secretary-layout>