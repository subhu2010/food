@extends('site.layouts.layout')

@section("page_title", "My Wishlist")

@section('content')

<div class="dashboard-section">
    <div class="dashboard-section-space">
        <div class="row g-0">
            <div class="col-lg-3 col-md-3">
                
                @include('user.includes.side-bar')

            </div>
            <div class="col-lg-9 col-md-9">
                <div class="user-dash-content">
                    <div class="user-wishlist bs-space mb-5">
                        <div class="flex-center justify-content-between mb-4">
                            <h4 class="user-dashboard-title fw-700">My Wishlist</h4>
                            <div class="default-btn">
                                <a href="#" class="btn btn-more"><i class="far fa-plus-square"></i>  add all to cart</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="menu-card-two">
                                    <a href="product-detail.php">
                                        <div class="menu-card-img">
                                            <img src="{{ asset('site-assets/images/2.jpg') }}" class="img-fluid" alt="food on ways">
                                        </div>
                                        <div class="menu-card-content">
                                            <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                            <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                            <div class="menu-card-meta flex-center">
                                                <span class="price">Rs. 569</span>
                                                <div class="card-icon d-flex">
                                                    <a href="#" class="selling-card-cart me-3">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                    <a href="#" class="selling-card-cart">
                                                        <i class="las la-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-card-two">
                                    <a href="product-detail.php">
                                        <div class="menu-card-img">
                                            <img src="{{ asset('site-assets/images/2.jpg') }}" class="img-fluid" alt="food on ways">
                                        </div>
                                        <div class="menu-card-content">
                                            <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                            <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                            <div class="menu-card-meta flex-center">
                                                <span class="price">Rs. 569</span>
                                                <div class="card-icon d-flex">
                                                    <a href="#" class="selling-card-cart me-3">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                    <a href="#" class="selling-card-cart">
                                                        <i class="las la-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-card-two">
                                    <a href="product-detail.php">
                                        <div class="menu-card-img">
                                            <img src="{{ asset('site-assets/images/2.jpg') }}" class="img-fluid" alt="food on ways">
                                        </div>
                                        <div class="menu-card-content">
                                            <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                            <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                            <div class="menu-card-meta flex-center">
                                                <span class="price">Rs. 569</span>
                                                <div class="card-icon d-flex">
                                                    <a href="#" class="selling-card-cart me-3">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                    <a href="#" class="selling-card-cart">
                                                        <i class="las la-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="menu-card-two">
                                    <a href="product-detail.php">
                                        <div class="menu-card-img">
                                            <img src="{{ asset('site-assets/images/2.jpg') }}" class="img-fluid" alt="food on ways">
                                        </div>
                                        <div class="menu-card-content">
                                            <h5 class="menu-card-title fw-700" title="remaining essentially remaining">remaining essentially remaining</h5>
                                            <p class="menu-card-text mb-0">remaining essentially remaining rema essentially remaining</p>
                                            <div class="menu-card-meta flex-center">
                                                <span class="price">Rs. 569</span>
                                                <div class="card-icon d-flex">
                                                    <a href="#" class="selling-card-cart me-3">
                                                        <i class="las la-trash"></i>
                                                    </a>
                                                    <a href="#" class="selling-card-cart">
                                                        <i class="las la-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation">
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

@endsection