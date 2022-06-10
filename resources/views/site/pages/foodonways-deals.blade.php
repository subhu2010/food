@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>Foodonways Deals</h1>
    </div>
</section>

<!-- add section -->
<div class="addvertise-section pa-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h3>Foodonways Dealsy</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <img src="{{ asset('site-assets/images/add/add3.png') }}" class="img-fluid" alt="food on ways">
            </div>
            <div class="col-lg-4 col-md-6">
                <img src="{{ asset('site-assets/images/add/add2.png') }}" class="img-fluid" alt="food on ways">
            </div>
        </div>
    </div>
</div>

<div class="category-section deal-tabs pa-tb special-card">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="section-title">
                    <h3>Limited Time Deals</h3>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-deal-1-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-deal-1" type="button" role="tab" aria-controls="pills-deal-1"
                    aria-selected="true">Deal No 1</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-deal-2-tab" data-bs-toggle="pill" data-bs-target="#pills-deal-2"
                    type="button" role="tab" aria-controls="pills-deal-2" aria-selected="false">Deal No 2</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-deal-1" role="tabpanel" aria-labelledby="pills-deal-1-tab">
                <div class="row g-0 g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/1.jpg') }}" class="img-fluid"
                                        alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <div class="menu-card-label non-label">
                                        <span></span>
                                    </div>
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">
                                        omelette</h5>
                                    <p class="menu-card-text">remaining essentially remaining rema essentially
                                        remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart btn" data-bs-toggle="modal"
                                            data-bs-target="#addon">
                                            add +
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
                                    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid"
                                        alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <div class="menu-card-label non-label">
                                        <span></span>
                                    </div>
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">
                                        Chicken MOMO</h5>
                                    <p class="menu-card-text">remaining essentially remaining rema essentially
                                        remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart btn" data-bs-toggle="modal"
                                            data-bs-target="#addon">
                                            add +
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
                                    <img src="{{ asset('site-assets/images/2.jpg') }}" class="img-fluid"
                                        alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <div class="menu-card-label veg-label">
                                        <span></span>
                                    </div>
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">
                                        omelette</h5>
                                    <p class="menu-card-text">remaining essentially remaining rema essentially
                                        remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart btn" data-bs-toggle="modal"
                                            data-bs-target="#addon">
                                            add +
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
                                    <img src="{{ asset('site-assets/images/4.jpg') }}" class="img-fluid"
                                        alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <div class="menu-card-label non-label">
                                        <span></span>
                                    </div>
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">
                                        Noddles</h5>
                                    <p class="menu-card-text">remaining essentially remaining rema essentially
                                        remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart btn" data-bs-toggle="modal"
                                            data-bs-target="#addon">
                                            add +
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
                                    <img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid"
                                        alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <div class="menu-card-label veg-label">
                                        <span></span>
                                    </div>
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">
                                        omelette</h5>
                                    <p class="menu-card-text">remaining essentially remaining rema essentially
                                        remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart btn" data-bs-toggle="modal"
                                            data-bs-target="#addon">
                                            add +
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
                                    <img src="{{ asset('site-assets/images/6.jpg') }}" class="img-fluid"
                                        alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <div class="menu-card-label veg-label">
                                        <span></span>
                                    </div>
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">
                                        Samosa</h5>
                                    <p class="menu-card-text">remaining essentially remaining rema essentially
                                        remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart btn" data-bs-toggle="modal"
                                            data-bs-target="#addon">
                                            add +
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-deal-2" role="tabpanel" aria-labelledby="pills-deal-2-tab">
                <div class="row g-0 g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card-two">
                            <a href="{{ url('item-detail') }}">
                                <div class="menu-card-img">
                                    <img src="{{ asset('site-assets/images/1.jpg') }}" class="img-fluid"
                                        alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <div class="menu-card-label non-label">
                                        <span></span>
                                    </div>
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">
                                        omelette</h5>
                                    <p class="menu-card-text">remaining essentially remaining rema essentially
                                        remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart btn" data-bs-toggle="modal"
                                            data-bs-target="#addon">
                                            add +
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
                                    <img src="{{ asset('site-assets/images/4.jpg') }}" class="img-fluid"
                                        alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <div class="menu-card-label non-label">
                                        <span></span>
                                    </div>
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">
                                        Noddles</h5>
                                    <p class="menu-card-text">remaining essentially remaining rema essentially
                                        remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart btn" data-bs-toggle="modal"
                                            data-bs-target="#addon">
                                            add +
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
                                    <img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid"
                                        alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <div class="menu-card-label veg-label">
                                        <span></span>
                                    </div>
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">
                                        omelette</h5>
                                    <p class="menu-card-text">remaining essentially remaining rema essentially
                                        remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart btn" data-bs-toggle="modal"
                                            data-bs-target="#addon">
                                            add +
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
                                    <img src="{{ asset('site-assets/images/6.jpg') }}" class="img-fluid"
                                        alt="food on ways">
                                </div>
                                <div class="menu-card-content">
                                    <div class="menu-card-label veg-label">
                                        <span></span>
                                    </div>
                                    <h5 class="menu-card-title fw-700" title="remaining essentially remaining">
                                        Samosa</h5>
                                    <p class="menu-card-text">remaining essentially remaining rema essentially
                                        remaining</p>
                                    <div class="menu-card-meta flex-center">
                                        <span class="price">Rs. 569</span>
                                        <a href="#" class="selling-card-cart btn" data-bs-toggle="modal"
                                            data-bs-target="#addon">
                                            add +
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
</div>


@endsection