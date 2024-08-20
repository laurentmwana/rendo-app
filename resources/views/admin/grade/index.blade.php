<x-admin-layout title="Gestion des grades">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Gestion des grades
            </x-slot>
        </x-header-page>


        @include('shared.searchable', [
        'routeCreate' => route('~grade.create')
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
                        Travailleurs
                    </th>
                    <th
                        class="h-10 px-2 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        Créer
                    </th>
                </tr>
            </thead>

            <tbody class="[&_tr:last-child]:border-0">
                @foreach ($grades as $grade)
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        <a href="{{ route('~grade.show', $grade) }}" class="hover:underline">
                            {{ $grade->name }}
                        </a>
                    </td>


                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        {{ $grade->workers->count() }}
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        @include('shared.ago', ['now' => $grade->created_at])
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px]">
                        @include('shared.action', [
                        'routeDestroy' => route('~grade.destroy', $grade),
                        'routeEdit' => route('~grade.edit', $grade),
                        ])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            {{ $grades->links() }}
        </div>

    </x-container>
</x-admin-layout>
