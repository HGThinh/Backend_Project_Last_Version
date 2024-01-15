<div class="footer_container">
    <!-- info section -->
    <section class="info_section ">
        <div class="container">

            <div class="info_links">
                <ul>
                    <li class="active">
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('news') }}">
                            Lastest News
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('menus') }}">
                            Menu
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('reservations') }}">
                            Reservation
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('questions') }}">
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('contacts') }}">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a class="" href="">
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                        <a href="{{ url('/profile') }}"
                                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Profile</a>

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
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end info_section -->


    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a><br>
                Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

</div>
