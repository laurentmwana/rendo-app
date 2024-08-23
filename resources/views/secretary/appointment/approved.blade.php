<x-dropdown align="right" width="48">
    <x-slot name="trigger">
        @include('shared.badge', [
        'active' => $appointment->approved ? 'success' : 'fail'
        ])
    </x-slot>

    <x-slot name="content">
        <!-- Authentication -->

        @if ($appointment->approved)
        <form method="POST" action="{{ route('&appointment.approved', [
            'id' => $appointment->id,
            'approved' => 0]) }}">
            @csrf
            @method('PUT')

            <x-dropdown-link :href="route('&appointment.approved', [
                    'id' => $appointment->id,
                    'approved' => 0
                ])" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                Désapprouvé
            </x-dropdown-link>
        </form>

        @else
        <form method="POST" action="{{ route('&appointment.approved', [
                'id' => $appointment->id,
                'approved' => 1]) }}">
            @csrf
            @method('PUT')

            <x-dropdown-link :href="route('&appointment.approved', [
                        'id' => $appointment->id,
                        'approved' => 1
                    ])" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                Approuvé
            </x-dropdown-link>
        </form>

        @endif


    </x-slot>
</x-dropdown>