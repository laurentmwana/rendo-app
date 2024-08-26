<x-secretary-layout title="Tableau de bord">
    <x-container class="py-12">
        <h2 class="text-base font-medium mb-4">
            Tableau de bord
        </h2>
        <div class="mt-4">
            <div class="grid grid-cols-1 lg:xl:grid-cols-4 justify-between gap-3">

                @include('admin.dashboard._card', [
                'count' => $reservationCount,
                'title' => $reservationCount > 1 ? 'Rendez-vous' : 'Rendez-vous',
                'route' => route('&requester.index'),
                ])
                @include('admin.dashboard._card', [
                'count' => $reservationApprovedCount,
                'title' => $reservationApprovedCount > 1 ? 'Rendez-vous approuvés' : 'Rendez-vous approuvé',
                'route' => route('&requester.index'),
                ])
                @include('admin.dashboard._card', [
                'count' => $reservationNoApprovedCount,
                'title' => $reservationNoApprovedCount > 1 ? 'Rendez-vous non approuvés' : 'Rendez-vous non approuvé',
                'route' => route('&requester.index'),
                ])
                @include('admin.dashboard._card', [
                'count' => $requesterCount,
                'title' => $requesterCount > 1 ? 'Demandeurs' : 'Demandeur',
                'route' => route('&requester.index'),
                ])
            </div>
        </div>

    </x-container>
</x-secretary-layout>
