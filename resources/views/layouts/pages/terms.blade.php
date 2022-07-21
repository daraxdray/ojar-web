@extends('layouts.landing')
@section('title', __('Terms & Condition'))
@section('content')


<!-- breadcrumb area start -->
<div class="breadcrumb-area breadcrumb-g extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h1 class="page-title">Terms and Condition</h1>
                    <ul class="page-navigation">
                        <!-- <li><a href="#"> Home</a></li>
                        <li>Blog Details</li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<div class="page-content-area padding-top-120 padding-bottom-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                    <div class="single-post-details-item"><!-- blog single content -->
                        <div class="thumb">
                            <img src="assets/img/blog/blog-details.jpg" alt=" image">
                        </div>
                        <div class="entry-content">
                            <ul class="post-meta">
                                <!-- <li><a href="#"><i class="far fa-calendar-alt"></i> 12-01-2019</a></li>
                                <li><a href="#"><i class="far fa-user"></i> Admin</a></li>
                                <li class="cat"><i class="fas fa-tags"></i> <a href="#">Lifestyle</a> <a href="#">Travel</a><a href="#">Music</a></li> -->
                            </ul>
                            {!! setting('terms', "") !!}

                        </div>
                       
                    </div> 
            </div>
            <div class="col-lg-4">
                    <div class="sidebar widget-area"><!-- widget area -->
                    
                    </div>
            </div>
        </div>
    </div>
</div>


@endsection
