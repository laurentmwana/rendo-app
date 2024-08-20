<form class="space-y-4" action="{{ $worker->id ? route('~worker.update', $worker) : route('~worker.store') }}"
    method="post">

    @if ($worker->id)
    @method('PUT')
    <input type="hidden" name="id" value="{{ $worker->id }}">
    @endif
    @csrf

    <div>
        <x-input-label for="name">Nom</x-input-label>
        <x-text-input value="{{ old('name', $worker->name) }}" id="name" name="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="firstname">Postnom</x-input-label>
        <x-text-input value="{{ old('firstname', $worker->firstname) }}" id="firstname" name="firstname" />
        <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="name">Prénom</x-input-label>
        <x-text-input value="{{ old('name', $worker->name) }}" id="name" name="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="phone">Téléphone</x-input-label>
        <x-text-input value="{{ old('phone', $worker->phone) }}" id="phone" name="phone" />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>


    <div>
        <x-input-label for="sex">Genre</x-input-label>
        <x-select :items="getSexies()" value="{{ old('sex', $worker->sex) }}" id="sex" name="sex" placeholder="Genre" />
        <x-input-error :messages="$errors->get('sex')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="grade_id">Grade</x-input-label>
        <x-select :items="getGrades()" value="{{ old('grade_id', $worker->grade_id) }}" id="grade_id" name="grade_id"
            placeholder="Grades" />
        <x-input-error :messages="$errors->get('grade_id')" class="mt-2" />
    </div>


    <x-primary-button>
        <i class="bi bi-pen"></i>
    </x-primary-button>
</form>