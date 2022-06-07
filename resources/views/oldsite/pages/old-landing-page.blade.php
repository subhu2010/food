@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<!-- home main content -->
<div id="main-home-content">
    <div class="home-show">
        <div class="home-banner">
            <div id="homeBanner" class="carousel slide carousel-fade home-show-carousel" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner h-100">
                    <div class="carousel-item active home-banner-img">
                        <img src="{{ asset('site-assets/images/carousel/1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>welcome to foodonways</h3>
                        </div>
                    </div>
                    <div class="carousel-item home-banner-img">
                        <img src="{{ asset('site-assets/images/carousel/2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>welcome to foodonways</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- menu section -->
        <div class="menu-section align-items-center d-flex" style="flex: 1;">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="section-title">
                            <h3>our menu</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="default-btn text-end">
                            <a href="#" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme menu-carousel">
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/1.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Top Picks</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/2.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Momos</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/10.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Sizzler</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/4.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Chicken roast</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/5.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>French fries</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/6.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Mutton Roast</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/11.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Top Picks</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/2.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Momos</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/8.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Mutton Roast</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/10.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Sizzler</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-bg pa-tb">
        <!-- add section -->
        <div class="addvertise-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h3>Food on ways deals of the day</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <img src="{{ asset('site-assets/images/add3.png') }}" class="img-fluid" alt="food on ways">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="{{ asset('site-assets/images/add2.png') }}" class="img-fluid" alt="food on ways">
                    </div>
                </div>
            </div>
        </div>

        <!-- favourite section -->
        <div class="category-section pa-t">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="section-title">
                            <h3>Favourites</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="default-btn text-end">
                            <a href="#" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme favourites-carousel">
                    <div class="item">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/2.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/7.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/6.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- promotion banner -->
    <div class="container">
        <div class="promotion-banner my-2">
            <img src="{{ asset('site-assets/images/Website-Banner1.png') }}">
        </div>
    </div>

    <!-- cake section -->
    <div class="custom-bg pa-tb">
        <div class="category-section">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="section-title">
                            <h3>Cakes</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="default-btn text-end">
                            <a href="#" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme favourites-carousel">
                    <div class="item">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/1.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/4.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/7.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- add section -->
        <div class="addvertise-section pa-t">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h3>Food on ways deals of the day</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <img src="{{ asset('site-assets/images/add3.png') }}" class="img-fluid" alt="food on ways">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="{{ asset('site-assets/images/add2.png') }}" class="img-fluid" alt="food on ways">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- beverage menu section -->
    <div class="beverage-section menu-section pa-tb my-2">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="section-title">
                        <h3>Beverages</h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="default-btn text-end">
                        <a href="#" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme menu-carousel">
                <div class="item">
                    <div class="category-list-card menu-card">
                        <a href="#">
                            <div class="category-card-icon menu-card-img">
                                <img src="{{ asset('site-assets/images/menu/1.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title menu-card-title">
                                <h4>Top Picks</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="category-list-card menu-card">
                        <a href="#">
                            <div class="category-card-icon menu-card-img">
                                <img src="{{ asset('site-assets/images/menu/2.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title menu-card-title">
                                <h4>Momos</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="category-list-card menu-card">
                        <a href="#">
                            <div class="category-card-icon menu-card-img">
                                <img src="{{ asset('site-assets/images/menu/10.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title menu-card-title">
                                <h4>Sizzler</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="category-list-card menu-card">
                        <a href="#">
                            <div class="category-card-icon menu-card-img">
                                <img src="{{ asset('site-assets/images/menu/4.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title menu-card-title">
                                <h4>Chicken roast</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="category-list-card menu-card">
                        <a href="#">
                            <div class="category-card-icon menu-card-img">
                                <img src="{{ asset('site-assets/images/menu/5.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title menu-card-title">
                                <h4>French fries</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="category-list-card menu-card">
                        <a href="#">
                            <div class="category-card-icon menu-card-img">
                                <img src="{{ asset('site-assets/images/menu/6.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title menu-card-title">
                                <h4>Mutton Roast</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="category-list-card menu-card">
                        <a href="#">
                            <div class="category-card-icon menu-card-img">
                                <img src="{{ asset('site-assets/images/menu/8.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title menu-card-title">
                                <h4>Mutton Roast</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="category-list-card menu-card">
                        <a href="#">
                            <div class="category-card-icon menu-card-img">
                                <img src="{{ asset('site-assets/images/menu/10.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title menu-card-title">
                                <h4>Sizzler</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- promotion banner -->
    <div class="container">
        <div class="promotion-banner my-2">
            <img src="{{ asset('site-assets/images/Website-Banner1.png') }}">
        </div>
    </div>

    <!-- special card -->
    <div class="custom-bg pa-tb">
        <div class="category-section special-card">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="section-title">
                            <h3>Foodonways special</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="default-btn text-end">
                            <a href="#" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/1.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">omelette</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">Chicken MOMO</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/2.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">omelette</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/4.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">Noddles</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">omelette</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/6.jpg') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">Samosa</h5>
                                    <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- add section -->
        <div class="addvertise-section pa-t">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h3>Food on ways deals of the day</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <img src="{{ asset('site-assets/images/add3.png') }}" class="img-fluid" alt="food on ways">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img src="{{ asset('site-assets/images/add2.png') }}" class="img-fluid" alt="food on ways">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- our strength -->
    <div class="strength-section collection-section custom-bg pa-t">
        <div class="container">
            <div class="section-title">
                <h3>our strength</h3>
            </div>
            <div class="row">
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/since.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>since 2021</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/hygneic.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>hygenic food</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/kitchen.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>live kitchen</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/surprise.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>surprise food</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/fresh-food.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>fresh food</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/ingredients.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>premium ingredients</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/package.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>premium packaging</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/serve.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>serving happiness</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/fast-delivery.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>mid night delivery</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/delivery.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>express delivery</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/mobile-payment.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>easy payment</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/transaction.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>instant refund</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/feedback.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>99.5% positive feedback</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/protection-mask.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>covid protocal followed</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="category-list-card">
                        <a href="#">
                            <div class="category-card-icon">
                                <img src="{{ asset('site-assets/images/strength/hygneic.png') }}" class="" alt="food on ways">
                            </div>
                            <div class="category-card-title">
                                <h4>hygenic food</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- what we offer -->
    <div class="home-policies ">
        <div class="offer-section" style="z-index: 1;position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="category-list-card offer-card">
                            <a href="#">
                                <div class="category-card-icon offer-card-icon">
                                    <img src="{{ asset('site-assets/images/surprized.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title offer-card-title">
                                    <h4>surprize food</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="category-list-card offer-card">
                            <a href="#">
                                <div class="category-card-icon offer-card-icon">
                                    <img src="{{ asset('site-assets/images/customisedfood.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title offer-card-title">
                                    <h4>customised food</h4>
                                    <p>since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="category-list-card offer-card">
                            <a href="#">
                                <div class="category-card-icon offer-card-icon">
                                    <img src="{{ asset('site-assets/images/commercial.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title offer-card-title">
                                    <h4>commercial order</h4>
                                    <p> but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="category-list-card offer-card">
                            <a href="#">
                                <div class="category-card-icon offer-card-icon">
                                    <img src="{{ asset('site-assets/images/resturant.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title offer-card-title">
                                    <h4>pick form location</h4>
                                    <p>t is a long established fact that a reader will be distracted by the readable content of a page whent.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog -->
    <div class="blog-section custom-bg pa-tb">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="section-title">
                        <h3>Our Blog</h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="default-btn text-end">
                        <a href="#" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="blog-card">
                        <a href="blog-detail.php">
                            <div class="blog-card-img">
                                <img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid" alt="food on ways">
                            </div>
                            <div class="blog-content">
                                <h6>Breakfast</h6>
                                <h5 class="fw-700" title="Tortor posuere ac ut consequat semper viverra nam libero.">Tortor posuere ac ut consequat semper viverra nam libero.</h5>
                                <p>Aliquam vestibulum morbi blandit cursus risus at ultrices mi. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat.</p>
                                <ul class="blog-meta">
                                    <li class="me-0">
                                        <span><i class="las la-user"></i> By</span>
                                        <span><i class="las la-clock"></i> 55 Mins</span>
                                        <span><i class="lar la-heart"></i> 5 Likes</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="blog-card">
                        <a href="blog-detail.php">
                            <div class="blog-card-img">
                                <img src="{{ asset('site-assets/images/2.jpg') }}" class="img-fluid" alt="food on ways">
                            </div>
                            <div class="blog-content">
                                <h6>Breakfast</h6>
                                <h5 class="fw-700" title="Tortor posuere ac ut consequat semper viverra nam libero.">Tortor posuere ac ut consequat semper viverra nam libero.</h5>
                                <p>Aliquam vestibulum morbi blandit cursus risus at ultrices mi. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat.</p>
                                <ul class="blog-meta">
                                    <li class="me-0">
                                        <span><i class="las la-user"></i> By</span>
                                        <span><i class="las la-clock"></i> 55 Mins</span>
                                        <span><i class="lar la-heart"></i> 5 Likes</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="blog-card">
                        <a href="blog-detail.php">
                            <div class="blog-card-img">
                                <img src="{{ asset('site-assets/images/8.jpg') }}" class="img-fluid" alt="food on ways">
                            </div>
                            <div class="blog-content">
                                <h6>Breakfast</h6>
                                <h5 class="fw-700" title="Tortor posuere ac ut consequat semper viverra nam libero.">Tortor posuere ac ut consequat semper viverra nam libero.</h5>
                                <p>Aliquam vestibulum morbi blandit cursus risus at ultrices mi. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum consequat.</p>
                                <ul class="blog-meta">
                                    <li class="me-0">
                                        <span><i class="las la-user"></i> By</span>
                                        <span><i class="las la-clock"></i> 55 Mins</span>
                                        <span><i class="lar la-heart"></i> 5 Likes</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- moto -->
    <div class="moto-section my-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="bg-img"></div>
                </div>
                <div class="col-lg-4">
                    <div class="moto-content py-5">
                        <h4>can't decide?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua</p>
                        <ul>
                            <li>
                                <img src="{{ asset('site-assets/images/strength/fresh-food.png') }}" class="img-fluid" alt="">
                                <span class="text-center">choose bundle</span>
                            </li>
                            <li>
                                <span><i class="las la-angle-right"></i></span>
                            </li>
                            <li>
                                <img src="{{ asset('site-assets/images/strength/fast-delivery.png') }}" class="img-fluid" alt="">
                                <span class="text-center">place order</span>
                            </li>
                            <li>
                                <span><i class="las la-angle-right"></i></span>
                            </li>
                            <li>
                                <img src="{{ asset('site-assets/images/strength/serve.png') }}" class="img-fluid" alt="">
                                <span class="text-center">enjoy & eat</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="moto-content-live py-5">
                        <div class="live-section px-4">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <img src="{{ asset('site-assets/images/menu/9.png') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-7">
                                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="#" class="btn btn-live">Watch live</a>
                            </div>
                            <p class="live-note mt-3">
                                <strong>*Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<div id="surprise-home-content">
    <div class="home-show">
        <div class="home-banner">
            <div id="homeBanner" class="carousel slide carousel-fade home-show-carousel" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner h-100">
                    <div class="carousel-item active home-banner-img">
                        <img src="{{ asset('site-assets/images/carousel/1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>welcome to foodonways</h3>
                        </div>
                    </div>
                    <div class="carousel-item home-banner-img">
                        <img src="{{ asset('site-assets/images/carousel/2.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>welcome to foodonways</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- menu section -->
        <div class="menu-section align-items-center d-flex" style="flex: 2;">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="section-title">
                            <h3>our menu</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="default-btn text-end">
                            <a href="#" class="btn see-btn">see all <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme menu-carousel">
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/1.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Top Picks</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/2.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Momos</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/10.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Sizzler</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/4.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Chicken roast</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/5.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>French fries</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/6.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Mutton Roast</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/11.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Top Picks</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/2.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Momos</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/8.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Mutton Roast</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="category-list-card menu-card">
                            <a href="#">
                                <div class="category-card-icon menu-card-img">
                                    <img src="{{ asset('site-assets/images/menu/10.png') }}" class="" alt="food on ways">
                                </div>
                                <div class="category-card-title menu-card-title">
                                    <h4>Sizzler</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile app -->
@include('site.includes.mobile-section')

<script>
    (function ($) {
        $.fn.spinner = function () {
            this.each(function () {
                var el = $(this);

// add elements
el.wrap('<span class="spinner"></span>');
el.before('<span class="sub">-</span>');
el.after('<span class="add">+</span>');

// substract
el.parent().on('click', '.sub', function () {
    if (el.val() > parseInt(el.attr('min')))
        el.val(function (i, oldval) {
            return --oldval;
        });
});

// increment
el.parent().on('click', '.add', function () {
    if (el.val() < parseInt(el.attr('max')))
        el.val(function (i, oldval) {
            return ++oldval;
        });
});
});
        };
    })(jQuery);

    $('input[type=number]').spinner();
</script>

<script>
    function showDiv() {
        document.getElementById('qty').style.display = "flex";
    }
</script>






@endsection


