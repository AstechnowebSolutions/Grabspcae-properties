
<header class="home-2 header">
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{url('')}}">
                        <img src="{{asset('frontend/assets/img/logo/logo_1.png')}}" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="{{url('')}}" data-bs-toggle="dropdown">Home</a>
                            </li>
                           
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="{{url('/services')}}">Services</a></li>
                                    <li><a class="dropdown-item" href="service-single.html">Service Single</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About Us</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="{{url('/about')}}">About Us</a></li>
                                    <li><a class="dropdown-item" href='{{url("team")}}'>Team Members</a></li>
                                    <li><a class="dropdown-item" href="{{url('/gallery')}}">Gallery</a></li>
                                    <li><a class="dropdown-item" href='{{url("/faq")}}'>Faq</a></li>
                                    
                                    
                                </ul>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href='{{url("/event")}}' data-bs-toggle="dropdown">Event</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/blog')}}" >Blog</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                        <div class="header-nav-right">
 
                                @if (Route::has('login'))
                                    <div class="header-btn">  
                                        @auth
                                                <a href="{{ url('/dashboard') }}" class="theme-btn">Dashboard<i class="fa fa-arrow-right"></i></a>
                                            @else
                                                <a href="{{ route('login') }}" class="theme-btn">Log in<i class="fa fa-arrow-right"></i></a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="theme-btn">Register<i class="fa fa-arrow-right"></i></a>
                                                @endif
                                        @endauth
                                    </div>
                                @endif
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
</header>