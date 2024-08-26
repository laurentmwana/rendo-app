<x-card>
    <h2 class="mb-4 text-slate-800 text-xl">
        # Cher {{ $appointment->requester->name }},
    </h2>

    <p class="text-sm text-foreground mb-4">
        Nous vous prions de bien vouloir excuser ce désagrément. Suite à un imprévu, nous sommes dans l’obligation
        d’annuler
        votre rendez-vous avec Monsieur Mutombo Kasadi.
    </p>

    <p class="text-sm text-foreground mb-4">

        Nous reviendrons vers vous dès que possible pour vous proposer une nouvelle date.

        Nous vous remercions de votre compréhension.
    </p>

    <x-button-link>
        Voir
    </x-button-link>

    Thanks,<br>
    {{ config('app.name') }}
</x-card>
