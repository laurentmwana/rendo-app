<x-admin-layout title="En savoir plus sur le secretaire #{{ $secretary->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                En savoir plus sur le secretaire #{{ $secretary->id }}
            </x-slot>
        </x-header-page>

        <div class="max-w-lg">
            <x-card class="mb-4">
                <div class="space-y-3">
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Nom : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($secretary->name) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Postnom : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($secretary->firstname) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Prénom :</p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($secretary->lastname) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Téléphone : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $secretary->phone }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Adresse e-mail : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $secretary->email }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Token : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $secretary->registration_number }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Genre : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $secretary->gender }}
                        </p>
                    </div>

                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Date de naissance : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $secretary->happy }}
                        </p>
                    </div>
                </div>
            </x-card>
        </div>
    </x-container>
</x-admin-layout>
