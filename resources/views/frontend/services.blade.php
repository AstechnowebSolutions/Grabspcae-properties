@extends('frontend.master')

@section('main')

<!-- breadcrumb -->
<div class="site-breadcrumb">
    <div class="site-breadcrumb-wrapper" style="background:url('frontend/assets/img/breadcrumb/bread_crum.png')">
        <div class="container">
            <h2 class="breadcrumb-title">Workspace</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{url('/')}}"><i class="far fa-home"></i> Home</a></li>
                <li class="active">Workspace</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- workspace -->
<div class="workspace py-120">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="workspace-item">
                    <div class="workspace-img">
                        <img src="{{ asset('frontend/assets/img/workspace/1.png')}}" alt="">
                    </div>
                    <div class="workspace-content">
                        <h4><a href="{{url('/service-single')}}">Office Spaces</a></h4>
                        <p>There are many variations of passages available but the majority suffered.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="workspace-item">
                    <div class="workspace-img">
                        <img src="{{asset('frontend/assets/img/workspace/2.png')}}" alt="">
                    </div>
                    <div class="workspace-content">
                        <h4><a href="{{url('/service-single')}}">Co Working</a></h4>
                        <p>There are many variations of passages available but the majority suffered.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="workspace-item">
                    <div class="workspace-img">
                        <img src="{{asset('frontend/assets/img/workspace/3.png')}}" alt="">
                    </div>
                    <div class="workspace-content">
                        <h4><a href="{{url('/service-single')}}">Co Working</a></h4>
                        <p>There are many variations of passages available but the majority suffered.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="workspace-item">
                    <div class="workspace-img">
                        <img src="{{asset('frontend/assets/img/workspace/4.png')}}" alt="">
                    </div>
                    <div class="workspace-content">
                        <h4><a href="{{url('/service-single')}}">Co Working</a></h4>
                        <p>There are many variations of passages available but the majority suffered.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="workspace-item">
                    <div class="workspace-img">
                        <img src="{{asset('frontend/assets/img/workspace/5.png')}}" alt="">
                    </div>
                    <div class="workspace-content">
                        <h4><a href="{{url('/service-single')}}">Co Working</a></h4>
                        <p>There are many variations of passages available but the majority suffered.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="workspace-item">
                    <div class="workspace-img">
                        <img src="{{asset('frontend/assets/img/workspace/6.png')}}" alt="">
                    </div>
                    <div class="workspace-content">
                        <h4><a href="{{url('/service-single')}}">Meeting Room</a></h4>
                        <p>There are many variations of passages available but the majority suffered.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="workspace-item">
                    <div class="workspace-img">
                        <img src="{{asset('frontend/assets/img/workspace/7.png')}}" alt="">
                    </div>
                    <div class="workspace-content">
                        <h4><a href="{{url('/service-single')}}">Conference Room</a></h4>
                        <p>There are many variations of passages available but the majority suffered.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="workspace-item">
                    <div class="workspace-img">
                        <img src="{{asset('frontend/assets/img/workspace/8.png')}}" alt="">
                    </div>
                    <div class="workspace-content">
                        <h4><a href="{{url('/service-single')}}">Customize Space</a></h4>
                        <p>There are many variations of passages available but the majority suffered.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="workspace-item">
                    <div class="workspace-img">
                        <img src="{{asset('frontend/assets/img/workspace/9.png')}}" alt="">
                    </div>
                    <div class="workspace-content">
                        <h4><a href="{{url('/service-single')}}">Private Office</a></h4>
                        <p>There are many variations of passages available but the majority suffered.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- workspace end -->


@endsection