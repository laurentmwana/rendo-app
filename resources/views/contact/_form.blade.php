<x-card class="shadow-sm bg-inherit space-y-4">
    <h1 class="text-base text-gray-700 dark:text-gray-100">
        Formulaire de contact
    </h1>

    <form action="{{ route('.contact.send') }}" class="space-y-4" method="post">
        @csrf
        <div>
            <x-input-label for="name">Nom</x-input-label>
            <x-text-input value="{{ old('name', $contact->name) }}" id="name" name="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="email">Email</x-input-label>
            <x-text-input value="{{ old('email', $contact->email) }}" id="email" name="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="subject">Motive</x-input-label>
            <x-textarea value="{{ old('subject', $contact->subject) }}" id="subject" name="subject" />
            <x-input-error :messages="$errors->get('subject')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="message">Message</x-input-label>
            <x-textarea value="{{ old('message', $contact->message) }}" id="message" name="message" />
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>
        <x-primary-button type="submit">
            Envoyer
        </x-primary-button>
    </form>

</x-card>
