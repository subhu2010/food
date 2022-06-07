@extends("site.cake.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")



<div class="page-banner">
    <img src="{{ asset('site-assets/cake-images/image/25.png') }}" class="img-fluid" alt="food on ways">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="las la-long-arrow-alt-left"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cake List</li>
        </ol>
    </nav>
</div>

<div class="product-list-section pa-t">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4">
                <div class="product-sidebar" id="sticky-item-sidebar">
                    <div class="sidebar-box location-sidebar">
                        <label class="custom-checkbox">all resturant
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="custom-checkbox">winthin zone
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="sidebar-box sort-popularity">
                        <div class="accordion accordion-flush" id="sortPopularity">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-popularity">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-popularity" aria-expanded="false" aria-controls="flush-popularity">
                                        Sort by Popularity
                                    </button>
                                </h2>
                                <div id="flush-popularity" class="accordion-collapse collapse pt-3" aria-labelledby="flush-popularity" data-bs-parent="#sortPopularity">
                                    <label class="custom-checkbox"> popular
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom-checkbox"> Newest
                                        <input type="checkbox" checked="">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox"> Oldest
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box sort-price">
                        <div class="accordion accordion-flush" id="sortPrice">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-price">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-price" aria-expanded="false" aria-controls="flush-price">
                                        Sort by Price
                                    </button>
                                </h2>
                                <div id="flush-price" class="accordion-collapse collapse pt-3" aria-labelledby="flush-price" data-bs-parent="#sortPrice">
                                    <label class="custom-checkbox"> high to low
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom-checkbox">low to high
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box sort-cuisines">
                        <h4>Select By cuisines</h4>
                        <label class="custom-checkbox mt-5">asian
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="custom-checkbox">chinese
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="custom-checkbox">Indian
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="custom-checkbox">continental
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="custom-checkbox">other
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="filter-wrapper">
                            <label class="custom-checkbox">thia
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom-checkbox">pizza
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <label class="filter-active">View More</label>
                    </div>
                </div>
            </div>
            <div class="offset-xxl-1 col-xxl-8 col-xl-9 col-lg-8 col-md-8">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="cake-list-card">
                            <div class="cake-list-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/13.png') }}" class="img-fluid" alt="food in ways">
                                </a>
                            </div>
                            <div class="cake-list-content">
                                <h4 class="resto-name" title="Food on Ways Restro">Food on Ways Restro</h4>
                                <p class="address">Happy Birthday Rainbow Cake</p>
                                <div class="icon-star">
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star"></span>
                                    <span class="las la-star"></span>
                                </div>
                                <h6 class="cake-name" title="Toast salat"><a href="{{url('cake-item-detail')}}">Toast salat</a></h6>
                                <p class="open-hrs"><span><i class="las la-clock"></i></span> Open 11 Am - 3 am</p>
                            </div>
                            <div class="cake-list-footer">
                                <div class="duration d-flex align-items-center">
                                    <span> <img src="{{ asset('site-assets/images/delivery-2.svg') }}" class="img-fluid" alt="food on ways"> <i class="las la-angle-right"></i> 30 mins</span>
                                </div>
                                <div class="price">
                                    <span>Rs. 546</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="cake-list-card">
                            <div class="cake-list-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/1.png') }}" class="img-fluid" alt="food in ways">
                                </a>
                            </div>
                            <div class="cake-list-content">
                                <h4 class="resto-name" title="Food on Ways Restro">Food on Ways Restro</h4>
                                <p class="address">Happy Birthday Rainbow Cake</p>
                                <div class="icon-star">
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star"></span>
                                    <span class="las la-star"></span>
                                </div>
                                <h6 class="cake-name" title="Toast salat"><a href="{{url('cake-item-detail')}}">Toast salat</a></h6>
                                <p class="open-hrs"><span><i class="las la-clock"></i></span> Open 11 Am - 3 am</p>
                            </div>
                            <div class="cake-list-footer">
                                <div class="duration d-flex align-items-center">
                                    <span> <img src="{{ asset('site-assets/images/delivery-2.svg') }}" class="img-fluid" alt="food on ways"> <i class="las la-angle-right"></i> 30 mins</span>
                                </div>
                                <div class="price">
                                    <span>Rs. 546</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="cake-list-card">
                            <div class="cake-list-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/2.png') }}" class="img-fluid" alt="food in ways">
                                </a>
                            </div>
                            <div class="cake-list-content">
                                <h4 class="resto-name" title="Food on Ways Restro">Food on Ways Restro</h4>
                                <p class="address">Happy Birthday Rainbow Cake</p>
                                <div class="icon-star">
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star"></span>
                                    <span class="las la-star"></span>
                                </div>
                                <h6 class="cake-name" title="Toast salat"><a href="{{url('cake-item-detail')}}">Toast salat</a></h6>
                                <p class="open-hrs"><span><i class="las la-clock"></i></span> Open 11 Am - 3 am</p>
                            </div>
                            <div class="cake-list-footer">
                                <div class="duration d-flex align-items-center">
                                    <span> <img src="{{ asset('site-assets/images/delivery-2.svg') }}" class="img-fluid" alt="food on ways"> <i class="las la-angle-right"></i> 30 mins</span>
                                </div>
                                <div class="price">
                                    <span>Rs. 546</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="cake-list-card">
                            <div class="cake-list-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/3.png') }}" class="img-fluid" alt="food in ways">
                                </a>
                            </div>
                            <div class="cake-list-content">
                                <h4 class="resto-name" title="Food on Ways Restro">Food on Ways Restro</h4>
                                <p class="address">Happy Birthday Rainbow Cake</p>
                                <div class="icon-star">
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star"></span>
                                    <span class="las la-star"></span>
                                </div>
                                <h6 class="cake-name" title="Toast salat"><a href="{{url('cake-item-detail')}}">Toast salat</a></h6>
                                <p class="open-hrs"><span><i class="las la-clock"></i></span> Open 11 Am - 3 am</p>
                            </div>
                            <div class="cake-list-footer">
                                <div class="duration d-flex align-items-center">
                                    <span> <img src="{{ asset('site-assets/images/delivery-2.svg') }}" class="img-fluid" alt="food on ways"> <i class="las la-angle-right"></i> 30 mins</span>
                                </div>
                                <div class="price">
                                    <span>Rs. 546</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="cake-list-card">
                            <div class="cake-list-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/4.png') }}" class="img-fluid" alt="food in ways">
                                </a>
                            </div>
                            <div class="cake-list-content">
                                <h4 class="resto-name" title="Food on Ways Restro">Food on Ways Restro</h4>
                                <p class="address">Happy Birthday Rainbow Cake</p>
                                <div class="icon-star">
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star"></span>
                                    <span class="las la-star"></span>
                                </div>
                                <h6 class="cake-name" title="Toast salat"><a href="{{url('cake-item-detail')}}">Toast salat</a></h6>
                                <p class="open-hrs"><span><i class="las la-clock"></i></span> Open 11 Am - 3 am</p>
                            </div>
                            <div class="cake-list-footer">
                                <div class="duration d-flex align-items-center">
                                    <span> <img src="{{ asset('site-assets/images/delivery-2.svg') }}" class="img-fluid" alt="food on ways"> <i class="las la-angle-right"></i> 30 mins</span>
                                </div>
                                <div class="price">
                                    <span>Rs. 546</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="cake-list-card">
                            <div class="cake-list-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/5.png') }}" class="img-fluid" alt="food in ways">
                                </a>
                            </div>
                            <div class="cake-list-content">
                                <h4 class="resto-name" title="Food on Ways Restro">Food on Ways Restro</h4>
                                <p class="address">Happy Birthday Rainbow Cake</p>
                                <div class="icon-star">
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star"></span>
                                    <span class="las la-star"></span>
                                </div>
                                <h6 class="cake-name" title="Toast salat"><a href="{{url('cake-item-detail')}}">Toast salat</a></h6>
                                <p class="open-hrs"><span><i class="las la-clock"></i></span> Open 11 Am - 3 am</p>
                            </div>
                            <div class="cake-list-footer">
                                <div class="duration d-flex align-items-center">
                                    <span> <img src="{{ asset('site-assets/images/delivery-2.svg') }}" class="img-fluid" alt="food on ways"> <i class="las la-angle-right"></i> 30 mins</span>
                                </div>
                                <div class="price">
                                    <span>Rs. 546</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="cake-list-card">
                            <div class="cake-list-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/6.png') }}" class="img-fluid" alt="food in ways">
                                </a>
                            </div>
                            <div class="cake-list-content">
                                <h4 class="resto-name" title="Food on Ways Restro">Food on Ways Restro</h4>
                                <p class="address">Happy Birthday Rainbow Cake</p>
                                <div class="icon-star">
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star"></span>
                                    <span class="las la-star"></span>
                                </div>
                                <h6 class="cake-name" title="Toast salat"><a href="{{url('cake-item-detail')}}">Toast salat</a></h6>
                                <p class="open-hrs"><span><i class="las la-clock"></i></span> Open 11 Am - 3 am</p>
                            </div>
                            <div class="cake-list-footer">
                                <div class="duration d-flex align-items-center">
                                    <span> <img src="{{ asset('site-assets/images/delivery-2.svg') }}" class="img-fluid" alt="food on ways"> <i class="las la-angle-right"></i> 30 mins</span>
                                </div>
                                <div class="price">
                                    <span>Rs. 546</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="cake-list-card">
                            <div class="cake-list-img">
                                <a href="{{url('cake-item-detail')}}">
                                    <img src="{{ asset('site-assets/cake-images/image/7.png') }}" class="img-fluid" alt="food in ways">
                                </a>
                            </div>
                            <div class="cake-list-content">
                                <h4 class="resto-name" title="Food on Ways Restro">Food on Ways Restro</h4>
                                <p class="address">Happy Birthday Rainbow Cake</p>
                                <div class="icon-star">
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star checked"></span>
                                    <span class="las la-star"></span>
                                    <span class="las la-star"></span>
                                </div>
                                <h6 class="cake-name" title="Toast salat"><a href="{{url('cake-item-detail')}}">Toast salat</a></h6>
                                <p class="open-hrs"><span><i class="las la-clock"></i></span> Open 11 Am - 3 am</p>
                            </div>
                            <div class="cake-list-footer">
                                <div class="duration d-flex align-items-center">
                                    <span> <img src="{{ asset('site-assets/images/delivery-2.svg') }}" class="img-fluid" alt="food on ways"> <i class="las la-angle-right"></i> 30 mins</span>
                                </div>
                                <div class="price">
                                    <span>Rs. 546</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end pb-5">
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
        <!-- mobile app -->
    </div>
</div>
<div class="mobile-section" id="mobileApp">
    @include('site.includes.mobile-section')
</div>


@endsection


