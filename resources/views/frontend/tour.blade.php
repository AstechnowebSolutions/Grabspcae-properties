@extends('frontend.master')

@section('main')
 
  

        <!-- breadcrumb -->
        <div class="site-breadcrumb">
            <div class="site-breadcrumb-wrapper" style="background: url('frontend/assets/img/breadcrumb/bread_crum.png')">
                <div class="container">
                    <h2 class="breadcrumb-title">Take A Tour</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{url('/')}}"><i class="far fa-home"></i> Home</a></li>
                        <li class="active">Take A Tour</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- contact area -->
        <div class="contact-area py-120">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-content">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Office Address</h5>
                                        <p>4<sup>th</sup> Floor Rolex Square Tower, City Center, Gwalior, Madhya Pradesh, 474011</p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Call Us</h5>
                                        <p><a href="tel:+917909715000">+91 7909715000</a></p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Email Us</h5>
                                        <p><a href="mailto:grabspaceproperties@gmail.com">grabspaceproperties@gmail.com</a></p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Office Open</h5>
                                        <p>Mon - Sun (08AM - 10PM)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 align-self-center">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2>Visit GrabSpace</h2>
                                    <p> </p>
                                </div>
                                <form method="post" action="/cospace/assets/php/contact.php" id="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Your Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="5" class="form-control"
                                            placeholder="Write Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn">Send
                                        Message <i class="far fa-paper-plane"></i></button>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success"></div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact area -->






@endsection