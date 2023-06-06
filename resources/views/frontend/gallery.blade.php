@extends('frontend.master')

@section('main')

 <!-- breadcrumb -->
 <div class="site-breadcrumb">
    <div class="site-breadcrumb-wrapper" style="background: url('frontend/assets/img/breadcrumb/bread_crum.png')">
        <div class="container">
            <h2 class="breadcrumb-title">Gallery</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{url('/')}}"><i class="far fa-home"></i> Home</a></li>
                <li class="active">Gallery</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb end -->


<!-- gallery area -->
<div class="gallery-area py-120">
    <div class="container">
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
            <div class="col-md-6 col-lg-4 filter-item cat3">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/1.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/1.png')}}">
                             <i class="far fa-plus"></i></a>
                        <div class="gallery-content-info">
                            <h4><a href="#">Green Room</a></h4>
                            <small>Workspace</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat3">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/2.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/2.png')}}"> <i
                                class="far fa-plus"></i></a>
                        <div class="gallery-content-info">
                            <h4><a href="#">Green Room</a></h4>
                            <small>Workspace</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item  cat2">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/3.png')}}" alt="">
                        </div>
                        <div class="gallery-content">
                            <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/3.png')}}"> <i
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
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/4.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/4.png')}}"> <i
                                class="far fa-plus"></i></a>
                        <div class="gallery-content-info">
                            <h4><a href="#">Green Room</a></h4>
                            <small>Workspace</small>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-6 col-lg-4 filter-item cat3">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/5.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/5.png')}}"> <i
                                class="far fa-plus"></i></a>
                        <div class="gallery-content-info">
                            <h4><a href="#">Green Room</a></h4>
                            <small>Workspace</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 filter-item cat3">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/gallery/6.png')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('frontend/assets/img/gallery/6.png')}}"> <i
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

@endsection
