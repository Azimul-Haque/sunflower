@extends('layouts.index')
@section('title')
    আমাদের ইতিহাস | সানফ্লাওয়ার কেজি অ্যান্ড প্রি-ক্যাডেট স্কুল
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
                    <h2>About us</h2>
                    <ul class="bread-list">
                        <li><a href="/">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#!">About us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->
    
    <!-- History 1 -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="single-image overlay">
                        <img src="{{ asset('/vendor/learnedu/images/about.jpg') }}" alt="#">
                        {{-- <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-text">
                        <h2>ইতিহাস ১৯৯৩</h2>
                        <p>As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality.</p>
                        <p>face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End History 1 -->
    
    <!-- History 2 -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="about-text">
                        <h2>ইতিহাস ২০০০+ বা ২০০০-</h2>
                        <p>As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality.</p>
                        <p>face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences,</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="single-image overlay">
                        <img src="{{ asset('vendor/learnedu/images/about.jpg') }}" alt="#">
                        {{-- <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End History 2 -->

    <!-- History 3 -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="single-image overlay">
                        <img src="{{ asset('vendor/learnedu/images/about.jpg') }}" alt="#">
                        {{-- <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-text">
                        <h2>ইতিহাস ২০১৯</h2>
                        <p>As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality.</p>
                        <p>face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End History 3 -->
@endsection

@section('js')
   
@endsection