<x-admin-layout title="En savoir plus sur l'utilisateur #{{ $user->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                En savoir plus sur l'utilisateur #{{ $user->id }}
            </x-slot>
        </x-header-page>


        <div class="max-w-lg">
            <x-card class="mb-4">
                <div class="space-y-3">
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Nom : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($user->name) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Adresse e-mail : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($user->email) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Mot de passe :</p>
                        <p class="text-sm text-muted-foreground">
                            ***************
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Sécretaire : </p>
                        <p class="text-sm text-muted-foreground">
                            <a class="underline" href="{{ route('~secretary.show', $user->secretary) }}">
                                {{ $user->secretary->name }} {{ $user->secretary->firstname }}
                            </a>
                        </p>
                    </div>

                </div>
            </x-card>
        </div>
    </x-container>
</x-admin-layout>
