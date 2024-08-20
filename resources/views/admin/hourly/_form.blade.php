<form class="space-y-4" action="{{ route('~hourly.update', $hourly) }}" method="post">

    @method('PUT')

    <input type="hidden" name="id" value="{{ $hourly->id }}">
    @csrf

    <div>
        <x-input-label for="day">Jour</x-input-label>
        <x-text-input :disabled="true" value="{{ old('day', $hourly->day) }}" id="day" name="day" />
        <x-input-error :messages="$errors->get('day')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="start">Heure du début</x-input-label>
        <x-text-input type="time" value="{{ old('start', $hourly->start) }}" id="start" name="start" />
        <x-input-error :messages="$errors->get('start')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="end">Heure de fin</x-input-label>
        <x-text-input type="time" value="{{ old('end', $hourly->end) }}" id="end" name="end" />
        <x-input-error :messages="$errors->get('end')" class="mt-2" />
    </div>


    <div>
        <x-input-label for="end">Statut</x-input-label>
        <x-select :items="[
            1 => 'Ouvert',
            0 => 'Fermer'
        ]" value="{{ old('lock', $hourly->lock) }}" id="lock" name="lock" placeholder="Quel est le statut d'horaire" />
        <x-input-error :messages="$errors->get('lock')" class="mt-2" />
    </div>

    <x-primary-button>
        <i class="bi bi-pen"></i>
    </x-primary-button>
</form>
