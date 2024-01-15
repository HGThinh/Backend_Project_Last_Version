<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>{{ config('app.name') }}</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- slidck slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map"
        integrity="undefined" crossorigin="anonymous" />


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>



    <div class="hero_area">
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
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- header section strats -->
        <!-- end header section -->
        @section('contents')
        @endsection
        <!-- slider section -->
        <section class="slider_section ">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="detail-box">
                            <h1>
                                Vietnamese cuisine
                            </h1>
                            <p>
                                one of the best cuisine in the world!
                            </p>
                        </div>
                        <div class="find_container ">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <form>
                                            <div class="form-row ">
                                                <div class="form-group col-lg-5">
                                                    <input type="text" class="form-control" id="inputFoodName"
                                                        placeholder="Food Name">
                                                </div>
                                                <div class="form-group col-lg-5">
                                                    <select name="categories[]" class="form-control" multiple required>
                                                        <option value="" disabled selected>Categories</option>
                                                        <option value="category1">Breakfast</option>
                                                        <option value="category2">Lunch</option>
                                                        <option value="category3">Dinner</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <div class="btn-box">
                                                        <button type="submit" class="btn ">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider_container">
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img1.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img2.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img3.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img4.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img1.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img2.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img3.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img4.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- recipe section -->

    <section class="recipe_section layout_padding-top">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our Menu
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/r1.jpg" class="box-img" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Breakfast
                            </h4>
                            <a href="">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/r2.jpg" class="box-img" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Lunch
                            </h4>
                            <a href="">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/r3.jpg" class="box-img" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Dinner
                            </h4>
                            <a href="">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    Reservation a table now
                </a>
            </div>
        </div>
    </section>

    <!-- end recipe section -->

    <!-- app section -->

    <section class="app_section">
        <div class="container">
            <div class="col-md-9 mx-auto">
                <div class="row">
                    <div class="col-md-7 col-lg-8">
                        <div class="detail-box">
                            <h2>
                                <span> Get the</span> <br>
                                MapRes App
                            </h2>
                            <p>
                                long established fact that a reader will be distracted by the readable content of a page
                                when looking at its layout. The poin
                            </p>
                            <div class="app_btn_box">
                                <a href="#" class="mr-1">
                                    <img src="images/google_play.png" class="box-img" alt="">
                                </a>
                                <a href="#">
                                    <img src="images/app_store.png" class="box-img" alt="">
                                </a>
                            </div>
                            <a href="#" class="download_btn">
                                Download Now
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="img-box">
                            <img src="images/mobile.png" class="box-img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end app section -->

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="col-md-11 col-lg-10 mx-auto">
                <div class="heading_container heading_center">
                    <h2>
                        About Us
                    </h2>
                </div>
                <div class="box">
                    <div class="col-md-7 mx-auto">
                        <div class="img-box">
                            <img src="images/about-img.jpg" class="box-img" alt="">
                        </div>
                    </div>
                    <div class="detail-box">
                        <p>
                            Map Restaurant: A Culinary Journey Through Vietnam

                            Embark on a culinary adventure through the vibrant flavors of Vietnam at Map Restaurant. Our
                            authentic dishes, prepared with fresh ingredients, will transport you to the heart of
                            Vietnamese culture. Our warm ambiance and attentive staff will ensure an unforgettable
                            dining experience.

                        </p>
                        <a href="{{ route('about') }}">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- news section -->

    <section class="news_section">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest News
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/n1.jpg" class="box-img" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Tasty Food For you
                            </h4>
                            <p>
                                there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined
                            </p>
                            <a href="">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/n2.jpg" class="box-img" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Breakfast For you
                            </h4>
                            <p>
                                there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined
                            </p>
                            <a href="">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end news section -->

    <!-- client section -->

    <section class="client_section layout_padding">
        <div class="container">
            <div class="col-md-11 col-lg-10 mx-auto">
                <div class="heading_container heading_center">
                    <h2>
                        Contact
                    </h2>
                </div>
                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="detail-box">
                                <h4>
                                    Feel free to contact us
                                </h4>
                                <div class="">
                                    <form method="POST" action="{{ route('admin.contacts.store') }}">
                                        @csrf
                                        <div class="sm:">
                                            <label for="title" class="">
                                                Create New Contact
                                            </label>

                                            <div class="">
                                                <label for="name" class="">
                                                    Name
                                                </label>

                                                <input type="text" id="name" name="name"
                                                    class="" />
                                            </div>

                                            <div class="">
                                                <label for="email" class="">
                                                    Email
                                                </label>

                                                <input type="email" id="email" name="email"
                                                    class="" />
                                            </div>

                                            <div class="">
                                                <label for="phone" class="">
                                                    Phone
                                                </label>

                                                <input type="text" id="phone" name="phone"
                                                    class="" />
                                            </div>
                                            <div class="">
                                                <label for="reason" class="">
                                                    Reason
                                                </label>

                                                <input type="text" id="reason" name="Reason"
                                                    class="" />
                                            </div>
                                        </div>
                                        <button type="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <!-- end client section -->

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

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">



    </div>

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- slick  slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>



</body>

</html>
