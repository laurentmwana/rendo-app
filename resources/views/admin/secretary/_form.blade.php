<form class="space-y-4"
    action="{{ $secretary->id ? route('~secretary.update', $secretary) : route('~secretary.store') }}" method="post">

    @if ($secretary->id)
    @method('PUT')
    <input type="hidden" name="id" value="{{ $secretary->id }}">
    @endif
    @csrf

    <div>
        <x-input-label for="name">Nom</x-input-label>
        <x-text-input value="{{ old('name', $secretary->name) }}" id="name" name="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="firstname">Postnom</x-input-label>
        <x-text-input value="{{ old('firstname', $secretary->firstname) }}" id="firstname" name="firstname" />
        <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="lastname">Prénom</x-input-label>
        <x-text-input value="{{ old('lastname', $secretary->lastname) }}" id="lastname" name="lastname" />
        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
    </div>


    <div>
        <x-input-label for="name">Prénom</x-input-label>
        <x-text-input value="{{ old('name', $secretary->name) }}" id="name" name="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="phone">Téléphone</x-input-label>
        <x-text-input value="{{ old('phone', $secretary->phone) }}" id="phone" name="phone" />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>


    <div>
        <x-input-label for="sex">Genre</x-input-label>
        <x-select :items="getSexies()" value="{{ old('sex', $secretary->sex) }}" id="sex" name="sex"
            placeholder="Genre" />
        <x-input-error :messages="$errors->get('sex')" class="mt-2" />
    </div>


    <x-primary-button>
        <i class="bi bi-pen"></i>
    </x-primary-button>
</form>
