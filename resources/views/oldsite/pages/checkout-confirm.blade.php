@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>Checkout</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout Your Order</li>
            </ol>
        </nav>
    </div>
</section>


<div class="custom-bg mt-0">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <div class="checkout-user">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="checkout-status">
                                <h4 class= "fw-700">Logged in as</h4>
                            </div>
                        </div>
                        <div class="col-xxl-12 flex-center justify-content-between">
                            <table id="form" class="view">
                                <tbody>
                                    <tr>
                                        <td> 
                                            <input type="text" class="form-control  fw-700" value="Sarita Neupane" readonly/> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control fw-700" value="9800921738" readonly>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button id="edit" class="btn"><i class="las la-edit"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="custom-bg pt-5">
    <div class="container">
        <div class="checkout-process">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-delivery-card mb-5">
                        <h5 class="delivery-card-head fw-800">Pickup Type</h5>
                        <div class="delivery-card-body flex-center">
                            <label class="custom-checkbox mb-0 me-5">Home Delivery
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="custom-checkbox mb-0">Pickup
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkout-delivery-card">
                        <h5 class="delivery-card-head fw-800">Delivery Address</h5>
                        <div class="delivery-card-body">
                            <span class="delivery-icon delivery-plus flex-center"><i class="las la-plus"></i></span>
                            <input type="text" class="form-control delivery-field" name="" value="Add New Delivery Address">
                            <span class="delivery-icon delivery-edit flex-center"><i class="las la-pen"></i></span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="" class="btn btn-one d-block fw-700" data-bs-toggle="modal" data-bs-target="#paymentModal">Confirm Order</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-delivery-card default-btn mb-5">
                        <a href="#" class="btn btn-more fw-700 d-block text-start" data-bs-toggle="modal" data-bs-target="#moreitemModal"><i class="las la-plus fw-800"></i>  Add More Items</a>
                    </div>
                    <div class="checkout-delivery-card">
                        <h5 class="delivery-card-head fw-800">Your Cart</h5>
                        <div class="list-item">
                            <div class="list-item-card flex-center">
                                <div class="item-name">
                                    <h5>Chicken Biryani</h5>
                                </div>
                                <div class="quantity">
                                    <input type="number" min="1" max="100" value="1" />
                                </div>
                            </div>
                            <div class="list-item-card flex-center">
                                <div class="item-name">
                                    <h5>Chicken Biryani</h5>
                                </div>
                                <div class="quantity">
                                    <input class="" type="number" min="1" max="100" value="1" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-checkout-subtotal">
                            <div class="list-item-card flex-center">
                                <div class="item-name">
                                    <h5 class="mb-0">Customize</h5>
                                </div>
                                <div class="price">
                                    Rs. 1300
                                </div>
                            </div>
                        </div>
                        <div class="special-inst d-flex">
                            <p class="mb-0 fw-800">Special instruction for your meal (optional)……</p>
                        </div>
                        <div class="checkout-offer">
                            <div class="list-item">
                                <div class="list-item-card flex-center">
                                    <div class="item-name">
                                        <h5>Chicken Biryani</h5>
                                        <div class="item-meta">
                                            <span class="add-note">Select Promo Code</span>
                                        </div>
                                    </div>
                                    <div class="price"  data-bs-toggle="modal" data-bs-target="#checkout">
                                        View Offer
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-delivery-card">
                        <div class="modal-checkout-total pt-0 mt-0 border-0">
                            <div class="list-item-card flex-center">
                                <div class="item-name">
                                    <h5 class="mb-0">Total Payable</h5>
                                </div>
                                <div class="price">
                                    Rs. 1600
                                </div>
                            </div>
                        </div>
                        <div class="modal-checkout-subtotal">
                            <div class="list-item-card flex-center">
                                <div class="item-name">
                                    <h5 class="mb-0">Order Total</h5>
                                </div>
                                <div class="price">
                                    Rs. 1300
                                </div>
                            </div>
                            <div class="list-item-card flex-center">
                                <div class="item-name">
                                    <h5 class="mb-0">Delivery Fee</h5>
                                </div>
                                <div class="price">
                                    Rs. 100
                                </div>
                            </div>
                            <div class="list-item-card flex-center">
                                <div class="item-name">
                                    <h5 class="mb-0">Taxes & Charges</h5>
                                </div>
                                <div class="price">
                                    Rs. 200
                                </div>
                            </div>
                        </div>
                        <div class="review-note d-flex">
                            <p><strong>Review your order and address details to avoid cancellation of your order.</strong></p>
                        </div>
                        <div class="note">
                            <strong>Note:</strong>
                            <span><strong>If you choose to cancel your order, you can do it only within 5 minutesafter placing your order.</strong></span>
                        </div>
                        <a href="#" class="terms"><strong>Refer to Terms and Contitions</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- add more Modal -->
<div class="modal fade" id="moreitemModal" tabindex="-1" aria-labelledby="moreitemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="moreitemModalLabel">Add More Items</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @include ('site.includes.add-other-product')
            </div>
        </div>
    </div>
</div>

<!-- offer Modal -->
<div class="modal fade modal-checkout offer-modal" id="checkout" tabindex="-1" aria-labelledby="checkoutLabel" aria-hidden="true">
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
                            <h5>PROMO_946</h5>
                            <div class="item-meta">
                                <span>Get Rs. 50 discount</span>
                            </div>
                        </div>
                        <div class="price">
                            <a href="#">Apply Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- payment Modal -->
<div class="modal fade" id="paymentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Choose Payment Method</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 col-md-3">
                        <div class="payment-img">
                            <a href="#">
                                <img src="images/payment/esewa.png" class="img-fluid" alt="food on ways">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <div class="payment-img">
                            <a href="#">
                                <img src="images/payment/khalti.svg" class="img-fluid" alt="food on ways">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

@endsection
