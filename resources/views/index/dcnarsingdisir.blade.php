@extends('layouts.index')
@section('title')
    Respected DC Sir | 
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
                    <h2>Respected DC Sir</h2>
                    <ul class="bread-list">
                        <li><a href="/">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#!">DC Sir</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->
    
    <!-- Director -->
    <section class="team-details section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="member-detail">
                        <div class="image">
                            <img src="{{ asset('/images/DC-Narsingdi-Sir.jpg') }}" alt="#">
                        </div>
                        {{-- <div class="contact">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="active"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-paper-plane"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <ul class="address">
                                <li><a href="mailto:rachel@websitename.com"><i class="fa fa-envelope"></i>rachel@websitename.com</a></li>
                                <li><i class="fa fa-phone"></i>+44 1236 456 8888</li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="detail-content">
                        <h2>MOHAMMAD RASHED HOSSAIN CHOUDHURY</h2>
                        <p class="title">Deputy Commissioner & District Magistrate, Narsingdi</p>
                        <p>As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality.</p>

                        <p>As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality.</p>

                        <p>As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality.</p>
                        
                        {{-- <div class="signature">
                            <img src="{{ asset('/vendor/learnedu/images/signature.png') }}" alt="#">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Director -->
@endsection

@section('js')
   
@endsection