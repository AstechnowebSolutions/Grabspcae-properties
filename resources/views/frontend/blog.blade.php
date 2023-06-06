@extends('frontend.master')

@section('main')

  <!-- breadcrumb -->
        <div class="site-breadcrumb">
            <div class="site-breadcrumb-wrapper" style="background: url('frontend/assets/img/breadcrumb/bread_crum.png')">
                <div class="container">
                    <h2 class="breadcrumb-title">Our Blog</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{url('/')}}"i class="far fa-home"></i> Home</a></li>
                        <li class="active">Our Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->


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
                                        <a class="theme-btn" href="{{url('/blog-single')}}">Read More <i class="far fa-arrow-right"></i></a>
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
                                        <a class="theme-btn" href="{{url('/blog-single')}}">Read More <i class="far fa-arrow-right"></i></a>
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
                                        <a class="theme-btn" href="{{url('/blog-single')}}">Read More <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- blog-area end -->

                <!-- pagination -->
                <div class="pagination-area">
                    <div aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="far fa-angle-double-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="far fa-angle-double-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
        <!-- blog-area end -->

@endsection