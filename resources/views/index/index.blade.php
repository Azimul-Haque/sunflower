@extends('layouts.index')
@section('title')
    
@endsection

@section('css')
    
@endsection

@section('content')
    @include('partials._slider')

    <!-- Features -->
    <section class="our-features section">
    	<div class="container">
    		<div class="row">
    			<div class="col-12 wow zoomIn">
    				<div class="section-title">
    					<h2>We Provide <span>Education</span> That Inspires and Empowers</h2>
    					<p>At <b>Narsingdi BIAM Zilla School & College</b>, we deliver holistic education, combining academic excellence with moral values. With expert teachers and modern facilities, we empower students to grow intellectually, ethically, and socially, preparing them for a successful future.</p>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.4s">
    				<!-- Single Feature -->
    				<div class="single-feature">
    					<div class="feature-head">
    						<img src="vendor/learnedu/images/feature1.jpg" alt="#">
    					</div>
    					<h2>Inspiring Young Minds</h2>
    					<p>We nurture creativity and innovation through quality education and a supportive environment.</p>	
    				</div>
    				<!--/ End Single Feature -->
    			</div>
    			<div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.6s">
    				<!-- Single Feature -->
    				<div class="single-feature">
    					<div class="feature-head">
    						<img src="vendor/learnedu/images/feature2.jpg" alt="#">
    					</div>
    					<h2>Building Strong Values</h2>
    					<p>Our focus on discipline and moral development shapes students into responsible citizens.</p>	
    				</div>
    				<!--/ End Single Feature -->
    			</div>
    			<div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay="0.8s">
    				<!-- Single Feature -->
    				<div class="single-feature">
    					<div class="feature-head">
    						<img src="vendor/learnedu/images/feature3.jpg" alt="#">
    					</div>
    					<h2>Empowering Bright Futures</h2>
    					<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim</p>	
    				</div>
    				<!--/ End Single Feature -->
    			</div>
    		</div>
    	</div>
    </section>
    <!-- End Features -->

    <!-- Call To Action -->
    <section class="cta" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-5 offset-lg-6 col-12">
    				<div class="cta-inner overlay">
    					<div class="text-content">
    						<h2>We Focus On Excellence in Education and Character Development</h2>
    						<p>At <b>Narsingdi BIAM Zilla School & College</b>, we believe in shaping future leaders through quality education and a commitment to character development. Our institution is dedicated to fostering academic excellence, moral values, and co-curricular activities that prepare students to excel in life. Situated in the heart of Narsingdi, we provide a nurturing environment where curiosity meets creativity, and innovation drives learning. With highly qualified teachers, modern facilities, and a focus on discipline, we aim to create a generation equipped to meet the challenges of tomorrow. Join us as we continue our journey to empower young minds with knowledge and values.</p>
    						<div class="button">
    							<a class="btn primary wow fadeInUp" href="contact.html" >Register Now</a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!--/ End Call To Action -->

    <!-- Team -->
    <section class="team section">
    	<div class="container">
    		<div class="row">
    			<div class="col-12 wow zoomIn">
    				<div class="section-title">
    					<h2>Our Awesome <span>Teachers</span></h2>
    					<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
    				</div>
    			</div>
    		</div>
    		<div class="owl-carousel owl-theme">
    			@for($iasd = 0; $iasd < 10; $iasd++)
    			<div class="single-team item">
    				<img src="/vendor/learnedu/images/team/team1.jpg" alt="#">
    				<div class="team-hover">
    					<h4>Rohan Jonson<span>Associate Professor</span></h4>
    					<p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
    					<ul class="social">
    						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
    						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
    						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
    					</ul>
    				</div>
    			</div>
    			@endfor
    		</div>

    	</div>
    </section>
    <!--/ End Team -->
    
    <!-- Testimonials -->
    <section class="testimonials overlay section" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-12">
    				<div class="testimonial-slider">
    					<!-- Single Testimonial -->
    					<div class="single-testimonial">
    						<img src="/vendor/learnedu/images/testimonial1.jpg" alt="#">
    						<div class="main-content">
    							<h4 class="name">Sanavce Faglane</h4>
    							<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
    						</div>
    					</div>
    					<!--/ End Single Testimonial -->
    					<!-- Single Testimonial -->
    					<div class="single-testimonial">
    						<img src="/vendor/learnedu/images/testimonial2.jpg" alt="#">
    						<div class="main-content">
    							<h4 class="name">Jansan Kate</h4>
    							<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
    						</div>
    					</div>
    					<!--/ End Single Testimonial -->
    					<!-- Single Testimonial -->
    					<div class="single-testimonial">
    						<img src="/vendor/learnedu/images/testimonial3.jpg" alt="#">
    						<div class="main-content">
    							<h4 class="name">Sanavce Faglane</h4>
    							<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
    						</div>
    					</div>
    					<!--/ End Single Testimonial -->
    					<!-- Single Testimonial -->
    					<div class="single-testimonial">
    						<img src="/vendor/learnedu/images/testimonial4.jpg" alt="#">
    						<div class="main-content">
    							<h4 class="name">Jansan Kate</h4>
    							<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
    						</div>
    					</div>
    					<!--/ End Single Testimonial -->
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!--/ End Testimonials -->
    
    <!-- Events -->
    <section class="events section">
    	<div class="container">
    		<div class="row">
    			<div class="col-12 wow zoomIn">
    				<div class="section-title">
    					<h2>Upcoming <span>Events</span></h2>
    					<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-12">
    				<div class="event-slider">
    					<!-- Single Event -->
    					<div class="single-event">
    						<div class="head overlay">
    							<img src="/vendor/learnedu/images/events/event1.jpg" alt="#">
    							<a href="/vendor/learnedu/images/events/event1.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
    						</div>
    						<div class="event-content">
    							<div class="meta"> 
    								<span><i class="fa fa-calendar"></i>05 June 2018</span>
    								<span><i class="fa fa-clock-o"></i>12.00-5.00PM</span>
    							</div>
    							<h4><a href="event-single.html">Freshers Day Reception 2018</a></h4>
    							<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
    							<div class="button">
    								<a href="event-single.html" class="btn">Join Event</a>
    							</div>
    						</div>
    					</div>
    					<!--/ End Single Event -->
    					<!-- Single Event -->
    					<div class="single-event">
    						<div class="head overlay">
    							<img src="/vendor/learnedu/images/events/event2.jpg" alt="#">
    							<a href="/vendor/learnedu/images/events/event2.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
    						</div>
    						<div class="event-content">
    							<div class="meta">
    								<span><i class="fa fa-calendar"></i>03 July 2018</span>
    								<span><i class="fa fa-clock-o"></i>03.20-5.20PM</span>
    							</div>
    							<h4><a href="event-single.html">Best Student Award 2018</a></h4>
    							<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
    							<div class="button">
    								<a href="event-single.html" class="btn">Join Event</a>
    							</div>
    						</div>
    					</div>
    					<!--/ End Single Event -->
    					<!-- Single Event -->
    					<div class="single-event">
    						<div class="head overlay">
    							<img src="/vendor/learnedu/images/events/event3.jpg" alt="#">
    							<a href="/vendor/learnedu/images/events/event3.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
    						</div>
    						<div class="event-content">
    							<div class="meta">
    								<span><i class="fa fa-calendar"></i>15 Dec 2018</span>
    								<span><i class="fa fa-clock-o"></i>12.30-5.30PM</span>
    							</div>
    							<div class="title">
    								<h4><a href="event-single.html">Student Workshop</a></h4>
    								<p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt</p>
    							</div>
    							<div class="button">
    								<a href="event-single.html" class="btn">Join Event</a>
    							</div>
    						</div>
    					</div>
    					<!--/ End Single Event -->
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!--/ End Events -->
    
    <!-- Fun Facts -->
    <div class="fun-facts overlay" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.4s">
    				<!-- Single Fact -->
    				<div class="single-fact">
    					<i class="fa fa-users"></i>
    					<div class="number"><span class="counter">500</span>+</div>
    					<p>Currents Students</p>
    				</div>
    				<!--/ End Single Fact -->
    			</div>
    			<div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.6s">
    				<!-- Single Fact -->
    				<div class="single-fact">
    					<i class="fa fa-graduation-cap"></i>
    					<div class="number"><span class="counter">2000</span>+</div>
    					<p>Passed Students</p>
    				</div>
    				<!--/ End Single Fact -->
    			</div>
    			<div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="1s">
    				<!-- Single Fact -->
    				<div class="single-fact">
    					<i class="fa fa-trophy"></i>
    					<div class="number"><span class="counter">300</span>+</div>
    					<p>Achievements</p>
    				</div>
    				<!--/ End Single Fact -->
    			</div>
    			<div class="col-lg-3 col-md-6 col-6 wow zoomIn" data-wow-delay="0.8s">
    				<!-- Single Fact -->
    				<div class="single-fact">
    					<i class="fa fa-address-book-o"></i>
    					<div class="number"><span class="counter">25</span>+</div>
    					<p>Experienced Faculties</p>
    				</div>
    				<!--/ End Single Fact -->
    			</div>
    		</div>
    	</div>
    </div>
    <!--/ End Fun Facts -->
    
    <!-- Blogs -->
    {{-- <section class="blog section">
    	<div class="container">
    		<div class="row">
    			<div class="col-12">
    				<div class="section-title">
    					<h2>Latest <span>News</span></h2>
    					<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-12">
    				<div class="blog-slider">
    					<!-- Single Blog -->
    					<div class="single-blog">
    						<div class="blog-head overlay">
    							<div class="date">
    								<h4>10<span>May</span></h4>
    							</div>
    							<img src="/vendor/learnedu/images/blog/blog1.jpg" alt="#">
    						</div>
    						<div class="blog-content">
    							<h4 class="blog-title"><a href="blog-single.html">Our Student Have sit amet egestas</a></h4>
    							<div class="blog-info">
    								<a href="#"><i class="fa fa-user"></i>By: Admin</a>
    								<a href="#"><i class="fa fa-list"></i>Learning</a>
    								<a href="#"><i class="fa fa-heart-o"></i>53K</a>
    							</div>
    							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
    							<div class="button">
    								<a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
    							</div>
    						</div>
    					</div>
    					<!-- End Single Blog -->
    					<!-- Single Blog -->
    					<div class="single-blog">
    						<div class="blog-head overlay">
    							<div class="date">
    								<h4>05<span>May</span></h4>
    							</div>
    							<img src="/vendor/learnedu/images/blog/blog2.jpg" alt="#">
    						</div>
    						<div class="blog-content">
    							<h4 class="blog-title"><a href="blog-single.html">Our teachers egestas erat dignissim</a></h4>
    							<div class="blog-info">
    								<a href="#"><i class="fa fa-user"></i>By: Admin</a>
    								<a href="#"><i class="fa fa-list"></i>Academic</a>
    								<a href="#"><i class="fa fa-heart-o"></i>33K</a>
    							</div>
    							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
    							<div class="button">
    								<a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
    							</div>
    						</div>
    					</div>
    					<!-- End Single Blog -->
    					<!-- Single Blog -->
    					<div class="single-blog">
    						<div class="blog-head overlay">
    							<div class="date">
    								<h4>15<span>Mar</span></h4>
    							</div>
    							<img src="/vendor/learnedu/images/blog/blog3.jpg" alt="#">
    						</div>
    						<div class="blog-content">
    							<h4 class="blog-title"><a href="blog-single.html">We are Proffesional Have velit Landon</a></h4>
    							<div class="blog-info">
    								<a href="#"><i class="fa fa-user"></i>By: Admin</a>
    								<a href="#"><i class="fa fa-list"></i>Knowledge</a>
    								<a href="#"><i class="fa fa-heart-o"></i>11K</a>
    							</div>
    							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
    							<div class="button">
    								<a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
    							</div>
    						</div>
    					</div>
    					<!-- End Single Blog -->
    					<!-- Single Blog -->
    					<div class="single-blog">
    						<div class="blog-head overlay">
    							<div class="date">
    								<h4>10<span>Mar</span></h4>
    							</div>
    							<img src="/vendor/learnedu/images/blog/blog4.jpg" alt="#">
    						</div>
    						<div class="blog-content">
    							<h4 class="blog-title"><a href="blog-single.html">Our Student Have sit amet egestas</a></h4>
    							<div class="blog-info">
    								<a href="#"><i class="fa fa-user"></i>By: Admin</a>
    								<a href="#"><i class="fa fa-list"></i>Learning</a>
    								<a href="#"><i class="fa fa-heart-o"></i>53K</a>
    							</div>
    							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
    							<div class="button">
    								<a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
    							</div>
    						</div>
    					</div>
    					<!-- End Single Blog -->
    					<!-- Single Blog -->
    					<div class="single-blog">
    						<div class="blog-head overlay">
    							<div class="date">
    								<h4>25<span>Feb</span></h4>
    							</div>
    							<img src="/vendor/learnedu/images/blog/blog2.jpg" alt="#">
    						</div>
    						<div class="blog-content">
    							<h4 class="blog-title"><a href="blog-single.html">Our teachers egestas erat dignissim</a></h4>
    							<div class="blog-info">
    								<a href="#"><i class="fa fa-user"></i>By: Admin</a>
    								<a href="#"><i class="fa fa-list"></i>Academic</a>
    								<a href="#"><i class="fa fa-heart-o"></i>33K</a>
    							</div>
    							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
    							<div class="button">
    								<a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
    							</div>
    						</div>
    					</div>
    					<!-- End Single Blog -->
    					<!-- Single Blog -->
    					<div class="single-blog">
    						<div class="blog-head overlay">
    							<div class="date">
    								<h4>28<span>Feb</span></h4>
    							</div>
    							<img src="/vendor/learnedu/images/blog/blog3.jpg" alt="#">
    						</div>
    						<div class="blog-content">
    							<h4 class="blog-title"><a href="blog-single.html">We are Proffesional Have velit Landon</a></h4>
    							<div class="blog-info">
    								<a href="#"><i class="fa fa-user"></i>By: Admin</a>
    								<a href="#"><i class="fa fa-list"></i>Knowledge</a>
    								<a href="#"><i class="fa fa-heart-o"></i>11K</a>
    							</div>
    							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
    							<div class="button">
    								<a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
    							</div>
    						</div>
    					</div>
    					<!-- End Single Blog -->
    					<!-- Single Blog -->
    					<div class="single-blog">
    						<div class="blog-head overlay">
    							<div class="date">
    								<h4>03<span>Jan</span></h4>
    							</div>
    							<img src="/vendor/learnedu/images/blog/blog4.jpg" alt="#">
    						</div>
    						<div class="blog-content">
    							<h4 class="blog-title"><a href="blog-single.html">Our Student Have sit amet egestas</a></h4>
    							<div class="blog-info">
    								<a href="#"><i class="fa fa-user"></i>By: Admin</a>
    								<a href="#"><i class="fa fa-list"></i>Learning</a>
    								<a href="#"><i class="fa fa-heart-o"></i>53K</a>
    							</div>
    							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Et harum quidem rerum facilis est et expedita distinctio</p>
    							<div class="button">
    								<a href="blog-single.html" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
    							</div>
    						</div>
    					</div>
    					<!-- End Single Blog -->
    				</div>
    			</div>
    		</div>
    	</div>
    </section> --}}
    <!--/ End Blogs -->
@endsection

@section('js')
    <script type="text/javascript">
    	$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
		    }
		})
    </script>
@endsection