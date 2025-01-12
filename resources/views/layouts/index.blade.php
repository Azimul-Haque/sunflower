<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>@yield('title') Narsingdi BIAM Zila School & College</title>
    <meta name="description" content="Narsingdi BIAM Zila School & College Copyright Reserved. Developed By Innova Tech Inc..">
    <meta name="keywords" content="Narsingdi BIAM Zila School & College, Narsingdi">
    <meta charset="utf-8">
    <meta name="author" content="Innova Tech Inc.">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicons//manifest.json') }}">
    <meta name="msapplication-TileColor" content="#FF9800">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#FF9800">
    
    <!-- animation -->
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/font-awesome.min.css') }}">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/jquery.fancybox.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/owl.theme.default.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/animate.min.css') }}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/slicknav.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/magnific-popup.css') }}">
    
    <!-- Learedu Stylesheet -->
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/responsive.css') }}">
    
    <!-- Learedu Color -->
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/color/color1.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/color/color2.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/color/color3.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/color/color4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/color/color5.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/color/color6.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/color/color7.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/learnedu/css/color/color8.css') }}"> --}}
    <link rel="stylesheet" href="#" id="colors">    
    @yield('css')
    <style type="text/css">
        /*@font-face {
          font-family: kalpurush;
          src: url({{ asset('font/kalpurush.woff') }});
        }*/
        body, h1, h2, h3, h4, h5, h6, p, a, span, li, td, div {
/*            font-family: kalpurush;*/
        }
    </style>
</head>

<body>
    @include('partials._nav')

    <main style="min-height: 400px;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer overlay section wow fadeIn">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- About -->
                        <div class="single-widget about">
                            <div class="logo"><a href="#"><img src="/images/logo2.png" alt="Narsingdi BIAM Logo with Text"></a></div>
                            <p>{{ $sharedbasicinfo->shorttext }}</p>
                            <ul class="list">
                                <li><a href="tel:{{ $sharedbasicinfo->contactno }}" title=""><i class="fa fa-phone"></i>Phone: {{ $sharedbasicinfo->contactno }}</a></li>
                                <li><i class="fa fa-envelope"></i>Email: <a href="mailto:{{ $sharedbasicinfo->email }}">{{ $sharedbasicinfo->email }}</a></li>
                                <li><i class="fa fa-map-o"></i>{{ $sharedbasicinfo->address }}</li>
                            </ul>
                        </div>
                        <!--/ End About -->
                    </div>
                    <div class="col-md-4">
                        <!-- Useful Links -->
                        <div class="single-widget useful-links">
                            <h2>Useful Links</h2>
                            <ul>
                                <li><a href="/"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="/about"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="/teachers"><i class="fa fa-angle-right"></i>Faculties</a></li>
                                <li><a href="/notice"><i class="fa fa-angle-right"></i>Notices</a></li>
                                <li><a href="/contact"><i class="fa fa-angle-right"></i>Contact us</a></li>
                            </ul>
                        </div>
                        <!--/ End Useful Links -->
                    </div>
                    <div class="col-md-4">
                        <!-- Newsletter -->
                        <div class="single-widget newsletter useful-links">
                            <h2>BIAM & Others</h2>
                            <ul>
                                <li><a href="https://biam.gov.bd/"><i class="fa fa-angle-right"></i>BIAM Foundation</a></li>
                                <li><a href="https://drive.google.com/file/d/1bu_sUosPAThy6FZeNUjWrqE1ZVwbuxdC/view"><i class="fa fa-angle-right"></i>BIAM Schools</a></li>
                                <li><a href="https://mopa.gov.bd/"><i class="fa fa-angle-right"></i>MoPA</a></li>
                                <li><a href="https://cabinet.gov.bd/"><i class="fa fa-angle-right"></i>Cabinet Division</a></li>
                                <li><a href="https://www.narsingdi.gov.bd/"><i class="fa fa-angle-right"></i>DC Office, Narsingdi</a></li>
                                <li><a href="https://bangladesh.gov.bd/index.php"><i class="fa fa-angle-right"></i>National Portal</a></li>
                            </ul>
                            {{-- <div class="mail">
                                <p>Don't miss to  subscribe to our news feed, Get the latest updates from us!</p>
                                <div class="form">
                                    <input type="email" placeholder="Enter your email">
                                    <button class="button" type="submit"><i class="fa fa-envelope"></i></button>
                                </div>
                            </div> --}}
                        </div>
                        <!--/ End Newsletter -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom-head">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Social -->
                                    {{-- <ul class="social">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul> --}}
                                    <!-- End Social -->
                                    <!-- Copyright -->
                                    <div class="copyright">
                                        <p>© Copyright Reserved {{ date('Y') }}. Developed by <a href="https://www.innovatechbd.net/" target="_blank">Innova Tech Inc.</a>.</p>
                                    </div>
                                    <!--/ End Copyright -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Bottom -->
    </footer>
    <!--/ End Footer -->

    <!-- javascript libraries / javascript files set #1 -->
    <!-- Jquery JS-->
    <script src="{{ asset('vendor/learnedu/js/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/learnedu/js/jquery-migrate.min.js') }}"></script>
    <!-- Popper JS-->
    <script src="{{ asset('vendor/learnedu/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/learnedu/js/bootstrap.min.js') }}"></script>
    <!-- Colors JS-->
    <script src="{{ asset('vendor/learnedu/js/colors.js') }}"></script>
    <!-- Jquery Steller JS -->
    <script src="{{ asset('vendor/learnedu/js/jquery.stellar.min.js') }}"></script>
    <!-- Particle JS -->
    <script src="{{ asset('vendor/learnedu/js/particles.min.js') }}"></script>
    <!-- Fancy Box JS-->
    <script src="{{ asset('vendor/learnedu/js/facnybox.min.js') }}"></script>
    <!-- Magnific Popup JS-->
    <script src="{{ asset('vendor/learnedu/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Masonry JS-->
    <script src="{{ asset('vendor/learnedu/js/masonry.pkgd.min.js') }}"></script>
    <!-- Circle Progress JS -->
    <script src="{{ asset('vendor/learnedu/js/circle-progress.min.js') }}"></script>
    <!-- Owl Carousel JS-->
    <script src="{{ asset('vendor/learnedu/js/owl.carousel.min.js') }}"></script>
    <!-- Waypoints JS-->
    <script src="{{ asset('vendor/learnedu/js/waypoints.min.js') }}"></script>
    <!-- Slick Nav JS-->
    <script src="{{ asset('vendor/learnedu/js/slicknav.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('vendor/learnedu/js/jquery.counterup.min.js') }}"></script>
    <!-- Easing JS-->
    <script src="{{ asset('vendor/learnedu/js/easing.min.js') }}"></script>
    <!-- Wow Min JS-->
    <script src="{{ asset('vendor/learnedu/js/wow.min.js') }}"></script>
    <!-- Scroll Up JS-->
    <script src="{{ asset('vendor/learnedu/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Google Maps JS -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
    <script src="{{ asset('vendor/learnedu/js/gmaps.min.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('vendor/learnedu/js/main.js') }}"></script>

    @include('partials._messages')
    @yield('js')
</body>

<!-- Mirrored from www.themezaa.com/html/h-code/portfolio-short-description.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Sep 2018 20:27:12 GMT -->

</html>