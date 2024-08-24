<form action="{{ route('.reservation.store') }}" method="POST">
    @csrf
    <div class="grid grid-cols-2 gap-x-10 gap-y-5">

        <div>
            <div class="space-y-5">

                <div>
                    <x-input-label for="name">Nom</x-input-label>
                    <x-text-input value="{{ old('name', $requester->name) }}" id="name" name="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="firstname">Postnom</x-input-label>
                    <x-text-input value="{{ old('firstname', $requester->firstname) }}" id="firstname"
                        name="firstname" />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="lastname">Prénom</x-input-label>
                    <x-text-input value="{{ old('lastname', $requester->lastname) }}" id="lastname" name="lastname" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>


                <div>
                    <x-input-label for="happy">Date de naissance</x-input-label>
                    <x-text-input type="date" value="{{ old('happy', $requester->happy) }}" id="happy" name="happy" />
                    <x-input-error :messages="$errors->get('happy')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="phone">Téléphone</x-input-label>
                    <x-text-input value="{{ old('phone', $requester->phone) }}" id="phone" name="phone" />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="email">Adresse e-mail</x-input-label>
                    <x-text-input value="{{ old('email', $requester->email) }}" id="email" name="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>


                <div>
                    <x-input-label for="gender">Genre</x-input-label>
                    <x-select :items="getSexies()" value="{{ old('gender', $requester->gender) }}" id="gender"
                        name="gender" placeholder="Genre" />
                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                </div>
            </div>
        </div>

        <div>
            <div class="space-y-5">

                <div>
                    <x-input-label for="worker_id">Receveur</x-input-label>
                    <x-select :items="getWorker()" value="{{ old('worker_id') }}" id="worker_id" name="worker_id"
                        placeholder="Receveur" />
                    <x-input-error :messages="$errors->get('worker_id')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="reason">Raison de votre rendez-vous</x-input-label>
                    <x-textarea value="{{ old('reason') }}" id="reason" name="reason" />
                    <x-input-error :messages="$errors->get('reason')" class="mt-2" />
                </div>

                <x-primary-button>
                    Envoyer
                </x-primary-button>

            </div>
        </div>
    </div>
</form>