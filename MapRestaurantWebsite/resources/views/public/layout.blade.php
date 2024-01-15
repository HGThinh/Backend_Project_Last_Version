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
            @include('public.nav')

        </header>
        <!-- header section strats -->
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            @yield('slogan')
        </section>
        <!-- end slider section -->
        <section class="recipe_section layout_padding-top">
            @yield('menu')
        </section>

        <section class="app_section">
            @yield('app')

        </section>

        <!-- end app section -->

        <!-- about section -->

        <section class="about_section layout_padding">
            @yield('about')
        </section>

        <!-- end about section -->

        <!-- news section -->



        <!-- end news section -->

        <!-- client section -->


        </section>
    </div>






    <section class="news_section layout_padding">
        @yield('questions')
    </section>

    <section class="about_section layout_padding">
        @yield('profile')


        <!-- recipe section -->



        <!-- end recipe section -->

        <!-- app section -->


        <!-- end client section -->

        @include('public.footer')



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
