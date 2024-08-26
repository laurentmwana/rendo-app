<x-card>
    <h2 class="text-slate-700 text-2xl">
        Cher {{ $appointment->requester->name }},
    </h2>

    <p class="text-muted-foreground text-sm mb-2">

        Nous sommes heureux de vous confirmer que votre demande de rendez-vous avec Monsieur Mutombo Kasadi, Directeur
        Général, a bien été prise en compte et approuvée.
    </p>

    <p class="text-muted-foreground text-sm mb-4">
        Nous vous invitons à vous présenter le mercredi 12 mai 2024 à 10h00 à [lieu du rendez-vous].

        Dans l’attente de vous rencontrer, nous vous prions d’agréer, Cher {{ $appointment->requester->name }},,
        l’expression de nos sincères
        salutations.
    </p>

    <x-button-link>
        Voir
    </x-button-link>


    Thanks,<br>
    {{ config('app.name') }}

</x-card>
