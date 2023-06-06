@extends('frontend.master')

@section('main')
 
@include('frontend.layout.slider')

<!-- about area -->
<div class="about-area py-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-left">
                    <div class="about-img">
                    <video  width="600px" height="500px" src="{{asset('frontend/assets/video/about_grabspace.mp4')}}" controls></video>
                    </div>
                    <div class="about-experience">
                        <h1>2 <span>+</span></h1>
                        <span class="about-experience-text">Years Experience</span>
                    </div>
                    <div class="about-shape">
                        <img src="{{'frontend/assets/img/about/shape.svg'}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline">About Us</span>
                        <h2 class="site-title">
                           Welcome to Grab-The leading <span>Coworking Space in Gwalior</span> for entrepreneurs and professionals.
                        </h2>
                    </div>
                    <p class="about-text">There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form, by injected humour, or
                        randomised words which don't look even.</p>
                    <div class="about-list-wrapper">
                        <ul class="about-list list-unstyled">
                            <li>
                                <div class="icon"><span class="fas fa-check-circle"></span></div>
                                <div class="text">
                                    <p>Take a look at our round up of the best shows</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="fas fa-check-circle"></span></div>
                                <div class="text">
                                    <p>It has survived not only five centuries</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="fas fa-check-circle"></span></div>
                                <div class="text">
                                    <p>Lorem Ipsum has been the ndustry standard dummy text</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="about.html" class="theme-btn">Discover More <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->


<!-- workspace -->
<div class="workspace bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Workspace</span>
                    <h2 class="site-title">Our Modern <span>Office Spaces</span></h2>
                </div>
            </div>
        </div>
        <div class="workspace-slider owl-carousel owl-theme">
            <div class="workspace-item">
                <div class="workspace-img">
                    <img src="{{asset('frontend/assets/img/workspace/04.png')}}" alt="">
                </div>
                <div class="workspace-content">
                    <h4><a href="{{ url('/service')}}">Flexi Desk</a></h4>
                       <p>
                           Our Flexi Desk service is created to match your needs, whether you're a freelancer or an entrepreneur. 
                       </p>
                </div>
            </div>
            <div class="workspace-item">
                <div class="workspace-img">
                    <img src="{{asset('frontend/assets/img/workspace/7.png')}}" alt="">
                </div>
                <div class="workspace-content">
                    <h4><a href="{{ url('/service')}}">Dedicated Desk</a></h4>
                    <p>Our Dedicated Desk is ideal for those who want a permanent workstation.</p>
                </div>
            </div>
            <div class="workspace-item">
                <div class="workspace-img">
                    <img src="{{asset('frontend/assets/img/workspace/8.png')}}" alt="">
                </div>
                <div class="workspace-content">
                    <h4><a href="{{ url('/service')}}">Private Cabins</a></h4>
                    <p>Our Private Cabins Service provides you with a completely enclosed workspace for small teams or individuals</p>
                </div>
            </div>
            <div class="workspace-item">
                <div class="workspace-img">
                    <img src="{{asset('frontend/assets/img/workspace/11.png')}}" alt="">
                </div>
                <div class="workspace-content">
                    <h4><a href="{{ url('/service')}}">Conference Room</a></h4>
                    <p>Grab space offers you the conference/meeting room with a professional and fully equipped space to host meetings.</p>
                </div>
            </div>
            <div class="workspace-item">
                <div class="workspace-img">
                    <img src="{{asset('frontend/assets/img/workspace/5.png')}}" alt="">
                </div>
                <div class="workspace-content">
                    <h4><a href="{{ url('/service')}}">Robotic Pods</a></h4>
                    <p>Our Robotic Pods service offers you a futuristic and cutting-edge workstation for quick meetings or working while sitting down..</p>
                </div>
            </div>
            <div class="workspace-item">
                <div class="workspace-img">
                    <img src="{{asset('frontend/assets/img/workspace/green room.png')}}" alt="">
                </div>
                <div class="workspace-content">
                    <h4><a href="{{ url('/service')}}">Green Meeting Room</a></h4>
                    <p>With the help of our Green Meeting Room service, you may hold meetings, presentations, and seminars in a green environment.</p>
                </div>
            </div>
            <div class="workspace-item">
                <div class="workspace-img">
                    <img src="{{asset('frontend/assets/img/workspace/5.png')}}" alt="">
                </div>
                <div class="workspace-content">
                    <h4><a href="{{ url('/service')}}">Event/Seminar Hall</a></h4>
                    <p>Grab Space offers an Event/Seminar Hall with a spacious and fully equipped space to host sizable events, seminars, workshops</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- workspace end -->

<!-- counter area -->
<div class="counter-area" style="background-image: url(frontend/assets/img/slider/slider-4.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon"><i class="flaticon-university"></i></div>
                    <span class="counter" data-count="+" data-to="100" data-speed="3000">100</span>
                    <h6 class="title">+ Happy Clients</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon"><i class="flaticon-work"></i></div>
                    <span class="counter" data-count="+" data-to="25" data-speed="3000">25</span>
                    <h6 class="title">+ Our Staff</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon"><i class="flaticon-layers"></i></div>
                    <span class="counter" data-count="+" data-to="150" data-speed="3000">150</span>
                    <h6 class="title">+ Available Spaces</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon"><i class="flaticon-award"></i></div>
                    <span class="counter" data-count="+" data-to="5" data-speed="3000">5</span>
                    <h6 class="title">+ Win Awards</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter area end -->


<!-- service area -->

<div class="service-area bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Amenities We Offer</span>
                    <h2 class="site-title"><span>Grab Space</span>- A Happy Space To work together</h2>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-university"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Free Water, Coffee, and Tea</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-work"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Fast and Reliable Wifi</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-room"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Computer Equipment</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-location"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Inhouse Cafeteria</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-layers"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Ergonomic Desks and Chairs</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Huge Parking Space</a>
                            </h4>
                            <!---<p class="service-text">
                                There are many variations of passages available but the majority have suffered to
                                the alteration in some form by injected.
                            </p>
                            <div class="service-arrow">
                                <a href="#" class="service-read-btn">Learn More<i
                                        class="far fa-arrow-right"></i></a>
                            </div> -->
                        </div>
                    </div> 
                </div> 
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-university"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Cleaning Services</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-university"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Flexible membership Agreement </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-university"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Printer and Scanner</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-university"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Power Backup</a>
                            </h4>
                        </div>
                    </div>
                </div> 
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-airplane"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">
                                <a href="#">Library </a>
                            </h4>
                        </div>
                    </div>
                </div>   
            </div>
    </div>
</div>

<!-- service area end -->

<!-- gallery area -->
<div class="gallery-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center mb-4">
                    <span class="site-title-tagline">Gallery</span>
                    <h2 class="site-title">Our Photo <span>Gallery</span></h2>
                </div>
            </div>
        </div>
        <div class="filter-controls">
            <ul class="filter-btns">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".cat1">Conference Room</li>
                <li data-filter=".cat2">Dedicated Desk</li>
                <li data-filter=".cat3">Green Room</li>
                <li data-filter=".cat4">Library</li>
                <li data-filter=".cat5">Meeting Place</li>
            </ul>
        </div>
        <div class="row filter-box popup-gallery">
            <div class="col-md-6 col-lg-4 filter-item cat1 ">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/conference room.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/conference room.png')}}"> <i
                                class="far fa-plus"></i></a>
                        <div class="gallery-content-info">
                            <h4><a href="{{url('/gallery')}}">Conference Room</a></h4>
                            <small>Workspace</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item  cat2">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/dedicated desk.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/dedicated desk.png')}}"> <i
                                class="far fa-plus"></i></a>
                        <div class="gallery-content-info">
                            <h4><a href="#">Dedicated desk</a></h4>
                            <small>Workspace</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat3">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/green room.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/green room.png')}}"> <i
                                class="far fa-plus"></i></a>
                        <div class="gallery-content-info">
                            <h4><a href="#">Green Room</a></h4>
                            <small>Workspace</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat2 cat4">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/library.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/library.png')}}"> <i
                                class="far fa-plus"></i></a>
                        <div class="gallery-content-info">
                            <h4><a href="#">Library</a></h4>
                            <small>Workspace</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat1 cat4 cat5">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/meeting place.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/meeting place.png')}}"> <i
                                class="far fa-plus"></i></a>
                        <div class="gallery-content-info">
                            <h4><a href="#">Meeting Place</a></h4>
                            <small>Workspace</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat4 cat3">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/private office.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/private office.png')}}"> <i
                                class="far fa-plus"></i></a>
                        <div class="gallery-content-info">
                            <h4><a href="#">Private Office</a></h4>
                            <small>Workspace</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery area end -->


<!-- choose area -->
<div class="choose-area">
    <div class="container-fluid">
    <br>
        <div class="row">
         
            <div class="col-md-5">
                <div class="container">
                    <div class="choose-right-content">
                        <div class="site-heading mb-3">
                            <h2 class="site-title my-3 text-white">Why Choose <span>Grab Space</span> as Your Coworking Office Space?</h2>
                            <hr class="new5">
                        </div>
                        <p class="about-text">Are you still seeking for the Premium and affordable coworking space in Gwalior? Take a look at Grab 
                                            Space! Our shared workplace is conveniently positioned near youand provides you with everything you
                                            need to be successful in business or fulfill work commitments.</p><br>
                        <p class="about-text">
                                            Our coworking office space in Gwalior is the perfect solution for entrepreneurs, freelancers, and
                                            professionals who want a shared workspace near them. Grab Space is more than just a coworking space 
                                            in Gwalior. We like developing a community of like-minded individuals that support and boost one another up.
                        </p><br>
                        <p class="about-text">
                                            Here are a few factors that may assist you in determining why you should choose Grab Space as our 
                                            coworking office space:
                        </p> 
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="container">
                <div class="choose-right-content">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <i class="flaticon-security"></i>
                                    <div>
                                        <h5>Prime Location</h5>
                                        <p class="about-choose">
                                           Our Coworking Space is Located in theCentre of Gwalior and anyone in the city can easily access our coworking space.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-breakfast"></i>
                                    <div>
                                        <h5>Affordable Pricing</h5>
                                        <p class="about-choose">
                                         We provide flexible membership at affordable rates, making it simple for you to select the plan that best suits your requirements and financial situation.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-shop"></i>
                                    <div>
                                        <h5>Collaborative Community</h5>
                                        <p class="about-choose">
                                           You'll be a part of a thriving community of business people, entrepreneurs, and professionals.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <i class="flaticon-wifi"></i>
                                    <div>
                                        <h5>Flexibility</h5>
                                        <p class="about-choose">
                                            We provide flexible membership choices that may be tailored to match your changing needs since we know that your demands or needs may vary over time.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-layers"></i>
                                    <div>
                                        <h5>Modern Amenities</h5>
                                        <p class="about-choose">
                                             Our Coworking Space is well equipped with modern amenities such as printing services, conference rooms, and a fully-equipped cafeteria.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-parking"></i>
                                    <div>
                                        <h5>24/7 Access</h5>
                                        <p class="about-choose">
                                            It is a long established fact that a reader distracted.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- choose area end -->

<!-- testimonial-area -->
<div class="testimonial-area bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Testimonials</span>
                    <h2 class="site-title">What Client <span>Say's</span></h2>
                </div>
            </div>
        </div>
        <div class="testimonial-slider owl-carousel owl-theme">
            <div class="testimonial-item">
                <div class="testimonial-author-img">
                    <img src="{{asset('frontend/assets/img/testimonial/01.jpg')}}" alt="">
                </div>
                <div class="testimonial-rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>
                    There are many variations of passages available but the majority have suffered
                    alteration in some form by injected.
                </p>
                <div class="testimonial-author-info">
                    <h4>Sylvia H Green</h4>
                    <p>Founder & CEO</p>
                </div>
                <span class="flaticon-left-quote"></span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-author-img">
                    <img src="{{asset('frontend/assets/img/testimonial/02.jpg')}}" alt="">
                </div>
                <div class="testimonial-rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>
                    There are many variations of passages available but the majority have suffered
                    alteration in some form by injected.
                </p>
                <div class="testimonial-author-info">
                    <h4>William Knox</h4>
                    <p>Founder & CEO</p>
                </div>
                <span class="flaticon-left-quote"></span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-author-img">
                    <img src="{{asset('frontend/assets/img/testimonial/03.jpg')}}" alt="">
                </div>
                <div class="testimonial-rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>
                    There are many variations of passages available but the majority have suffered
                    alteration in some form by injected.
                </p>
                <div class="testimonial-author-info">
                    <h4>Eva C. Najar</h4>
                    <p>Founder & CEO</p>
                </div>
                <span class="flaticon-left-quote"></span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-author-img">
                    <img src="{{asset('frontend/assets/img/testimonial/04.jpg')}}" alt="">
                </div>
                <div class="testimonial-rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>
                    There are many variations of passages available but the majority have suffered
                    alteration in some form by injected.
                </p>
                <div class="testimonial-author-info">
                    <h4>Lisa Allen</h4>
                    <p>Founder & CEO</p>
                </div>
                <span class="flaticon-left-quote"></span>
            </div>
        </div>
    </div>
</div>
<!-- testimonial-area end -->



<!-- blog-area -->
<div class="blog-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Our Blog</span>
                    <h2 class="site-title">News & <span> Blog</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="{{asset('frontend/assets/img/workspace/private office.png')}}" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                            <li><a href="#"><i class="far fa-calendar-alt"></i> April 11, 2022</a></li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            <a href="#">
                                     Escape the Traditional Office:
                                     Why Coworking Spaces are the future of work
                            </a>
                        </h4>
                        <p>In this digital era where technology is advancing at such a high rate that it is even difficult for
                           the humans to cope up with this speed and work, Coworking spaces or Alternative office spaces are playing
                           a vital role in the lives of those who are connected to this digitization or corporate sector.... 
                           
                        </p>
                        <a class="theme-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="{{asset('frontend/assets/img/workspace/meeting place.png')}}" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                
                                <li><a href="#"><i class="far fa-calendar-alt"></i> April 11, 2022</a></li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            <a href="#">
                                    8 Reasons Why You Should Choose a Coworking Space
                            </a>
                        </h4>
                        <p>In today's evolving work landscape, coworking spaces have emerged as a revolutionary concept, 
                            reshaping the way people work and collaborate. These shared workspaces, also known as coworking spaces,
                             alternative office spaces,or non-traditional offices, offer a flexible and dynamic environment for 
                             professionals...</p>
                        <a class="theme-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="{{asset('frontend/assets/img/workspace/conference room.png')}}" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-calendar-alt"></i> April 11, 2022</a></li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            <a href="#">What is Coworking Space?
                                        Everything you need to know about coworking spaces.
                            </a>
                        </h4>
                        <p>If you are here then you must be wondering, why am I seeing “what is coworking space” because you must have
                           been looking for something that will help you to boost your efficiency while working in the Work from Home mode,
                           or something that will give you an office like environment while...</p>
                        <a class="theme-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-area end -->
@endsection