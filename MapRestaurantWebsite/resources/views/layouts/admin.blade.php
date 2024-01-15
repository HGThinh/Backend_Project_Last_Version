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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue">
    <div class="">
        <a class="btn btn-secondary " href="" role="button" id="">

            {{ Auth::user()->name }}
        </a>

        <div class="">
            <a class="" href="#">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </a>
        </div>
    </div>
    <div class="card text-center mt-5">
        <div class="card-header bg-primary text-white">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <ul>
                        <li>
                            <x-admin-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.index')">
                                {{ __('Categories') }}
                            </x-admin-nav-link>
                        </li>

                        <li>
                            <x-admin-nav-link :href="route('admin.menus.index')" :active="request()->routeIs('admin.menus.index')">
                                {{ __('Menus') }}
                            </x-admin-nav-link>
                        </li>

                        <li>
                            <x-admin-nav-link :href="route('admin.tables.index')" :active="request()->routeIs('admin.tables.index')">
                                {{ __('Tables') }}
                            </x-admin-nav-link>
                        </li>

                        <li>
                            <x-admin-nav-link :href="route('admin.reservations.index')" :active="request()->routeIs('admin.reservations.index')">
                                {{ __('Reservations') }}
                            </x-admin-nav-link>
                        </li>

                        <li>
                            <x-admin-nav-link :href="route('admin.news.index')" :active="request()->routeIs('admin.news.index')">
                                {{ __('News') }}
                            </x-admin-nav-link>
                        </li>

                        <li>
                            <x-admin-nav-link :href="route('admin.contacts.index')" :active="request()->routeIs('admin.contacts.index')">
                                {{ __('Contacts') }}
                            </x-admin-nav-link>
                        </li>

                        <li>
                            <x-admin-nav-link :href="route('admin.questions.index')" :active="request()->routeIs('admin.questions.index')">
                                {{ __('Questions') }}
                            </x-admin-nav-link>
                        </li>
                    </ul>



                </div>
            </nav>
        </div>

        <div class="card-body">
            <h5 class="card-title">Dashboard page</h5>
            <p class="card-text">Click button to return home</p>
            <a href="/" class="btn btn-primary">Home</a>
        </div>
    </div>

    <main class="container mt-3">
        @if (session()->has('danger'))
            <div class="" role="alert">
                <span>Danger alert</span> {{ session()->get('danger') }}
            </div>
        @endif
        @if (session()->has('success'))
            <div class="" role="alert">
                <span>Success alert</span> {{ session()->get('success') }}
            </div>
        @endif
        @if (session()->has('warning'))
            <div class="" role="alert">
                <span>Warning alert</span> {{ session()->get('warning') }}
            </div>
        @endif
        {{ $slot }}
    </main>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
