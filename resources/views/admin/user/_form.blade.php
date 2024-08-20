<form class="space-y-4" action="{{ $user->id ? route('~user.update', $user) : route('~user.store') }}" method="post">

    @if ($user->id)
    @method('PUT')
    <input type="hidden" name="id" value="{{ $user->id }}">
    @endif
    @csrf

    <div>
        <x-input-label for="name">Nom</x-input-label>
        <x-text-input value="{{ old('name', $user->name) }}" id="name" name="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="email">Adresse e-mail</x-input-label>
        <x-text-input value="{{ old('email', $user->email) }}" id="email" name="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="password">Mot de passe</x-input-label>
        <x-text-input id="password" name="password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <x-primary-button>
        <i class="bi bi-pen"></i>
    </x-primary-button>
</form>
