<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>GrabSpace</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/favicon.png')}}">

    <!-- css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all-fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

</head>

<body>
@include('frontend.layout.header')

    <main>
        @yield('main')
    </main>
   
@include('frontend.layout.footer') 

   


    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/modernizr.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/counter-up.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>