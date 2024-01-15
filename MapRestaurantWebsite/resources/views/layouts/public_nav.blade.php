<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="">
                <span>
                    Map Restaurant
                </span>
            </a>
            <div class="" id="">
                <div class="User_option">
                    <a href="{{ route('login') }}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Login</span>
                    </a>
                    <form class="form-inline ">
                        <input type="search" placeholder="Search" />
                        <button class="btn  nav_search-btn" type="submit">
                            <i class="bi fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
                <div class="custom_menu-btn">
                    <button onclick="openNav()">
                        <img src="images/menu.png" alt="">
                    </button>
                </div>
                <div id="myNav" class="overlay">
                    <div class="overlay-content">
                        <a href="">Home</a>
                        <a href="{{ route('about') }}">About us</a>
                        <a href="{{ route('news') }}">News</a>
                        <a href="{{ route('menu') }}">Menu</a>
                        <a href="{{ route('reservation') }}">Reservation</a>
                        <a href="{{ route('FAQ') }}">FAQ</a>
                        <a href="{{ route('contact') }}">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
