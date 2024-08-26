<x-admin-layout title="Gestion des secretaries">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Gestion des secretaries
            </x-slot>
        </x-header-page>


        @include('shared.searchable', [
        'routeCreate' => route('~secretary.create')
        ])

        <table class="mb-4 w-full caption-bottom text-sm responsive-table">
            <thead class="[&_tr]:border-b">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        Nom
                    </th>
                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        Postnom
                    </th>

                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        Matricule
                    </th>
                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        Télpéhone
                    </th>
                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        Créer
                    </th>
                </tr>
            </thead>

            <tbody class="[&_tr:last-child]:border-0">
                @foreach ($secretaries as $secretary)
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        <a href="{{ route('~secretary.show', $secretary) }}" class="hover:underline">
                            {{ Str::limit($secretary->name, 70, '...') }}
                        </a>
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        <a href="{{ route('~secretary.show', $secretary) }}" class="hover:underline">
                            {{ Str::limit($secretary->firstname, 70, '...') }}
                        </a>
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        <a href="{{ route('~secretary.show', $secretary) }}" class="hover:underline">
                            {{ $secretary->registration_number }}
                        </a>
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        <a href="{{ route('~secretary.show', $secretary) }}" class="hover:underline">
                            {{ $secretary->phone }}
                        </a>
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        @include('shared.ago', ['now' => $secretary->created_at])
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        @include('shared.action', [
                        'routeDestroy' => route('~secretary.destroy', $secretary),
                        'routeEdit' => route('~secretary.edit', $secretary),
                        ])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            {{ $secretaries->links() }}
        </div>

    </x-container>
</x-admin-layout>
