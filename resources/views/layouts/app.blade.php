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
    <header class="p-6 bg-gray-100 text-center">
        <span
            class=" uppercase text-4xl font-manrope font-black leading-snug text-transparent bg-clip-text bg-gradient-to-r from-slate-400 via-slate-500 to-black/80">
            {{ $attributes["title"] }}
        </span>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
