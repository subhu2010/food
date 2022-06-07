@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>Burger</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('new-listing')}}">Breakfast</a></li>
                <li class="breadcrumb-item active" aria-current="page">Burger</li>
            </ol>
        </nav>
    </div>
</section>

<div class="container">
    <div class="items-details mt-5">
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
                        <span class="posted-in">Category:</span><a href="javascrip:void(0)" rel="tag">Burgers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<!-- product detail tab -->
<div class="custom-bg">
    <div class="product-dtl-tabs pa-t">
        <div class="container">
            <div class="product-tab-header">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-other-product-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-other-product" type="button" role="tab"
                            aria-controls="pills-other-product" aria-selected="true">Taste Good With</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-feedback-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-feedback" type="button" role="tab" aria-controls="pills-feedback"
                            aria-selected="false">feedback</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-history" type="button" role="tab" aria-controls="pills-history"
                            aria-selected="false">Detail History</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-other-product" role="tabpanel"
                    aria-labelledby="pills-other-product-tab">
                    @include ('site.includes.add-other-product')
                </div>
                <div class="tab-pane fade" id="pills-feedback" role="tabpanel" aria-labelledby="pills-feedback-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-feedback">
                                <div class="product-feedback-head">
                                    <div class="feedback-avatar">
                                        <img src="{{ asset('site-assets/images/avatar/1.jpg') }}" class="img-fluid"
                                            alt="food on ways">
                                    </div>
                                    <div class="product-feedback-content">
                                        <div class="feedback-user">
                                            <h5>Sandhya Katwal</h5>
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
                                            <p>Survived not only five centuries, but also the leap into electronic
                                                typesetting, remaining essentially unchanged. It was popularised in the
                                                1960s with the release of Letraset sheets containing Lorem Ipsum
                                                passages, and more recent</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-feedback">
                                <div class="product-feedback-head">
                                    <div class="feedback-avatar">
                                        <img src="{{ asset('site-assets/images/avatar/2.jpg') }}" class="img-fluid"
                                            alt="food on ways">
                                    </div>
                                    <div class="product-feedback-content">
                                        <div class="feedback-user">
                                            <h5>Sandhya Katwal</h5>
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
                                            <p>Survived not only five centuries, but also the leap into electronic
                                                typesetting, remaining essentially unchanged. It was popularised in the
                                                1960s with the release of Letraset sheets containing Lorem Ipsum
                                                passages, and more recent</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
                    <p>Nunc id ultrices elit. Fusce eget eros iaculis arcu dignissim rutrum. Interdum et malesuada fames
                        ac ante ipsum primis in faucibus. Ut efficitur vitae nisl vel aliquet. Praesent a mollis purus.
                        Nullam feugiat lobortis elementum. Donec lacinia gravida sem molestie bibendum. Mauris fermentum
                        aliquet mauris a tempor. Morbi sed tortor vestibulum dui scelerisque vehicula nec vel turpis.
                        Sed elementum quis eros ac rhoncus.</p>

                    <p>Aliquam vel maximus enim. Fusce eget lobortis arcu. Integer ac orci sed mi congue sodales a ac
                        nisl. Curabitur sed lectus imperdiet, bibendum justo et, congue ligula. Pellentesque habitant
                        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ac vulputate diam,
                        nec posuere arcu. Mauris consectetur, velit vitae congue suscipit, nunc lorem accumsan arcu,
                        porta placerat dolor arcu vel nisi. Sed dictum nulla purus, egestas tempus elit lacinia non. Sed
                        eget consequat lectus. Donec ultricies nec ligula feugiat tempor. Morbi porttitor condimentum
                        dictum.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection