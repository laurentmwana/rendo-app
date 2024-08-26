<x-admin-layout title="Gestion des travailleurs">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Gestion des travailleurs
            </x-slot>
        </x-header-page>


        @include('shared.searchable', [
        'routeCreate' => route('~worker.create')
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
                        Grade
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
                @foreach ($workers as $worker)
                <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                    <a href="{{ route('&worker.show', $worker) }}" class="hover:underline">
                        {{ $worker->name }}
                    </a>
                </td>

                <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                    <a href="{{ route('&grade.show', $worker->grade) }}" class="hover:underline">
                        {{ Str::limit($worker->grade->name, 80, '...') }}
                    </a>
                </td>


                <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                    <a href="{{ route('&worker.show', $worker) }}" class="hover:underline">
                        {{ $worker->registration_number }}
                    </a>
                </td>

                <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                    <a href="{{ route('&worker.show', $worker) }}" class="hover:underline">
                        {{ $worker->phone }}
                    </a>
                </td>

                <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                    @include('shared.ago', ['now' => $worker->created_at])
                </td>

                <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                    @include('shared.action', [
                    'routeDestroy' => route('~worker.destroy', $worker),
                    'routeEdit' => route('~worker.edit', $worker),
                    ])
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            {{ $workers->links() }}
        </div>

    </x-container>
</x-admin-layout>
