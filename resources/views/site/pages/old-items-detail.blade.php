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

<!-- product detail -->
<div class="mt-0">
    <div class="container">
        <div class="product-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="xzoom-container">
                        <div class="product-img">
                            <img class="xzoom" id="xzoom-default" src="{{ asset('site-assets/images/1.jpg') }}"
                                xoriginal="{{ asset('site-assets/images/1.jpg') }}" />
                        </div>
                        <div class="xzoom-thumbs">
                            <a href="{{ asset('site-assets/images/1.jpg') }}"><img class="xzoom-gallery"
                                    src="{{ asset('site-assets/images/1.jpg') }}"
                                    xpreview="{{ asset('site-assets/images/1.jpg') }}"> </a>
                            <a href="{{ asset('site-assets/images/2.jpg') }}"><img class="xzoom-gallery"
                                    src="{{ asset('site-assets/images/2.jpg') }}"> </a>
                            <a href="{{ asset('site-assets/images/3.jpg') }}"><img class="xzoom-gallery"
                                    src="{{ asset('site-assets/images/3.jpg') }}"> </a>
                            <a href="{{ asset('site-assets/images/4.jpg') }}"><img class="xzoom-gallery"
                                    src="{{ asset('site-assets/images/4.jpg') }}"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-dtl">
                        <div class="product-dtl-head">
                            <h4 class="title">omlet</h4>
                            <span class="subtitle">spicy hot</span>
                            <div class="icon-star">
                                <span class="las la-star checked"></span>
                                <span class="las la-star checked"></span>
                                <span class="las la-star checked"></span>
                                <span class="las la-star"></span>
                                <span class="las la-star"></span>
                            </div>
                        </div>
                        <div class="product-dtl-body">
                            <p>Text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                to make a type specimen book. It has survived not only five centurie</p>
                            <p>Text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                to make a type specimen book. It has survived not only five centurie</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="quantity">
                                        <input type="number" min="1" max="100" value="1" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="price-bg">
                                        <span>Price Rs 897</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-size mt-4">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="product-size-card">
                                            <span>Size</span>
                                            <h4>medium</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="product-size-card">
                                            <span>delivery</span>
                                            <h4>30 min</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="product-size-card border-0">
                                            <span>contain</span>
                                            <h4>Gluten</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="offset-lg-3 col-lg-6">
                                    <a href="cart.php" class="btn btn-one d-block mb-3" data-bs-toggle="modal"
                                        data-bs-target="#checkout">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                <form>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="las la-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search food items">
                    </div>
                </form>
            </div>
            <div class="tab-content my-3" id="pills-tabContent">
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


<!-- Modal -->
<div class="modal fade modal-checkout" id="checkout" tabindex="-1" aria-labelledby="checkoutLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header p-0">
                <h5 class="modal-title" id="checkoutLabel"><i class="las la-shopping-cart"></i> Your Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-0">
                <div class="list-item">
                    <div class="list-item-card flex-center">
                        <div class="item-name">
                            <h5>Chicken Biryani</h5>
                            <div class="item-meta">
                                <span class="add-note"><i class="las la-clipboard"></i> Add Note</span>
                                <span><i class="las la-trash"></i> Delete</span>
                            </div>
                        </div>
                        <div class="price">
                            Rs. 800
                        </div>
                    </div>
                    <div class="add-textarea">
                        <textarea rows="5" cols="40" class="form-control"></textarea>
                    </div>
                    <div class="list-item-card flex-center">
                        <div class="item-name">
                            <h5>Chicken Biryani</h5>
                            <div class="item-meta">
                                <span class="add-note"><i class="las la-clipboard"></i> Add Note</span>
                                <span><i class="las la-trash"></i> Delete</span>
                            </div>
                        </div>
                        <div class="price">
                            Rs. 800
                        </div>
                    </div>
                    <div class="add-textarea">
                        <textarea rows="5" cols="40" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-checkout-subtotal">
                    <div class="list-item-card flex-center">
                        <div class="item-name">
                            <h5 class="mb-0">Resturant Subtotal</h5>
                        </div>
                        <div class="price">
                            Rs. 1300
                        </div>
                    </div>
                    <div class="list-item-card flex-center">
                        <div class="item-name">
                            <h5 class="mb-0">Delivery Charge</h5>
                        </div>
                        <div class="price">
                            Rs. 100
                        </div>
                    </div>
                </div>
                <div class="modal-checkout-total">
                    <div class="list-item-card flex-center">
                        <div class="item-name">
                            <h5 class="mb-0">Resturant Total</h5>
                        </div>
                        <div class="price">
                            Rs. 1400
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer px-0 pb-0">
                <a href="{{url('checkout-order')}}" class="btn btn-one">proceed to checkout</a>
            </div>
        </div>
    </div>
</div>

<!-- Surprise food Modal -->
<div class="modal fade modal-checkout" id="supriseCheckout" tabindex="-1" aria-labelledby="supriseCheckoutLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body px-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="surprise-food-cart d-flex align-items-center justify-content-around">
                    <img src="images/combo.png" class="img-fluid" alt="food on ways">
                    <div class="surprise-food-title">
                        <h4 class="fw-700">Combo Of The Month</h4>
                        <p>French fries + Chicken Sizzler + Burger + momos</p>
                    </div>
                </div>
                <h4 class="fw-700">Wanna Make it more Special</h4>
                <div class="special-list-item">
                    <div class="form-check">
                        <label class="form-check-label radio-label" for="exampleRadios1">
                            Flower
                        </label>
                        <p class="price">
                            <input class="form-check-input radio-input" type="radio" name="exampleRadios"
                                id="exampleRadios1" value="option1">
                            Rs. 895
                        </p>
                    </div>
                </div>
                <div class="special-list-item">
                    <div class="form-check">
                        <label class="form-check-label radio-label" for="exampleRadios1">
                            Printed Card
                        </label>
                        <p class="price">
                            <input class="form-check-input radio-input" type="radio" name="exampleRadios"
                                id="exampleRadios1" value="option1">
                            Rs. 895
                        </p>
                    </div>
                </div>
                <div class="special-list-item">
                    <div class="form-check">
                        <label class="form-check-label radio-label" for="exampleRadios1">
                            Chocolates
                        </label>
                        <p class="price">
                            <input class="form-check-input radio-input" type="radio" name="exampleRadios"
                                id="exampleRadios1" value="option1">
                            Rs. 895
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between px-0 pb-0">
                <div class="price-qty d-flex align-items-center">
                    <span class="price">
                        Rs. 1500
                    </span>
                    <div class="quantity">
                        <input type="number" min="1" max="100" value="1" />
                    </div>
                </div>
                <a href="#" class="btn btn-one">add to cart</a>
            </div>
        </div>
    </div>
</div>



@endsection