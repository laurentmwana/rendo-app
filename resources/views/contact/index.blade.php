<x-base-layout title="Nous contacter">
    <x-container class="py-12">
        <x-header-page class="mb-4">
            <x-slot name="title">
                Nous contacter
            </x-slot>
            <x-slot name="description">
                Vous avez un problème technique ? Vous souhaitez
                envoyer des commentaires sur une fonctionnalité
                bêta ? Besoin de détails sur notre plan Business
                ? Faites le nous savoir.
            </x-slot>
        </x-header-page>

        <div class="mb-3">
            @include('shared.flash')
        </div>

        <div class="grid grid-cols-3 gap-5">
            <div>
                <div>
                    @include('contact.info')
                </div>
            </div>
            <div class="col-span-2">
                <div class="max-w-lg">
                    @include('contact._form', [
                    'contact' => $contact
                    ])
                </div>
            </div>
        </div>

    </x-container>
</x-base-layout>
