@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")


<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>checkout</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout Your Order</li>
            </ol>
        </nav>
    </div>
</section>

<div class="custom-bg mt-0 pb-4">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <div class="checkout-login-section text-center">
                    <h4>Account</h4>
                    <p>To place your order now, log in to your existing account or sign up.</p>
                    <div class="default-btn">
                        <a href="#" class="btn btn-more btn-bg-primary">
                            <span>Have an account?</span>
                            <span>Log In</span>
                        </a>
                        <a href="#" class="btn btn-more me-0">
                            <span>New In Food on Ways?</span>
                            <span>Sign Up</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container ma-b">
        <div class="row">
            <div class="offset-xxl-3 col-xxl-6 offset-xl-3 col-xl-6">
                <div class="checkout-one-card">
                    <div class="modal-content">
                        <div class="modal-header p-0">
                            <h5 class="modal-title" id="checkoutLabel"><i class="las la-shopping-cart"></i> Your Order
                            </h5>
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
                                <div class="list-item">
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
                            </div>
                            <div class="modal-checkout-total">
                                <div class="list-item">
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
                        </div>
                        <div class="modal-footer px-0 pb-0">
                            <a href="{{url('checkout-confirm')}}" class="btn btn-one fw-700">proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection