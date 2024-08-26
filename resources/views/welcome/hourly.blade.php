<x-section>
    <x-slot name="title">
        Nos horaires
    </x-slot>
    <x-slot name="description">
        Veuillez noter que nous ne sommes pas disponibles en dehors de ces horaires. Si vous souhaitez prendre un
        rendez-vous, merci de nous contacter pendant nos heures d'ouverture pour convenir d'un créneau qui vous
        convient.
    </x-slot>
    <x-slot name="content">
        <div class="max-w-3xl mx-auto">
            @include('welcome.hourly-item', [
            'hourlies' => $hourlies
            ])
        </div>
    </x-slot>
</x-section>