<x-mail::message>
    # Cher {{ $appointment->requester->name }},

    <p>
        Nous vous prions de bien vouloir excuser ce désagrément. Suite à un imprévu, nous sommes dans l’obligation
        d’annuler
        votre rendez-vous avec Monsieur Mutombo Kasadi.
    </p>

    <p>

        Nous reviendrons vers vous dès que possible pour vous proposer une nouvelle date.

        Nous vous remercions de votre compréhension.
    </p>

    <x-mail::button :url="''">
        Voir
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>