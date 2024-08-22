<form class="space-y-5"
    action="{{ $requester->id ? route('&requester.update', $requester) : route('&requester.store') }}" method="post">

    @if ($requester->id)
    @method('PUT')
    <input type="hidden" name="id" value="{{ $requester->id }}">
    @endif
    @csrf

    <div>
        <x-input-label for="name">Nom</x-input-label>
        <x-text-input value="{{ old('name', $requester->name) }}" id="name" name="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="firstname">Postnom</x-input-label>
        <x-text-input value="{{ old('firstname', $requester->firstname) }}" id="firstname" name="firstname" />
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
        <x-input-label for="sex">Genre</x-input-label>
        <x-select :items="getSexies()" value="{{ old('sex', $requester->sex) }}" id="sex" name="sex"
            placeholder="Genre" />
        <x-input-error :messages="$errors->get('sex')" class="mt-2" />
    </div>


    <x-primary-button>
        <i class="bi bi-pen"></i>
    </x-primary-button>
</form>
