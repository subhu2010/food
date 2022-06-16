@extends('site.layouts.layout')

@section("page_title", "User Dashboard")


@section('content')

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid" style="height: 50vh;">
    <div class="banner-content">
        <h1>User DAshboard</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex align-items-center justify-content-center">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
</section>

<div class="container">
    <div class="dashboard-section">
        <div class="dashboard-section-space">
            <div class="row g-0">
                <div class="col-lg-3 col-md-3">
                    
                	@include('user.includes.side-bar')

                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="user-dash-content">
                        <div class="user-desc-section">
                            <div class="row ">
                                <div class="col-lg-7">
                                    <div class="user-desc bs-space">
                                        <h5 class="user-name">{{ ucwords(auth()->user('web')->name) }}</h5>
                                        <p class="user-bio">{{ auth()->user('web')->bio }}</p>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="user-avatar-section bs-space d-flex">
                                        <div class="user-avatar me-2 text-center">
                                            @php
                                                $profile = auth()->user('web')->profile_photo;
                                                $profile = !empty($profile) ? $profile : "default-profile.jpg";
                                            @endphp
                                            <img src="{{ asset('uploads/profiles/users/'.$profile) }}" 
                                                class="img-fluid" alt="food on ways">
                                        </div>
                                        <div class="user-avatar-dtl">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3 fw-700">Name : </td>
                                                        <td class="col">{{ ucwords(auth()->user('web')->name) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3 fw-700">Email :</td>
                                                        <td class="col">{{ ucwords(auth()->user('web')->email) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3 fw-700">Phone :</td>
                                                        <td class="col">{{ ucwords(auth()->user('web')->contact_number) }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <ul class="user-social">
                                                <li>
                                                    <a href="{{ auth()->user('web')->facebook }}" class="flex-center" target="_blank">
                                                    	<i class="lab la-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ auth()->user('web')->twitter }}" class="flex-center" target="_blank">
                                                    	<i class="lab la-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ auth()->user('web')->instagram }}" class="flex-center" target="_blank">
                                                    	<i class="lab la-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ auth()->user('web')->youtube }}" class="flex-center" target="_blank">
                                                    	<i class="lab la-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-order bs-space deliver-process">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-4">
                                    <div class="delivery-process-img">
                                        <img src="{{ asset('site-assets/images/Chef-bro.svg') }}" class="img-fluid" alt="food on ways">
                                    </div>
                                    <h3 class="delivery-process-title">Food cooking</h3>
                                </div>
                                <div class="col-md-4">
                                    <div class="delivery-process-img">
                                        <img src="{{ asset('site-assets/images/order-delivery.jpg') }}" class="img-fluid" alt="food on ways">
                                    </div>
                                    <h3 class="delivery-process-title">Food is on way to delivery</h3>
                                </div>
                                <div class="col-md-4">
                                    <div class="delivery-process-img">
                                        <img src="{{ asset('site-assets/images/door-delivery.svg') }}" class="img-fluid" alt="food on ways">
                                    </div>
                                    <h3 class="delivery-process-title">Food is on your destination</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="user-overview">
                                    <div class="row mb-3">
                                        <div class="col-lg-3">
                                            <h4 class="user-dashboard-title fw-700">Overview</h4>
                                        </div>
                                        <div class="col-lg-9"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="user-overview-card bs-space text-center">
                                                <h5 class="fw-700">total orders</h5>
                                                <h2 class="user-total-count">350</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="user-overview-card bs-space text-center">
                                                <h5 class="fw-700">total returns</h5>
                                                <h2 class="user-total-count">50</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="user-overview-card bs-space text-center">
                                                <h5 class="fw-700">total cancellation</h5>
                                                <h2 class="user-total-count">30</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="user-overview-card bs-space text-center">
                                                <h5 class="fw-700">total wishlist</h5>
                                                <h2 class="user-total-count">20</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <h4 class="user-dashboard-title fw-700">Live Video</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bs-space">
                                            <div class="video-content" style="padding: 0;background: none;height: 265px;">
                                                <video controls autoplay>
                                                	<source src="{{ asset('site-assets/images/1.mp4') }}" autoplay type="video/mp4"> 
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-review">
                            <div class="row mb-3 align-items-center">
                                <div class="col-3">
                                    <h4 class="user-dashboard-title fw-700"><i class="las la-list-alt"></i> Review</h4>
                                </div>
                                <div class="col-9">
                                    <a href="#" class="view-all">View All</a>
                                </div>
                            </div>
                            <div class="review-list bs-space">
                                <ol>
                                    <li>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </li>
                                    <li>
                                        <p>Suspendisse a arcu id arcu porta facilisis.</p>
                                    </li>
                                    <li>
                                        <p>Nam vitae nunc nec erat sollicitudin iaculis iaculis vel dui.</p>
                                    </li>
                                    <li>
                                        <p>Curabitur malesuada arcu vitae nunc aliquam lobortis.</p>
                                    </li>
                                    <li>
                                        <p>Maecenas vitae sapien euismod, pellentesque ante vitae, scelerisque nisi.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection