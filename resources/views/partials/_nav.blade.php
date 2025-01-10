<div class="book_preload">
    <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>
</div>
<!--/ End Book Preloader -->

<!-- Mp Color -->
{{-- <div class="mp-color">
    <div class="icon inOut"><i class="fa fa-cog fa-spin"></i></div>
    <h4>রঙ নির্ধারণ করুন</h4>
    <span class="color1"></span>
    <span class="color2"></span>
    <span class="color3"></span>
    <span class="color4"></span>
    <span class="color5"></span>
    <span class="color6"></span>
    <span class="color7"></span>
    <span class="color8"></span>
</div> --}}
<!--/ End Mp Color -->

<!-- Header -->
<header class="header">
    <!-- Topbar -->
    @mobile
        <span></span>
    @elsemobile
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <!-- Contact -->
                    <ul class="content">
                        <li><i class="fa fa-phone"></i>{{ $sharedbasicinfo->contactno }}</li>
                        <li><a href="mailto:{{ $sharedbasicinfo->email }}"><i class="fa fa-envelope-o"></i>{{ $sharedbasicinfo->email }}</a></li>
                        <li><i class="fa fa-clock-o"></i>Opening: 10:00am - 5:00pm</li>
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Social -->
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                    <!-- End Social -->
                </div>
            </div>
        </div>
    </div>
    @endmobile
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="logo">
                        @mobile
                        <a href="/" style="color: #6D6E6A;"><img src="/images/logo.png" alt="#" style="width: 40px; height: auto;"> Narsingdi BIAM Zila School & College</a>
                        @elsemobile
                        <h2><a href="/" style="color: #6D6E6A;"><img src="/images/logo.png" alt="#"> Narsingdi BIAM Zila School & College</a></h2>
                        @endmobile
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-md-4">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <div class="single-widget">
                            <i class="fa fa-phone"></i>
                            <h4>Contact<span>{{ $sharedbasicinfo->contactno }}</span></h4>
                        </div>
                        {{-- <div class="single-widget">
                            <i class="fa fa-envelope-o"></i>
                            <h4>Send Message<a href="mailto:mailus@mail.com"><span>support@education.com</span></a></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-map-marker"></i>
                            <h4>Our Location<span>211 Ronad, California, Us</span></h4>
                        </div> --}}
                    </div>
                    <!--/ End Header Widget -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
    <!-- Header Menu -->
    <div class="header-menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-collapse">
                            <!-- Main Menu -->
                            <ul id="nav" class="nav menu navbar-nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="#">BIAM<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="/about">About us</a></li>
                                        <li><a href="/history">History</a></li>
                                        <li><a href="#">District Administration<i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown submenu">
                                                <li><a href="/dc-narsingdi-sir">Respected DC Sir</a></li>
                                                <li><a href="/adc-edu-sir">Respected ADC (Edu & ICT) Sir</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/teachers">Faculties</a></li>
                                        <li><a href="/mlss">Stafss</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Academic<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="#">শ্রেণি কার্যক্রম<i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown submenu">
                                                <li><a href="/nursery">নার্সারি</a></li>
                                                <li><a href="/kg">কেজি জিরো</a></li>
                                                <li><a href="/one">কেজি ওয়ান</a></li>
                                                <li><a href="/two">কেজি টু</a></li>
                                                <li><a href="/three">কেজি থ্রি</a></li>
                                                <li><a href="/four">কেজি ফোর</a></li>
                                                <li><a href="/five">কেজি ফাইভ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/syllabus">Syllabus</a></li>
                                        <li><a href="/achievements">Achievements</a></li>
                                    </ul>
                                </li>
                                <li><a href="/notice">Notice</a></li>
                                <li><a href="/events">Events</a></li>
                                <li><a href="/gallery">Gallery</a></li>
                               {{--  {{-- <li><a href="#">Blogs<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="blogs.html">Blogs Grid Layout</a></li>
                                        <li><a href="blogs-left-sidebar.html">Blogs Left Sidebar</a></li>
                                        <li><a href="blogs-right-sidebar.html">Blogs Right Sidebar</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Blogs Single - Left Sidebar</a></li>
                                        <li><a href="blog-single.html">Blogs Single - Right Sidebar</a></li>
                                    </ul>
                                </li> --}} --}}
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                            <!-- End Main Menu -->
                            <!-- button -->
                            <div class="button">
                                <a href="/admission" class="btn"><i class="fa fa-pencil"></i>ভর্তি তথ্য</a>
                            </div>
                            <!--/ End Button -->
                        </div> 
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Menu -->
</header>
<!-- End Header