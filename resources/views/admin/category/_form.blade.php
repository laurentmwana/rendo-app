<form class="space-y-4" action="{{ $category->id ? route('~category.update', $category) : route('~category.store') }}"
    method="post">

    @if($category->id)
    @method('PUT')
    <input type="hidden" name="id" value="{{ $category->id }}">
    @endif
    @csrf

    <div>
        <x-input-label for="name">Categorie</x-input-label>
        <x-text-input value="{{ old('name', $category->name) }}" id="name" name="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <x-primary-button>
        <i class="bi {{ $category->id ? 'bi-pen' : 'bi-plus' }}"></i>
    </x-primary-button>
</form>
