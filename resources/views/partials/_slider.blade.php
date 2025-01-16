<!-- Slider Area -->
<section class="home-slider">
    <div class="slider-active">
        @foreach($sliders as $slider)
            <!-- Single Slider -->
            <div class="single-slider overlay" style="background-image:url({{ asset('images/slider/' . $slider->image) }})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="slider-text">
                                <h1>{{ $slider->title }} <span>TEXT</span></h1>
                                <p>{{ $slider->subtitle }}</p>
                                <div class="button">
                                    <a href="/teachers" class="btn primary">Our Teachers</a>
                                    <a href="/gallery" class="btn">Gallery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
        @endforeach        
    </div>
</section>
<!--/ End Slider Area -->