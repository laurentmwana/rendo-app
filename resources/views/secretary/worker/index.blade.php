<x-secretary-layout title="Travailleurs">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                Travailleurs
            </x-slot>
        </x-header-page>

        @include('shared.search')

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
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        <a href="{{ route('&worker.show', $worker) }}" class="hover:underline">
                            {{ $worker->name }}
                        </a>
                    </td>

                    <td class="p-2 align-middle [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:trangreen-y-[2px]">
                        <a href="{{ route('&grade.show', $worker->grade) }}" class="hover:underline">
                            {{ $worker->grade->name }}
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

                        <div class="flex">
                            <x-button-link href="{{ route('&worker.show', $worker) }}">
                                Voir
                            </x-button-link>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            {{ $workers->links() }}
        </div>

    </x-container>
</x-secretary-layout>
