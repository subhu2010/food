@extends('site.layouts.layout')

@section("page_title", "My Reviews")

@section('content')

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid" style="height: 50vh;">
    <div class="banner-content">
        <h1>User Review</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex align-items-center justify-content-center">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('user.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Review</li>
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
                        <h4 class="user-dashboard-title fw-700 mb-3">My Review</h4>
                        <div class="user-review bs-space mb-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="user-review-card">
                                        <div class="product-feedback">
                                            <div class="product-feedback-head">
                                                <div class="feedback-avatar">
                                                    <img src="{{ asset('site-assets/images/1.jpg') }}" class="img-fluid" alt="food on ways">
                                                </div>
                                                <div class="product-feedback-content">
                                                    <div class="feedback-user">
                                                        <h5>Combo family pack</h5>
                                                        <div class="icon-star">
                                                            <span class="las la-star checked"></span>
                                                            <span class="las la-star checked"></span>
                                                            <span class="las la-star checked"></span>
                                                            <span class="las la-star"></span>
                                                            <span class="las la-star"></span>
                                                            <span class="rating-num">(3)</span>
                                                        </div>
                                                    </div>
                                                    <div class="feedback-comment">
                                                        <p>Survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recent</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>        
                                <div class="col-lg-6">
                                    <div class="user-review-card">
                                        <div class="product-feedback">
                                            <div class="product-feedback-head">
                                                <div class="feedback-avatar">
                                                    <img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid" alt="food on ways">
                                                </div>
                                                <div class="product-feedback-content">
                                                    <div class="feedback-user">
                                                        <h5>Combo family pack</h5>
                                                        <div class="icon-star">
                                                            <span class="las la-star checked"></span>
                                                            <span class="las la-star checked"></span>
                                                            <span class="las la-star checked"></span>
                                                            <span class="las la-star"></span>
                                                            <span class="las la-star"></span>
                                                            <span class="rating-num">(3)</span>
                                                        </div>
                                                    </div>
                                                    <div class="feedback-comment">
                                                        <p>Survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recent</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <nav aria-label="Page navigation mt-5">
                            <ul class="pagination justify-content-end">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">....</a></li>
                                <li class="page-item"><a class="page-link" href="#">10</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection