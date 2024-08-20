<form class="space-y-4" action="{{ $grade->id ? route('~grade.update', $grade) : route('~grade.store') }}"
    method="post">

    @if ($grade->id)
    @method('PUT')
    <input type="hidden" name="id" value="{{ $grade->id }}">
    @endif
    @csrf

    <div>
        <x-input-label for="name">Nom</x-input-label>
        <x-text-input value="{{ old('name', $grade->name) }}" id="name" name="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="description">
            Description
        </x-input-label>
        <x-textarea value="{{ old('description', $grade->description) }}" id="description" name="description" />
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <x-primary-button>
        <i class="bi bi-pen"></i>
    </x-primary-button>
</form>
