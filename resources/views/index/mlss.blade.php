@extends('layouts.index')
@section('title')
    এমএলএসএস | সানফ্লাওয়ার কেজি অ্যান্ড প্রি-ক্যাডেট স্কুল
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
@endsection

@section('content')
    <!-- Start Breadcrumbs -->
    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>এমএলএসএস</h2>
                    <ul class="bread-list">
                        <li><a href="/">নীড় পাতা<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#!">এমএলএসএস তালিকা</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- Start Team Area -->
    <section class="team-style2 section">
        <div class="container">
            {{-- <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Awesome <span>Teachers</span></h2>
                        <p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="image">
                            <img src="{{ asset('/vendor/learnedu/images/team/team1.jpg') }}" alt="#">
                            <a href="{{ asset('/vendor/learnedu/images/team/team1.jpg') }}" data-fancybox="photo"><i class="fa fa-search"></i></a>
                        </div>
                        <!--team-content -->
                        <div class="team-content">
                            <h4 class="name">David Harrison<span>Web Developer</span></h4>
                            <p>Completely network collaborative web services via user centric initiatives Quickly promote sticky</p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="image">
                            <img src="{{ asset('/vendor/learnedu/images/team/team2.jpg') }}" alt="#">
                            <a href="{{ asset('/vendor/learnedu/images/team/team2.jpg') }}" data-fancybox="photo"><i class="fa fa-search"></i></a>
                        </div>
                        <!--team-content -->
                        <div class="team-content">
                            <h4 class="name">Bambj Loun<span>Human Resources</span></h4>
                            <p>Completely network collaborative web services via user centric initiatives Quickly promote sticky</p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="image">
                            <img src="{{ asset('/vendor/learnedu/images/team/team3.jpg') }}" alt="#">
                            <a href="{{ asset('/vendor/learnedu/images/team/team3.jpg') }}" data-fancybox="photo"><i class="fa fa-search"></i></a>
                        </div>
                        <!--team-content -->
                        <div class="team-content">
                            <h4 class="name">Nalpamb Bold<span>JS Developer</span></h4>
                            <p>Completely network collaborative web services via user centric initiatives Quickly promote sticky</p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="image">
                            <img src="{{ asset('/vendor/learnedu/images/team/team4.jpg') }}" alt="#">
                            <a href="{{ asset('/vendor/learnedu/images/team/team4.jpg') }}" data-fancybox="photo"><i class="fa fa-search"></i></a>
                        </div>
                        <!--team-content -->
                        <div class="team-content">
                            <h4 class="name">Rohan Jonson<span>Associate Professor</span></h4>
                            <p>Completely network collaborative web services via user centric initiatives Quickly promote sticky</p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="image">
                            <img src="{{ asset('/vendor/learnedu/images/team/team3.jpg') }}" alt="#">
                            <a href="{{ asset('/vendor/learnedu/images/team/team3.jpg') }}" data-fancybox="photo"><i class="fa fa-search"></i></a>
                        </div>
                        <!--team-content -->
                        <div class="team-content">
                            <h4 class="name">Nalpamb Bold<span>JS Developer</span></h4>
                            <p>Completely network collaborative web services via user centric initiatives Quickly promote sticky</p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="image">
                            <img src="{{ asset('/vendor/learnedu/images/team/team4.jpg') }}" alt="#">
                            <a href="{{ asset('/vendor/learnedu/images/team/team4.jpg') }}" data-fancybox="photo"><i class="fa fa-search"></i></a>
                        </div>
                        <!--team-content -->
                        <div class="team-content">
                            <h4 class="name">Rohan Jonson<span>Associate Professor</span></h4>
                            <p>Completely network collaborative web services via user centric initiatives Quickly promote sticky</p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Team Area -->
@endsection

@section('js')
   
@endsection