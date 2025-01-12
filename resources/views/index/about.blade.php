@extends('layouts.index')
@section('title')
    About us | 
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
                    <h2>আমাদের সম্পর্কে</h2>
                    <ul class="bread-list">
                        <li><a href="/">নীড় পাতা<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#!">আমাদের সম্পর্কে</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->
    
    <!-- About US -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="single-image overlay">
                        <img src="{{ asset('/vendor/learnedu/images/about.jpg') }}" alt="#">
                        <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-text">
                        <h2>About Our Education</h2>
                        <p>As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality.</p>
                        <p>face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences,</p>
                        <div class="button">
                            <a href="#" class="btn">Our Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End About US -->
    
    <!-- Fun Facts -->
    <div class="fun-facts overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.4s">
                    <!-- Single Fact -->
                    <div class="single-fact">
                        <i class="fa fa-users"></i>
                        <div class="number"><span class="counter">500</span>+</div>
                        <p>বর্তমান শিক্ষার্থী</p>
                    </div>
                    <!--/ End Single Fact -->
                </div>
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.6s">
                    <!-- Single Fact -->
                    <div class="single-fact">
                        <i class="fa fa-graduation-cap"></i>
                        <div class="number"><span class="counter">2000</span>+</div>
                        <p>উত্তীর্ণ শিক্ষার্থী</p>
                    </div>
                    <!--/ End Single Fact -->
                </div>
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="1s">
                    <!-- Single Fact -->
                    <div class="single-fact">
                        <i class="fa fa-trophy"></i>
                        <div class="number"><span class="counter">300</span>+</div>
                        <p>বৃত্তিপ্রাপ্ত</p>
                    </div>
                    <!--/ End Single Fact -->
                </div>
                <div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.8s">
                    <!-- Single Fact -->
                    <div class="single-fact">
                        <i class="fa fa-address-book-o"></i>
                        <div class="number"><span class="counter">25</span>+</div>
                        <p>অভিজ্ঞ শিক্ষক</p>
                    </div>
                    <!--/ End Single Fact -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Fun Facts -->
@endsection

@section('js')
   
@endsection