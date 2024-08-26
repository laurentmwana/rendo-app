<x-secretary-layout title="En savoir plus sur le rendez-vous #{{ $appointment->id }}">
    <x-container class="py-12">
        <x-header-page :admin="true" class="mb-4">
            <x-slot name="title" class="text-base">
                En savoir plus sur le rendez-vous #{{ $appointment->id }}
            </x-slot>
        </x-header-page>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-5">
            <x-card>
                <h2 class="mb-3 text-base font-semibold text-slate-600">
                    Demandeur
                </h2>
                <div class="space-y-2">
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Nom : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($appointment->requester->name) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Postnom : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($appointment->requester->firstname) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Prénom :</p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($appointment->requester->lastname) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Téléphone : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->requester->phone }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Adresse e-mail : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->requester->email }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Token : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->requester->registration_number }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Genre : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->requester->gender }}
                        </p>
                    </div>

                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Date de naissance : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->requester->happy }}
                        </p>
                    </div>
                </div>
            </x-card>
            <x-card>
                <h2 class="mb-3 text-base font-semibold text-slate-600">
                    Receveur
                </h2>
                <div class="space-y-4">
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Nom : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($appointment->worker->name) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Postnom : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($appointment->worker->firstname) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Prénom :</p>
                        <p class="text-sm text-muted-foreground">
                            {{ Str::camel($appointment->worker->lastname) }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Téléphone : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->worker->phone }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Adresse e-mail : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->worker->email }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Grade : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->worker->grade->name }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Token : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->worker->registration_number }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Genre : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->worker->gender }}
                        </p>
                    </div>

                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Date de naissance : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->worker->happy }}
                        </p>
                    </div>
                </div>
            </x-card>


            <x-card @class(['border-primary'=> $appointment->approved !== null])>
                <h2 class="mb-3 text-base font-semibold text-slate-600">
                    Rendez-vous
                </h2>
                <div class="space-y-4">
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Initiateur : </p>
                        <p class="text-sm text-muted-foreground">
                            @if ($appointment->secretary !== null)
                            par le secretaire : {{ $appointment->secretary->name }} {{
                            $appointment->secretary->firstname }}
                            @else
                            par le demandeur lui-même
                            @endif
                        </p>
                    </div>
                    <div>
                        <p class="text-sm text-muted-foreground mb-2">Raison du rendez-vous : </p>
                        <p class="text-sm text-muted-foreground ps-2">
                            {{ $appointment->reason }}
                        </p>
                    </div>

                    @if ($appointment->approved !== null)
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Date du rendez-vous : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->approved->for_date }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4 flex-wrap">
                        <p class="text-sm text-muted-foreground">Approuvé par : </p>
                        <p class="text-sm text-muted-foreground">
                            {{ $appointment->approved->secretary->name }} {{
                            $appointment->approved->secretary->firstname }}
                        </p>
                    </div>
                    @endif

                    @include('shared.ago', [
                    'now' => $appointment->created_at
                    ])
                </div>
            </x-card>
        </div>
    </x-container>
</x-secretary-layout>
