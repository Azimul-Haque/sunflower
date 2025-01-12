@extends('layouts.index')
@section('title')
    Contact | 
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
                    <h2>যোগাযোগ</h2>
                    <ul class="bread-list">
                        <li><a href="/">নীড় পাতা<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#!">যোগাযোগ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- Contact Us -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2><span>যোগাযোগ</span> ফর্ম</h2>
                        <p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendrerit, sollicitudin nec ante.  </p>
                    </div>
                </div>
            </div>
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="contact-map">
                            <!-- Map -->
                            {{-- <div id="map"></div> --}}
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5157.296962305956!2d90.71413663080013!3d23.933563451694255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37543034bb406dfb%3A0xd22910f83a9f3e56!2sNarsingdi%20BIAM%20Zila%20School%20%26%20College!5e0!3m2!1sen!2sbd!4v1733168471288!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <!--/ End Map -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-head">
                            <!-- Form -->
                            <form class="form" action="http://themelamp.com/html/learnedu/mail/mail.php">
                                <div class="form-group">
                                    <input name="name" type="text" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" placeholder="Website">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Comment"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn primary">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-bottom">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <h3>ঠিকানা</h3>
                            <p>নেকমরদ (বঙ্গবন্ধু কলেজ থেকে ২০০ মিঃ পশ্চিমে), রানীশংকৈল, ঠাকুরগাঁও-৫১২১</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h3>ইমেইল এড্রেস</h3>
                            <a href="mailto:info@sunflowerkg.com">info@sunflowerkg.com</a>
                            <a href="mailto:admission@sunflowerkg.com">admission@sunflowerkg.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h3>Get in Touch</h3>
                            <p>+880 1719 541 589</p>
                            <p>+880 1716 457 419</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->
@endsection

@section('js')
    <!-- Google Maps JS -->
    {{-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/map-script.js"></script> --}}
@endsection