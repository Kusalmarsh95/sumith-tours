<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sumith Tours</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon" href="{{ asset("images/sumithtours.png") }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('css/font-awesome-6.4.2.min.css') }}" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
{{--    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/google-fonts.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset("vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Additional CSS Files -->
{{--    <link rel="stylesheet" href="{{ asset("css/fontawesome.css") }}">--}}
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset("css/templatemo-woox-travel.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.css") }}">
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("css/swiper-bundle.min.css") }}">


</head>
<body>
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{ asset("images/sumithtours.png") }}" alt="Sumith Tours">
{{--                        <img src="{{ asset("images/destination.png") }}" alt="">--}}
                    </a>

                    <ul class="nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/itinerary">Itinerary</a></li>
                        <li><a href="/reservation">Reservation</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
@yield('content')

<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Are You Looking To Travel ?</h2>
                <h4>Make A Reservation By Clicking The Button</h4>
            </div>
            <div class="col-lg-4">
                <div class="border-button">
                    <a href="/reservation">Reserve Now</a>
                </div>
                <div class="border-button">
                    <a href="https://wa.me/766679247?text=Hi%2C%20I%20have%20a%20question%20about%20your%20services"
                       target="_blank">
                        <i class="fa-brands fa-whatsapp"></i> Chat Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © 2024 <a href="{{ route('login') }}">Sumith Tours</a>. All rights reserved.
{{--                    <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>--}}
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{ asset("vendor/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("vendor/bootstrap/js/bootstrap.min.js") }}"></script>

<script src="{{ asset("js/isotope.min.js") }}"></script>
<script src="{{ asset("js/owl-carousel.js") }}"></script>
{{--<script src="{{ asset("js/wow.js") }}"></script>--}}
<script src="{{ asset("js/tabs.js") }}"></script>
<script src="{{ asset("js/popup.js") }}"></script>
<script src="{{ asset("js/custom.js") }}"></script>


</body>
</html>
