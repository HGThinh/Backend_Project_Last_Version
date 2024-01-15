<div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="">
            <span>
                Map Restaurant
            </span>
        </a>
        <div class="" id="">
            <div class="User_option">
                <a class="" href="">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                <a href="{{ url('/logout') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </a>
            </div>
            <div class="custom_menu-btn">
                <button onclick="openNav()">
                    <img src="images/menu.png" alt="">
                </button>
            </div>
            <div id="myNav" class="overlay">
                <div class="overlay-content">
                    <a href="/">Home</a>
                    <a href="{{ route('about') }}">About us</a>
                    <a href="{{ route('news') }}">News</a>
                    <a href="{{ route('menus') }}">Menu</a>
                    <a href="{{ route('reservations') }}">Reservation</a>
                    <a href="{{ route('questions') }}">FAQ</a>
                    <a href="{{ route('contacts') }}">Contact</a>
                    <a href="{{ route('profile.edit') }}">Profile</a>
                </div>
            </div>
        </div>
    </nav>
</div>
