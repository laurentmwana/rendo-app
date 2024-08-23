<x-mail::message>
    # Cher {{ $appointment->requester->name }},

    <p>
        Nous sommes heureux de vous confirmer que votre demande de rendez-vous avec Monsieur Mutombo Kasadi, Directeur
        Général, a bien été prise en compte et approuvée.
    </p>

    <p>
        Nous vous invitons à vous présenter le mercredi 12 mai 2024 à 10h00 à [lieu du rendez-vous].

        Dans l’attente de vous rencontrer, nous vous prions d’agréer, Cher {{ $appointment->requester->name }},,
        l’expression de nos sincères
        salutations.
    </p>

    <x-mail::button :url="''">
        Voir
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>