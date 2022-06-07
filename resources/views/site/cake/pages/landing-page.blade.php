@extends("site.cake.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<!-- main carousel -->
<div class="home-show">
    <div class="home-carousel-banner">
        <div class="owl-carousel owl-theme cake-main-carousel">
            <div class="item">
                <div class="main-carousel-card">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="container">
                                <div class="main-carousel-content">
                                    <h2 class="border-title fw-800">Confectionery & <br> Bakery Shop</h2>
                                    <p>Randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <div class="main-carousel-img">
                                <img src="{{ asset('site-assets/cake-images/image/19.png') }}" class="img-fluid" alt="food on ways">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-carousel-card">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="container">
                                <div class="main-carousel-content">
                                    <h2 class="border-title fw-800">Confectionery & <br> Bakery Shop</h2>
                                    <p>Randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <div class="main-carousel-img">
                                <img src="{{ asset('site-assets/cake-images/image/22.png') }}" class="img-fluid" alt="food on ways">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- types of cake -->
<div class="cake-tab pa-tb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
                <ul class="nav nav-pills cake-tab mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link cake-tab-link active" id="pills-birthday-tab" data-bs-toggle="pill" data-bs-target="#pills-birthday" type="button" role="tab" aria-controls="pills-birthday" aria-selected="true">birthday</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link cake-tab-link" id="pills-anniversary-tab" data-bs-toggle="pill" data-bs-target="#pills-anniversary" type="button" role="tab" aria-controls="pills-anniversary" aria-selected="false">anniversary</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link cake-tab-link" id="pills-farewell-tab" data-bs-toggle="pill" data-bs-target="#pills-farewell" type="button" role="tab" aria-controls="pills-farewell" aria-selected="false">farewell</button>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="default-btn text-md-end mb-4">
                    <a href="{{url('cake-list')}}" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-birthday" role="tabpanel" aria-labelledby="pills-birthday-tab">
                <div class="owl-carousel owl-theme carousel-center-btn cake-carousel">
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/23.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/13.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/21.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/17.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/12.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-anniversary" role="tabpanel" aria-labelledby="pills-anniversary-tab">
                <div class="owl-carousel owl-theme carousel-center-btn cake-carousel">
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/12.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/1.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/2.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/2.jpg') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/12.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-farewell" role="tabpanel" aria-labelledby="pills-farewell-tab">
                <div class="owl-carousel owl-theme carousel-center-btn cake-carousel">
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/13.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/21.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/17.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/23.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/12.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- cake offer -->
<div class="cake-offer-section pa-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="cake-offer-content">
                    <h5 title="Contrary to popular belief">Contrary to popular belief</h5>
                    <p class="">
                        Humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.
                    </p>
                    <img src="{{ asset('site-assets/cake-images/cake-slice.png') }}" class="img-fluid d-none d-lg-block" alt="food on ways">
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    <div class="offset-lg-1 col-lg-7 col-md-12">
                        <h2 class="offer-title">
                            Bakery Collection Starting
                            <br>
                            at Rs 500
                        </h2>
                        <div class="default-btn text-center mt-4">
                            <a href="{{url('cake-list')}}" class="btn btn-more">see all</a>
                        </div>
                    </div> 
                    <div class="col-lg-4 d-none d-lg-block">
                        <img src="{{ asset('site-assets/cake-images/ingredient.png') }}" class="img-fluid img-ingredient" alt="food on ways">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- popular section -->
<div class="popular-section pa-t">
    <div class="container">
        <div class="section-title">
            <h3>Most Popular</h3>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cake-card">
                    <div class="cake-card-img">
                        <a href="{{url('cake-item-detail')}}">
                            <img src="{{ asset('site-assets/cake-images/image/13.png') }}" class="img-fluid" alt="food on ways">
                        </a>
                    </div>
                    <div class="cake-card-wish">
                        <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                    </div>
                    <div class="cake-card-content">
                        <a href="{{url('cake-item-detail')}}">
                            <h4 title="Preptual love Cake">Preptual love Cake</h4>
                            <div class="cake-card-meta flex-center justify-content-between">
                                <div class="card-meta-text">
                                    <span class="price">Rs. 800</span>
                                    <span class="delivery-est">Earliest Delivery: Today</span>
                                </div>
                                <div class="card-meta-cart">
                                    <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cake-card">
                    <div class="cake-card-img">
                        <a href="{{url('cake-item-detail')}}">
                            <img src="{{ asset('site-assets/cake-images/image/6.png') }}" class="img-fluid" alt="food on ways">
                        </a>
                    </div>
                    <div class="cake-card-wish">
                        <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                    </div>
                    <div class="cake-card-content">
                        <a href="{{url('cake-item-detail')}}">
                            <h4 title="Preptual love Cake">Preptual love Cake</h4>
                            <div class="cake-card-meta flex-center justify-content-between">
                                <div class="card-meta-text">
                                    <span class="price">Rs. 800</span>
                                    <span class="delivery-est">Earliest Delivery: Today</span>
                                </div>
                                <div class="card-meta-cart">
                                    <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cake-card">
                    <div class="cake-card-img">
                        <a href="{{url('cake-item-detail')}}">
                            <img src="{{ asset('site-assets/cake-images/image/11.png') }}" class="img-fluid" alt="food on ways">
                        </a>
                    </div>
                    <div class="cake-card-wish">
                        <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                    </div>
                    <div class="cake-card-content">
                        <a href="{{url('cake-item-detail')}}">
                            <h4 title="Preptual love Cake">Preptual love Cake</h4>
                            <div class="cake-card-meta flex-center justify-content-between">
                                <div class="card-meta-text">
                                    <span class="price">Rs. 800</span>
                                    <span class="delivery-est">Earliest Delivery: Today</span>
                                </div>
                                <div class="card-meta-cart">
                                    <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cake-card">
                    <div class="cake-card-img">
                        <a href="{{url('cake-item-detail')}}">
                            <img src="{{ asset('site-assets/cake-images/image/7.png') }}" class="img-fluid" alt="food on ways">
                        </a>
                    </div>
                    <div class="cake-card-wish">
                        <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                    </div>
                    <div class="cake-card-content">
                        <a href="{{url('cake-item-detail')}}">
                            <h4 title="Preptual love Cake">Preptual love Cake</h4>
                            <div class="cake-card-meta flex-center justify-content-between">
                                <div class="card-meta-text">
                                    <span class="price">Rs. 800</span>
                                    <span class="delivery-est">Earliest Delivery: Today</span>
                                </div>
                                <div class="card-meta-cart">
                                    <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cake-card">
                    <div class="cake-card-img">
                        <a href="{{url('cake-item-detail')}}">
                            <img src="{{ asset('site-assets/cake-images/image/12.png') }}" class="img-fluid" alt="food on ways">
                        </a>
                    </div>
                    <div class="cake-card-wish">
                        <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                    </div>
                    <div class="cake-card-content">
                        <a href="{{url('cake-item-detail')}}">
                            <h4 title="Preptual love Cake">Preptual love Cake</h4>
                            <div class="cake-card-meta flex-center justify-content-between">
                                <div class="card-meta-text">
                                    <span class="price">Rs. 800</span>
                                    <span class="delivery-est">Earliest Delivery: Today</span>
                                </div>
                                <div class="card-meta-cart">
                                    <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cake-card">
                    <div class="cake-card-img">
                        <a href="{{url('cake-item-detail')}}">
                            <img src="{{ asset('site-assets/cake-images/image/2.png') }}" class="img-fluid" alt="food on ways">
                        </a>
                    </div>
                    <div class="cake-card-wish">
                        <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                    </div>
                    <div class="cake-card-content">
                        <a href="{{url('cake-item-detail')}}">
                            <h4 title="Preptual love Cake">Preptual love Cake</h4>
                            <div class="cake-card-meta flex-center justify-content-between">
                                <div class="card-meta-text">
                                    <span class="price">Rs. 800</span>
                                    <span class="delivery-est">Earliest Delivery: Today</span>
                                </div>
                                <div class="card-meta-cart">
                                    <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cake-card">
                    <div class="cake-card-img">
                        <a href="{{url('cake-item-detail')}}">
                            <img src="{{ asset('site-assets/cake-images/image/23.png') }}" class="img-fluid" alt="food on ways">
                        </a>
                    </div>
                    <div class="cake-card-wish">
                        <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                    </div>
                    <div class="cake-card-content">
                        <a href="{{url('cake-item-detail')}}">
                            <h4 title="Preptual love Cake">Preptual love Cake</h4>
                            <div class="cake-card-meta flex-center justify-content-between">
                                <div class="card-meta-text">
                                    <span class="price">Rs. 800</span>
                                    <span class="delivery-est">Earliest Delivery: Today</span>
                                </div>
                                <div class="card-meta-cart">
                                    <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="cake-card">
                    <div class="cake-card-img">
                        <a href="{{url('cake-item-detail')}}">
                            <img src="{{ asset('site-assets/cake-images/image/13.png') }}" class="img-fluid" alt="food on ways">
                        </a>
                    </div>
                    <div class="cake-card-wish">
                        <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                    </div>
                    <div class="cake-card-content">
                        <a href="{{url('cake-item-detail')}}">
                            <h4 title="Preptual love Cake">Preptual love Cake</h4>
                            <div class="cake-card-meta flex-center justify-content-between">
                                <div class="card-meta-text">
                                    <span class="price">Rs. 800</span>
                                    <span class="delivery-est">Earliest Delivery: Today</span>
                                </div>
                                <div class="card-meta-cart">
                                    <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about section -->
<div class="about-section pa-tb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div class="cake-about">
                    <h2 class="border-title fw-800">
                        About Food on ways
                        <br>
                        <span>bakery Special</span>
                    </h2>
                    <p class="mb-0">Survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    <div class="default-btn text-center mt-4">
                        <a href="#" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="about-img">
                    <img src="{{ asset('site-assets/cake-images/image/26.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- types of cake -->
<div class="cake-tab pa-tb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
                <ul class="nav nav-pills cake-tab mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link cake-tab-link active" id="pills-birthday-tab" data-bs-toggle="pill" data-bs-target="#pills-birthday" type="button" role="tab" aria-controls="pills-birthday" aria-selected="true">birthday</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link cake-tab-link" id="pills-anniversary-tab" data-bs-toggle="pill" data-bs-target="#pills-anniversary" type="button" role="tab" aria-controls="pills-anniversary" aria-selected="false">anniversary</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link cake-tab-link" id="pills-farewell-tab" data-bs-toggle="pill" data-bs-target="#pills-farewell" type="button" role="tab" aria-controls="pills-farewell" aria-selected="false">farewell</button>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="default-btn text-md-end mb-4">
                    <a href="{{url('cake-list')}}" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-birthday" role="tabpanel" aria-labelledby="pills-birthday-tab">
                <div class="owl-carousel owl-theme carousel-center-btn cake-carousel">
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/23.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/13.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/21.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/17.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/12.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-anniversary" role="tabpanel" aria-labelledby="pills-anniversary-tab">
                <div class="owl-carousel owl-theme carousel-center-btn cake-carousel">
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/12.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/1.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/2.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/2.jpg') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/12.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-farewell" role="tabpanel" aria-labelledby="pills-farewell-tab">
                <div class="owl-carousel owl-theme carousel-center-btn cake-carousel">
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/13.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/21.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/17.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/23.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cake-card">
                            <div class="cake-card-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/12.png') }}" class="img-fluid" alt="food on ways">
                                </a>
                            </div>
                            <div class="cake-card-wish">
                                <a href="#" class="round-icon"><i class="las la-shopping-bag"></i></a>
                            </div>
                            <div class="cake-card-content">
                                <a href="{{url('cake-item-detail')}}">
                                    <h4 title="Preptual love Cake">Preptual love Cake</h4>
                                    <div class="cake-card-meta flex-center justify-content-between">
                                        <div class="card-meta-text">
                                            <span class="price">Rs. 800</span>
                                            <span class="delivery-est">Earliest Delivery: Today</span>
                                        </div>
                                        <div class="card-meta-cart">
                                            <a href="#" class="round-icon"><i class="las la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- menu section -->
<div class="menu-section pa-t">
    <div class="container">
        <div class="section-title">
            <h3>our Menu</h3>
        </div>
        <div class="menu-card-list clearfix">
            <div class="menu-card">
                <div class="menu-card-img">
                    <img src="{{ asset('site-assets/cake-images/image/1.png') }}" class="img-fluid" alt="foon on ways">
                </div>
                <div class="menu-card-title">
                    <h3>wedding cake</h3>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-card-img">
                    <img src="{{ asset('site-assets/cake-images/image/17.png') }}" class="img-fluid" alt="foon on ways">
                </div>
                <div class="menu-card-title">
                    <h3>Birthday cake</h3>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-card-img">
                    <img src="{{ asset('site-assets/cake-images/image/13.png') }}" class="img-fluid" alt="foon on ways">
                </div>
                <div class="menu-card-title">
                    <h3>Anniversery cake</h3>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-card-img">
                    <img src="{{ asset('site-assets/cake-images/2.jpg') }}" class="img-fluid" alt="foon on ways">
                </div>
                <div class="menu-card-title">
                    <h3>Babby shwoer cake</h3>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-card-img">
                    <img src="{{ asset('site-assets/cake-images/image/2.png') }}" class="img-fluid" alt="foon on ways">
                </div>
                <div class="menu-card-title">
                    <h3>farewell cake</h3>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-card-img">
                    <img src="{{ asset('site-assets/cake-images/image/2.png') }}" class="img-fluid" alt="foon on ways">
                </div>
                <div class="menu-card-title">
                    <h3>wedding cake</h3>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-card-img">
                    <img src="{{ asset('site-assets/cake-images/image/23.png') }}" class="img-fluid" alt="foon on ways">
                </div>
                <div class="menu-card-title">
                    <h3>Birthday cake</h3>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-card-img">
                    <img src="{{ asset('site-assets/cake-images/image/21.png') }}" class="img-fluid" alt="foon on ways">
                </div>
                <div class="menu-card-title">
                    <h3>Anniversery cake</h3>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-card-img">
                    <img src="{{ asset('site-assets/cake-images/image/12.png') }}" class="img-fluid" alt="foon on ways">
                </div>
                <div class="menu-card-title">
                    <h3>Babby shwoer cake</h3>
                </div>
            </div>
            <div class="menu-card">
                <div class="menu-card-img">
                    <img src="{{ asset('site-assets/cake-images/image/1.png') }}" class="img-fluid" alt="foon on ways">
                </div>
                <div class="menu-card-title">
                    <h3>farewell cake</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- home policy -->
<div class="home-policies">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="home-policy-card text-center">
                    <div class="policy-card-img mb-3">
                        <img src="{{ asset('site-assets/cake-images/van.png') }}" class="img-fluid" alt="food on ways">
                    </div>
                    <div class="policy-card-title">
                        <h4>3 hour Delivery</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="home-policy-card text-center">
                    <div class="policy-card-img mb-3">
                        <img src="{{ asset('site-assets/cake-images/refund.png') }}" class="img-fluid" alt="food on ways">
                    </div>
                    <div class="policy-card-title">
                        <h4>Instant Refund</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="home-policy-card text-center">
                    <div class="policy-card-img mb-3">
                        <img src="{{ asset('site-assets/cake-images/pan.png') }}" class="img-fluid" alt="food on ways">
                    </div>
                    <div class="policy-card-title">
                        <h4>Freshely Prepared</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="home-policy-card text-center">
                    <div class="policy-card-img mb-3">
                        <img src="{{ asset('site-assets/cake-images/feedback.png') }}" class="img-fluid" alt="food on ways">
                    </div>
                    <div class="policy-card-title">
                        <h4>99.5% Positive Feedback</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- mobile app -->
@include('site.includes.mobile-section')


@endsection


