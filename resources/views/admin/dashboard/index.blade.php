<x-admin-layout title="Tableau de bord">
    <x-container class="py-12">
        <h2 class="text-base font-medium mb-4">
            Tableau de bord
        </h2>

        <div class="mt-4">
            <div class="grid grid-cols-1 lg:xl:grid-cols-3 justify-between gap-3">
                @include('admin.dashboard._card', [
                'count' => $secretaryCount,
                'title' => $secretaryCount > 1 ? 'Sécretaires' : 'Sécretaire',
                'route' => route('~secretary.index'),
                ])
                @include('admin.dashboard._card', [
                'count' => $workerCount,
                'title' => $workerCount > 1 ? 'Travailleurs' : 'Travailleur',
                'route' => route('~worker.index'),
                ])
                @include('admin.dashboard._card', [
                'count' => $gradeCount,
                'title' => $gradeCount > 1 ? 'Grades' : 'Grade',
                'route' => route('~grade.index'),
                ])
            </div>
        </div>

    </x-container>
</x-admin-layout>
