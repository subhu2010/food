@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>Burger</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('new-listing')}}">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Burger</li>
            </ol>
        </nav>
    </div>
</section>


<section class="product-section-list pt-5">
    <div class="container">
        <button class="btn sticky-filter-btn d-lg-none" onclick="openFiler()"  onclick="closeFiler()">
            <img src="{{ asset('site-assets/images/menu/filter-menu.svg') }}">
        </button>
        <div class="row">
            <div class="col-lg-3 col-md-12 col-md-4">
                <div class="overlay-visit" id="overlaySide" onclick="closeFiler()"></div>
                <div id="mb-view">
                    <div class="mb-content">
                        <div class="mb-header d-lg-none">
                            <h5>Refine match search</h5>
                            <a href="javascript:void(0)" class="closebtn d-lg-none" onclick="closeFiler()">&times;</a>
                        </div>
                        <div id="content-sidebar">
                            <aside id="product-category" class="product-category mb-4">
                                <div class="product-category-header">
                                    <h3>
                                        <span><i class="las la-rocket"></i></span>
                                        Category
                                    </h3>
                                </div>
                                <ul class="product-category-list mt-2">
                                    <li class="category-list">
                                        <a href="#">Asian <span class="count">9</span></a>
                                        <ul class="category-list-child">
                                            <li class="category-list">
                                                <a href="#">Apple dumpling <span class="count">2</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Aloo paratha <span class="count">3</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Breadfruit <span class="count">1</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Egg bhurji <span class="count">6</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Muesli <span class="count">3</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="category-list">
                                        <a href="#">Burger <span class="count">12</span></a>
                                        <ul class="category-list-child">
                                            <li class="category-list">
                                                <a href="#">Cheesy <span class="count">1</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Extra Component <span class="count">3</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Veg <span class="count">5</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="category-list">
                                        <a href="#">Pizza <span class="count">9</span></a>
                                        <ul class="category-list-child">
                                            <li class="category-list">
                                                <a href="#">Cheesy <span class="count">2</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Extra Component <span class="count">1</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="category-list">
                                        <a href="#">Momo <span class="count">10</span></a>
                                    </li>
                                    <li class="category-list">
                                        <a href="#">Chowmine <span class="count">8</span></a>
                                    </li>
                                </ul>
                            </aside>
                            <aside id="product-category" class="product-category mb-4">
                                <div class="product-category-header">
                                    <h3>
                                        <span><i class="las la-rocket"></i></span>
                                        POPULAR PRODUCTS
                                    </h3>
                                </div>
                                <ul class="product-list-widget">
                                    <li>
                                        <a href="javascript:void(0)" class="clearfix">
                                            <img src="{{ asset('site-assets/images/item/3.jpg') }}" alt=""
                                                class="img-fluid">
                                            <div class="popular-product">
                                                <span class="popular-product-title">Pizza Amatriciana</span>
                                                <span class="popular-product-price">Rs 400 - Rs 900</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="clearfix">
                                            <img src="{{ asset('site-assets/images/item/4.jpg') }}" alt=""
                                                class="img-fluid">
                                            <div class="popular-product">
                                                <span class="popular-product-title">Pizza Amatriciana</span>
                                                <span class="popular-product-price">Rs 400 - Rs 900</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-md-8">
                <div class="category-carousel">
                    <div class="owl-carousel owl-theme list-category-slider">
                        <div class="item">
                            <div class="list-category-slide">
                                <div class="list-category-img">
                                    <img src="{{ asset('site-assets/images/menu/1.png') }}" alt="">
                                </div>
                                <h2 class="list-category-name">
                                    burger
                                    <span class="count">9</span>
                                </h2>
                            </div>
                        </div>
                        <div class="item">
                            <div class="list-category-slide">
                                <div class="list-category-img">
                                    <img src="{{ asset('site-assets/images/menu/2.png') }}" alt="">
                                </div>
                                <h2 class="list-category-name">
                                    burger
                                    <span class="count">9</span>
                                </h2>
                            </div>
                        </div>
                        <div class="item">
                            <div class="list-category-slide">
                                <div class="list-category-img">
                                    <img src="{{ asset('site-assets/images/menu/3.png') }}" alt="">
                                </div>
                                <h2 class="list-category-name">
                                    burger
                                    <span class="count">9</span>
                                </h2>
                            </div>
                        </div>
                        <div class="item">
                            <div class="list-category-slide">
                                <div class="list-category-img">
                                    <img src="{{ asset('site-assets/images/menu/4.png') }}" alt="">
                                </div>
                                <h2 class="list-category-name">
                                    burger
                                    <span class="count">9</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix">
                    <div class="change-branch delivery-info">
                        <span class="estimated-time">40 min.</span>
                        <span>
                            <strong>Delivery from:</strong>
                            Worldwide
                        </span>
                        <span>
                            <strong>To:</strong>
                            <span class="full-address">1 Bhattarai Marg, 44600, Kathmandu, Nepal</span>
                            <a href="javascript:" class="button"></a>
                        </span>
                    </div>
                </div>

                <div class="product-list-section">
                    <div class="product-list-box">
                        <div class="product-list-view">
                            <div class="image">
                                <img src="{{ asset('site-assets/images/item/1.jpg') }}" alt="">
                                <span><i class="lar la-heart"></i></span>
                            </div>
                            <div class="product-list-view-summary">
                                <a href="javascript:void(0)" class="title-link">
                                    <span> Bacon Cheeseburger </span>
                                </a>
                                <div class="product-list-desc">
                                    <p>Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with lettuce,
                                        tomato,
                                        house BBQ & ranch.</p>
                                </div>
                                <div class="price-hold">
                                    <span>Rs 500</span>
                                </div>
                            </div>
                            <div class="cart-link">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quickView">
                                    <i class="las la-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-list-box">
                        <div class="product-list-view">
                            <div class="image">
                                <img src="{{ asset('site-assets/images/item/2.jpg') }}" alt="">
                                <span><i class="lar la-heart"></i></span>
                            </div>
                            <div class="product-list-view-summary">
                                <a href="javascript:void(0)" class="title-link">
                                    <span> Bacon Cheeseburger </span>
                                </a>
                                <div class="product-list-desc">
                                    <p>Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with lettuce,
                                        tomato,
                                        house BBQ & ranch.</p>
                                </div>
                                <div class="price-hold">
                                    <span>Rs 500</span>
                                </div>
                            </div>
                            <div class="cart-link">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quickView">
                                    <i class="las la-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-list-box">
                        <div class="product-list-view">
                            <div class="image">
                                <img src="{{ asset('site-assets/images/item/3.jpg') }}" alt="">
                                <span><i class="lar la-heart"></i></span>
                            </div>
                            <div class="product-list-view-summary">
                                <a href="javascript:void(0)" class="title-link">
                                    <span> Pizza Fungi </span>
                                </a>
                                <div class="product-list-desc">
                                    <p>Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with lettuce,
                                        tomato,
                                        house BBQ & ranch.</p>
                                </div>
                                <div class="price-hold">
                                    <span>Rs 500</span>
                                </div>
                                <div class="row variation g-0 g-1">
                                    <div class="col-3">
                                        <span class="variation-label">11"</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label">300gm</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label"><strong>Rs 999</strong></span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label variation-order cart-btn">order</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label">11"</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label">300gm</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label"><strong>Rs 999</strong></span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label variation-order cart-btn">order</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-link">
                                <a href="javascript:void(0)">
                                    <i class="las la-shopping-bag"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="overlayCart" class="overlay-cart">
    <button type="button" class="btn-close" aria-label="Close"></button>
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="overlay-cart-content">
                    <div class="product-section-list clearfix">
                        <div class="change-branch delivery-info">
                            <span class="estimated-time">40 min.</span>
                            <span>
                                <strong>Delivery from:</strong>
                                Worldwide
                            </span>
                            <span>
                                <strong>To:</strong>
                                <span class="full-address">1 Bhattarai Marg, 44600, Kathmandu, Nepal</span>
                                <a href="javascript:" class="button"></a>
                            </span>
                        </div>
                    </div>
                    <div class="product-section-list">
                        <ul class="product-list-widget">
                            <li>
                                <a href="javascript:void(0)" class="clearfix">
                                    <img src="{{ asset('site-assets/images/item/3.jpg') }}" alt="" class="img-fluid">
                                    <div class="popular-product">
                                        <span class="popular-product-title">
                                            Pizza Amatriciana
                                            <i class="las la-trash-alt"></i>
                                        </span>
                                        <span class="popular-product-price">1 * Rs 500</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="clearfix">
                                    <img src="{{ asset('site-assets/images/item/4.jpg') }}" alt="" class="img-fluid">
                                    <div class="popular-product">
                                        <span class="popular-product-title">
                                            Pizza Amatriciana
                                            <i class="las la-trash-alt"></i>
                                        </span>
                                        <span class="popular-product-price">2 * Rs 323</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="clearfix">
                                    <img src="{{ asset('site-assets/images/item/3.jpg') }}" alt="" class="img-fluid">
                                    <div class="popular-product">
                                        <span class="popular-product-title">
                                            Pizza Amatriciana
                                            <i class="las la-trash-alt"></i>
                                        </span>
                                        <span class="popular-product-price">1 * Rs 500</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="clearfix">
                                    <img src="{{ asset('site-assets/images/item/4.jpg') }}" alt="" class="img-fluid">
                                    <div class="popular-product">
                                        <span class="popular-product-title">
                                            Pizza Amatriciana
                                            <i class="las la-trash-alt"></i>
                                        </span>
                                        <span class="popular-product-price">2 * Rs 323</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="clearfix">
                                    <img src="{{ asset('site-assets/images/item/3.jpg') }}" alt="" class="img-fluid">
                                    <div class="popular-product">
                                        <span class="popular-product-title">
                                            Pizza Amatriciana
                                            <i class="las la-trash-alt"></i>
                                        </span>
                                        <span class="popular-product-price">1 * Rs 500</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="clearfix">
                                    <img src="{{ asset('site-assets/images/item/4.jpg') }}" alt="" class="img-fluid">
                                    <div class="popular-product">
                                        <span class="popular-product-title">
                                            Pizza Amatriciana
                                            <i class="las la-trash-alt"></i>
                                        </span>
                                        <span class="popular-product-price">2 * Rs 323</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="product-section-total">
                            <strong>Subtotal : </strong>
                            <strong>Rs 1412</strong>
                        </div>
                        <div class="cart-buttons clearfix">
                            <a href="javascript:(0)" class="btn">view cart</a>
                            <a href="javascript:(0)" class="btn">chechout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade quick-view" id="quickView" tabindex="-1" aria-labelledby="quickViewLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-close">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body items-details container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme quick-view-slide">
                            <div class="item">
                                <img src="{{ asset('site-assets/images/item/1.1.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="{{ asset('site-assets/images/item/1.2.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-summary">
                            <h1 class="heading-title">Bacon Cheeseburger</h1>
                            <div class="short-desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis id ratione ipsum.
                                    Similique ducimus</p>
                                <ul class="item-weight-holder">
                                    <li>
                                        <span class="item-weight">
                                            Serving size:
                                            <span class="item-weight-values">
                                                290 g </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="nutrition-summary">
                                <ul class="nutrition-list">
                                    <li class="nutrition-energy">
                                        <span class="nutrition-list-label">Energy</span>
                                        430 Cal
                                        <span class="nutrition-list-label">DI*</span>
                                        22%
                                    </li>
                                    <li class="nutrition-energy">
                                        <span class="nutrition-list-label">PROTEIN</span>
                                        20 g
                                        <span class="nutrition-list-label">DI*</span>
                                        50%
                                    </li>
                                    <li class="nutrition-energy">
                                        <span class="nutrition-list-label">FAT</span>
                                        10 g
                                        <span class="nutrition-list-label">DI*</span>
                                        15%
                                    </li>
                                    <li class="nutrition-energy">
                                        <span class="nutrition-list-label">SAT FAT</span>
                                        2 g
                                        <span class="nutrition-list-label">DI*</span>
                                        10%
                                    </li>
                                    <li class="nutrition-energy">
                                        <span class="nutrition-list-label">CARBS</span>
                                        10 Cal
                                        <span class="nutrition-list-label">DI*</span>
                                        3%
                                    </li>
                                </ul>
                                <span class="nutrition-di">*DI: Recommended Daily Intake based on 2000 calories
                                    diet</span>
                                <span class="nutrition-allergens fw-600">Allergens: Milk, Eggs, Soy, Glutten</span>
                            </div>
                            <div class="icon-star">
                                <span class="las la-star checked"></span>
                                <span class="las la-star checked"></span>
                                <span class="las la-star checked"></span>
                                <span class="las la-star"></span>
                                <span class="las la-star"></span>
                            </div>
                            <p class="price my-4">
                                Rs 800
                            </p>
                            <div class="product-addon">
                                <h3 class="addon-name">*NEW: Negative Add-ons </h3>
                                <div class="addon-description">
                                    <p>Helpful when you want to remove ingredients and decrease the product price.</p>
                                </div>
                                <p class="checkbox">
                                    <input type="checkbox" class="show-total" id="1" name="1" value="">
                                    <label class="show-total" for="1" class="fw-700"> NO ONION (–Rs 50)</label><br>
                                </p>
                                <p class="checkbox">
                                    <input type="checkbox" class="show-total" id="2" name="2" value="">
                                    <label class="show-total" for="2" class="fw-700">NO MUSTARD (–Rs 40)</label><br>
                                </p>
                                <p class="checkbox">
                                    <input type="checkbox" class="show-total" id="3" name="3" value="">
                                    <label class="show-total" for="3" class="fw-700"> NO CHEESE (-Rs 100)</label><br>
                                </p>
                                <p class="checkbox">
                                    <input type="checkbox" class="show-total" id="4" name="4" value="">
                                    <label class="show-total" for="4" class="fw-700"> NO JALAPENO (–Rs 40)</label><br>
                                </p>
                            </div>
                            <div class="product-addon">
                                <h3 class="addon-name">EXTRA TOPPINGS</h3>
                                <p class="checkbox">
                                    <input type="checkbox" class="show-total" id="5" name="5" value="">
                                    <label class="show-total" for="5" class="fw-700">EXTRA CHEDDAR (Rs 50)</label><br>
                                </p>
                                <p class="checkbox">
                                    <input type="checkbox" class="show-total" id="6" name="6" value="">
                                    <label class="show-total" for="6" class="fw-700">SMOKED CHEESE (Rs 40)</label><br>
                                </p>
                                <p class="checkbox">
                                    <input type="checkbox" class="show-total" id="7" name="7" value="">
                                    <label class="show-total" for="7" class="fw-700"> FRIED ONION (Rs 100)</label><br>
                                </p>
                                <p class="checkbox">
                                    <input type="checkbox" class="show-total" id="8" name="8" value="">
                                    <label class="show-total" for="8" class="fw-700"> SAUTEED ‘SHROOMS (Rs
                                        40)</label><br>
                                </p>
                            </div>
                            <div class="addon-total">
                                <dl class="product-addon-totals">
                                    <dt>Options total:</dt>
                                    <dd><strong><span class="amount">$1.00</span></strong></dd>
                                    <dt>Sub total:</dt>
                                    <dd><strong><span class="amount">$12.99</span></strong></dd>
                                </dl>
                            </div>
                            <div class="addon-order">
                                <div class="quantity">
                                    <input type="number" min="1" max="100" value="1" />
                                </div>
                                <button type="submit" class="btn cart-btn">Order</button>
                                <div class="addon-wishlist">
                                    <i class="lar la-heart"></i>
                                </div>
                            </div>
                            <div class="product-meta">
                                <span class="posted-in">Category:</span><a href="javascrip:void(0)"
                                    rel="tag">Burgers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection