<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="card text-center">
        <div class="card-header">
            <nav>
                <x-admin-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.index')">
                    {{ __('Categories') }}
                </x-admin-nav-link>

                <x-admin-nav-link :href="route('admin.menus.index')" :active="request()->routeIs('admin.menus.index')">
                    {{ __('Menus') }}
                </x-admin-nav-link>

                <x-admin-nav-link :href="route('admin.tables.index')" :active="request()->routeIs('admin.tables.index')">
                    {{ __('Tables') }}
                </x-admin-nav-link>
                <x-admin-nav-link :href="route('admin.reservations.index')" :active="request()->routeIs('admin.reservations.index')">
                    {{ __('Reservations') }}
                </x-admin-nav-link>
            </nav>

        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
