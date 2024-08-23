<form class="space-y-5"
    action="{{ $appointment->id ? route('&appointment.update', $appointment) : route('&appointment.store') }}"
    method="post">

    @if ($appointment->id)
    @method('PUT')
    <input type="hidden" name="id" value="{{ $appointment->id }}">
    @endif
    @csrf

    <div>
        <x-input-label for="requester_id">Demandeur</x-input-label>
        <x-select :items="getRequester()" value="{{ old('requester_id', $appointment->requester_id) }}"
            id="requester_id" name="requester_id" placeholder="Demandeur" />
        <x-input-error :messages="$errors->get('requester_id')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="worker_id">Receveur</x-input-label>
        <x-select :items="getWorker()" value="{{ old('worker_id', $appointment->worker_id) }}" id="worker_id"
            name="worker_id" placeholder="Receveur" />
        <x-input-error :messages="$errors->get('worker_id')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="hourly_id">Horaire</x-input-label>
        <x-select :items="getHourly()" value="{{ old('hourly_id', $appointment->hourly_id) }}" id="hourly_id"
            name="hourly_id" placeholder="Horaire" />
        <x-input-error :messages="$errors->get('hourly_id')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="time">Heure</x-input-label>
        <x-text-input type="time" value="{{ old('time', $appointment->time) }}" id="time" name="time" />
        <x-input-error :messages="$errors->get('time')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="reason">Raison de son rendez-vous</x-input-label>
        <x-textarea value="{{ old('reason', $appointment->reason) }}" id="reason" name="reason" />
        <x-input-error :messages="$errors->get('reason')" class="mt-2" />
    </div>

    <x-primary-button>
        <i class="bi bi-pen"></i>
    </x-primary-button>
</form>