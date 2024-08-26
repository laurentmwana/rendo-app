<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>
        {{ $attributes["title"] ?? "" }} -
        {{ config("app.name", "Laravel") }}
    </title>

    <!-- Scripts -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="font-sans">

    <header
        class="sticky top-0 z-50 w-full border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60 px-4 xl:px-0">
        <div class="max-w-7xl mx-auto flex h-14 items-center justify-between">
            <div class="mr-4 hidden md:flex">
                <a class="mr-4 flex items-center space-x-2 lg:mr-6" href="/">
                    @include('shared.logo')
                </a>
                <nav class="flex items-center gap-4 text-sm lg:gap-6">
                    <x-nav-link href="{{ route('dashboard') }}" indexer="dashboard">Tableau de bord</x-nav-link>

                    <x-nav-link href="{{ route('~hourly.index') }}" indexer="admin/hourly">
                        Horaire
                    </x-nav-link>

                    <x-nav-link href="{{ route('~secretary.index') }}" indexer="admin/secretary">
                        Sécretaire
                    </x-nav-link>

                    <x-nav-link href="{{ route('~grade.index') }}" indexer="admin/grade">
                        Grade
                    </x-nav-link>

                    <x-nav-link href="{{ route('~worker.index') }}" indexer="admin/worker">
                        Travailleur
                    </x-nav-link>

                    <x-nav-link href="{{ route('~user.index') }}" indexer="admin/user">
                        Utilisateur
                    </x-nav-link>
                </nav>
            </div>
            <div class="relative md:hidden ">
                <div class="flex items-center justify-center gap-x-5">
                    <a href="/" class="block mt-2">
                        @include('shared.logo')
                    </a>
                    <div>
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                @include('shared.button-responsive')
                            </x-slot>

                            <x-slot name="content">

                                <x-dropdown-link href="{{ route('dashboard') }}" indexer="dashboard">Tableau de bord
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('~hourly.index') }}" indexer="admin/hourly">
                                    Horaire
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('~secretary.index') }}" indexer="admin/secretary">
                                    Sécretaire
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('~grade.index') }}" indexer="admin/grade">
                                    Grade
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('~worker.index') }}" indexer="admin/worker">
                                    Travailleur
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('~user.index') }}" indexer="admin/user">
                                    Utilisateur
                                </x-dropdown-link>

                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>

            </div>

            <div>
                <div class="flex sm:items-center sm:ms-6">

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @include('shared.avatar', ['name' =>
                            Auth::user()->name])
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __("Profile") }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('welcome')">
                                Voir le site
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                    {{ __("Log Out") }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>

    </header>
    <main id="sh">
        {{ $slot }}
    </main>
</body>

</html>
