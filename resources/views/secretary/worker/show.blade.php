<x-secretary-layout title="En savoir plus sur le travailleur #{{ $worker->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                En savoir plus sur le travailleur #{{ $worker->id }}
            </x-slot>
        </x-header-page>

        <div class="max-w-lg">
            <x-card class="mb-4">
                <div class="space-y-4">
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Nom : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($worker->name) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Postnom : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($worker->firstname) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Prénom :</p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($worker->lastname) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Téléphone : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $worker->phone }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Adresse e-mail : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $worker->email }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Grade : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $worker->grade->name }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Token : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $worker->registration_number }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Genre : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $worker->gender }}
                        </p>
                    </div>

                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Date de naissance : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $worker->happy }}
                        </p>
                    </div>
                </div>
            </x-card>
        </div>
    </x-container>
</x-secretary-layout>
