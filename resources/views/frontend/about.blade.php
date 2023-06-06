@extends('frontend.master')

@section('main')
 <!-- breadcrumb -->
 <div class="site-breadcrumb">
            <div class="site-breadcrumb-wrapper" style="background: url('frontend/assets/img/breadcrumb/bread_crum.png')">
                <div class="container">
                    <h2 class="breadcrumb-title">About Us</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{url('/')}}"><i class="far fa-home"></i> Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- about area -->
        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left">
                            <div class="about-img">
                                <img src="{{asset('frontend/assets/img/workspace/conference room.png')}}" alt="">
                            </div>
                            <div class="about-experience">
                                <h1>25 <span>+</span></h1>
                                <span class="about-experience-text">Years Experience</span>
                            </div>
                            <div class="about-shape">
                                <img src="{{asset('frontend/assets/img/about/shape.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><h2>Welcome to Grab Space<h2></span>
                                <hr>
                            </div>
                        <ul type="disc">
                            <li>
                                <p class="about-text">A Premium coworking space in Gwalior designed to foster
                                    collaboration and provide a productive environment for individuals and businesses. With a wide range
                                    of workspace options and state-of-the-art facilities, we are committed to supporting your professional
                                    growth and success.
                                </p>
                            </li>
                            <li>
                                <p class="about-text">
                                    We provide a vibrant and cooperative atmosphere for both individuals and established 
                                    enterprises. Whether you're a team member, a freelancer, or an entrepreneur, we offer the ideal workplace
                                    for you.
                                </p>
                            </li>
                            <li>
                               <p class="about-text">
                                    At Grab Space, we acknowledge the value of flexibility in the current fast-paced corporate
                                    environment. To meet your unique demands, we provide a variety of choices. Our Dedicated Chairs are
                                    available for your exclusive usage if you need a more focused arrangement.
                                </p>

                            </li>
                        </ul>
                              
                            

                                                      
                           <br>
                            <a href="{{url('/about')}}" class="theme-btn">Discover More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->

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

        <!-- testimonial-area -->
        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title">Our <span>Mission</span></h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    
                    <div class="testimonial-item">
                        <div class="">
                                <center><h4> Flexibility and Choice</h4></center>
                                <hr>
                        </div>
                            <p>
                                We provide a variety of flexible workspace solutions because we understand the various demands of 
                                individuals and enterprises. Whether you want a shared open space, a dedicated desk, a private cabin, 
                                or a fully customized office, we have a solution that meets your needs.  
                            </p>
                    </div>
                    <div class="testimonial-item">
                        <div class="">
                                    <center><h4>Community and Collaboration</h4></center>
                                    <hr>
                        </div>
                            <p>
                                We believe that collaboration is the key to innovation and growth. We encourage networking, knowledge 
                                exchange, and collaboration among our members in order to promote a feeling of community. We encourage
                                collaboration by facilitating connections through events, workshops, and networking opportunities. 
                            </p>
                    </div>     
                    <div class="testimonial-item">
                        <div class="">
                                    <center><h4>Exceptional Services</h4></center>
                                    <hr>
                        </div>
                            <p>
                                We are dedicated to providing top-notch services that improve the office environment. We also make sure
                                that our members have access to all of the resources they need to operate successfully and efficiently,
                                including cutting-edge technology and cutting-edge facilities.
                            </p>
                    </div>
                    <div class="testimonial-item">
                        <div class="">
                            <center><h4>Empowering Success</h4></center>
                            <hr>
                        </div>
                        <p>
                            We believe in helping our members to attain their best potential and achieve their goals.
                            We seek to create an atmosphere where individuals and businesses may thrive by offering a
                            well-equipped workspace and great services.
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <div class="">
                            <center><h4>Supportive Community</h4></center>
                            <hr>
                        </div>
                            <p>
                               We believe in the power of a supportive community. We provide an inclusive environment where members 
                               may interact, work together, and help one another. Our social gatherings, mentoring initiatives, and
                               coworking areas foster connection and foster a feeling of community.
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial-area end -->

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
        
        <!-- choose area -->
        <div class="choose-area pt-50 pb-50">
            <div class="choose-img"></div>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-6 choose-right">
                        <div class="choose-right-content">
                            <div class="site-heading mb-3">
                                <h2 class="site-title my-3 text-white">Innovative <span>Coworking Workspace</span> Experience</h2>
                            </div>
                            <span class="site-title-tagline">Robotics Pods</span>
                            <p class="about-text">At Grab Space, we are committed to sustainability. Our Green Meeting Room is an 
                                eco-friendly space designed with sustainable materials and practices in mind. This room is perfect
                                for environmentally conscious individuals and organizations who want to minimize their carbon 
                                footprint while conducting productive meetings.
                            </p>
                            <div class="row">
                                 <span class="site-title-tagline">Location</span>
                                     <p class="about-text">
                                            You can find us conveniently located on the 4th Floor of Rolex Tower, near the Airtel Office,
                                            in the heart of Gwalior City Centre, MP.
                                     </p>
                                 <div class="col-md-6">
                                    <div class="contact-content">

                                                <div class="contact-info">
                                                    <div class="contact-info-icon">
                                                              <i class="fal fa-phone"></i>
                                                    </div>
                                                       <div class="contact-about">
                                                            <h5>Call Us</h5>
                                                            <p><a href="tel:+917909715000">+91 7909715000</a></p>
                                                       </div>
                                                </div>
                                                <div class="contact-info">
                                                    <div class="contact-info-icon">
                                                        <i class="fal fa-envelope"></i>
                                                    </div>
                                                    <div class="contact-about">
                                                        <h5>Email Us</h5>
                                                        <p><a href="mailto:grabspaceproperties@gmail.com">grabspaceproperties@gmail.com</a></p>
                                                    </div>
                                               </div>
                                               <div class="contact-info">
                                                    <div class="contact-info-icon">
                                                        <i class="fal fa-clock"></i>
                                                    </div>
                                                    <div class="contact-about">
                                                        <h5>Office Open</h5>
                                                        <p>Mon - Sun (08AM - 10PM)</p>
                                                    </div>
                                               </div>
                                    </div> 
                                 </div>
                                 <div class="col-md-6">
                                    <div class="contact-content">
                                        
                                        <div class="contact-info">
                                            <div class="contact-info-icon">
                                                <i class="fal fa-map-marker-alt"></i>
                                            </div>
                                            <div class="contact-about">
                                                <h5>Office Address</h5>
                                                <p>4<sup>th</sup> Floor Rolex Square Tower, City Center, Gwalior, Madhya Pradesh, 474011</p>
                                            </div>
                                        </div>
                                        <div class="contact-info">
                                            <div class="contact-about">
                                                <h5>Join Us</h5>
                                                <p>4<sup>th</sup> Floor Rolex Square Tower, City Center, Gwalior, Madhya Pradesh, 474011</p>
                                            </div>
                                        </div>

                                    </div>
                                 </div>
                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- choose area end -->

                    
        <!-- team-area -->
        <div class="team-area pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Team</span>
                            <h2 class="site-title">Meet <span>Experts</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <img src="{{asset('frontend/assets/img/team/01.jpg')}}" alt="thumb">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Malissa Fierro</a></h5>
                                    <span>Manager</span>
                                </div>
                                <a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <img src="{{asset('frontend/assets/img/team/02.jpg')}}" alt="thumb">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Arron Rodri</a></h5>
                                    <span>Manager</span>
                                </div>
                                <a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item active">
                            <img src="{{asset('frontend/assets/img/team/03.jpg')}}" alt="thumb">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Chad Smith</a></h5>
                                    <span>Manager</span>
                                </div>
                                <a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <img src="{{asset('frontend/assets/img/team/04.jpg')}}" alt="thumb">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Tony Pinto</a></h5>
                                    <span>Manager</span>
                                </div>
                                <a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team-area end -->

        <!-- partner area -->
        <div class="partner-area pt-70 pb-70">
            <div class="container">
                <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                    <img src="{{asset('frontend/assets/img/partner/01.jpg')}}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/02.jpg')}}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/03.jpg')}}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/04.jpg')}}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/01.jpg')}}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/02.jpg')}}" alt="thumb">
                    <img src="{{asset('frontend/assets/img/partner/03.jpg')}}" alt="thumb">
                </div>
            </div>
        </div>
        <!-- partner area end -->




@endsection