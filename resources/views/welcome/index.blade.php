<x-base-layout title="Bienvenu(e)">
    @include('welcome.hero')

    <x-container class="py-12">

        @include('welcome.info')
        @include('welcome.hourly', [
        'hourlies' => $hourlies
        ])

    </x-container>
</x-base-layout>