@php
$categories = getPluckCategories()
@endphp

<form class="space-y-4" enctype="multipart/form-data"
    action="{{ $formation->id ? route('~formation.update', $formation) : route('~formation.store') }}" method="post">

    @if($formation->id)
    @method('PUT')
    <input type="hidden" name="id" value="{{ $formation->id }}">
    @endif
    @csrf

    <div>
        <x-input-label for="image">Image</x-input-label>
        <x-text-input type="file" id="image" name="image" />
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="name">Nom</x-input-label>
        <x-text-input value="{{ old('name', $formation->name) }}" id="name" name="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categories">Categogies</x-input-label>
        <x-select-multiple :items="$categories"
            :value="old('categories', $formation->categories->pluck('id')->toArray())" id="categories"
            name="categories[]" />
        <x-input-error :messages="$errors->get('categories')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="description">Description</x-input-label>
        <x-textarea value="{{ old('description', $formation->description) }}" id="description" name="description" />
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <x-primary-button>
        <i class="bi {{ $formation->id ? 'bi-pen' : 'bi-plus' }}"></i>
    </x-primary-button>
</form>