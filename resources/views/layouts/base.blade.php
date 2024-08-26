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
                    <x-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">Accueil
                    </x-nav-link>

                    <x-nav-link href="{{ route('.about') }}" :active="request()->routeIs('.about')">A propos
                    </x-nav-link>

                    @guest
                    <x-nav-link href="{{ route('.reservation.index') }}" :active="request()->routeIs('.reservation')">
                        Prendre un rendez-vous
                    </x-nav-link>
                    @endguest
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
                                <x-dropdown-link :href="route('welcome')">
                                    Accueil
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('.about')">
                                    A propos
                                </x-dropdown-link>

                                @guest
                                <x-dropdown-link :href="route('.reservation.index')">
                                    Prendre un rendre-vous
                                </x-dropdown-link>
                                @endguest



                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>

            </div>

            <div>
                @auth
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

                            @if(isAdmin(Auth::user()->role))
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __("Dashboard") }}
                            </x-dropdown-link>
                            @endif

                            @if(isSecretary(Auth::user()->role))
                            <x-dropdown-link :href="route('&dashboard')">
                                {{ __("Dashboard") }}
                            </x-dropdown-link>
                            @endif

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
                @endauth @guest
                <x-button-link variant="secondary" href="{{ route('login') }}">
                    <i class="bi bi-user"></i> Se Connecter
                </x-button-link>
                @endguest
            </div>
        </div>

    </header>
    <main class="pb-12">
        {{ $slot }}
    </main>
</body>

</html>
