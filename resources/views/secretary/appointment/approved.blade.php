<x-secondary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'approved-appointment')">
</x-secondary-button>
@php
$hasError = $errors->isNotEmpty();
@endphp

<x-modal name="approved-appointment" :show="$hasError" focusable>
    <form method="post" action="{{ route('&appointment.approved', [
    'id' => $appointment->id]) }}" class="p-6">
        @csrf
        @method('PUT')

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Confirmation du rendez-vous
        </h2>

        <p class="mt-1 text-muted-foreground">
            Veuillez tenir compte de nos horaires d'ouverture. Si le rendez-vous est fixé un jour où nous ne travaillons
            pas, une erreur s'affichera.
            Pour en savoir plus, veuillez cliquer : <a class="underline" href="{{ route('&hourly.index') }}">
                ici
            </a>
        </p>

        <div class="my-3">
            @if ($hasError)
            <div class="bg-red-500 text-white font-bold rounded-t px-2 py-1 text-base">
                Danger
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-2 text-red-700">
                <p class="mb-2 text">
                    @foreach ($errors->get('for_date') as $err)
                    {{ $err }}
                    @endforeach
                </p>
            </div>
            @endif
        </div>

        <div class="mt-6 space-y-5">
            <div>
                <x-input-label for="for_date">Heure du rendez-vous</x-input-label>
                <x-text-input type="datetime-local" value="{{ old('for_date') }}" id="for_date" name="for_date" />
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ms-3">
                Approuvé
            </x-primary-button>
        </div>
    </form>
</x-modal>