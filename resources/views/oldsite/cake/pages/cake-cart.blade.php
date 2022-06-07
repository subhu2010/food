@extends("site.cake.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")


<div class="page-banner">
    <img src="{{ asset('site-assets/cake-images/image/25.png') }}" class="img-fluid" alt="food on ways">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="las la-long-arrow-alt-left"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="cake-page.php">Wedding Cake</a></li>
            <li class="breadcrumb-item active" aria-current="page">White Forest</li>
        </ol>
    </nav>
</div>


<div class="cake-cart-section custom-bg">
    <div class="container">
        <div class="product-content">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="cart-img">
                        <img src="{{ asset('site-assets/cake-images/1.jpg') }}" class="img-fluid" alt="food on ways">
                    </div>
                    <div class="product-dtl p-0 mt-3">
                        <div class="product-dtl-head">
                            <h4 class="title">white forest</h4>
                            <span class="subtitle">weeding cake</span>
                            <div class="icon-star">
                                <span class="las la-star checked"></span>
                                <span class="las la-star checked"></span>
                                <span class="las la-star checked"></span>
                                <span class="las la-star"></span>
                                <span class="las la-star"></span>
                            </div>
                        </div>
                        <div class="product-dtl-body mt-3 clearfix">
                            <h5 title="White Forest">white forest</h5>
                            <p>text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only .</p>
                            <span class="price float-md-start">Rs 568</span>
                            <span class="price float-md-end">Quantity 1</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cart-dtl-section">
                        <div class="default-btn">
                            <a href="#" class="btn btn-more fw-700 text-start" data-bs-toggle="modal" data-bs-target="#moreitemModal"><i class="las la-plus fw-800"></i>  Add More Items</a>
                        </div>
                        <div class="cart-dtl-note mt-4">
                            <div class="cart-dtl-section-head">
                                <h5>Note</h5>
                            </div>
                            <div class="cart-dtl-note-body">
                                <ul class="mb-3">
                                    <li>Fruits will be added based on seasonal availability</li>
                                    <li>Image is only for representational purpose Actual</li>
                                    <li>Fruits used will vary from image shown</li>
                                </ul>
                                <p>A simple vanilla cake for the health conscious adorned with fresh fruits of the season. Decorated with seasonal fresh fruits, this vanilla sponge and fresh whipped cream cake is a safe bet to present to anyone.</p>
                            </div>
                        </div>
                        <div class="cake-weight mb-4">
                            <div class="cart-dtl-section-head">
                                <h5>Weight/Eggless Cake <span>*</span></h5>
                            </div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>0.5 Kg Egg</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="cake-weight-text mb-4">
                            <div class="cart-dtl-section-head">
                                <h5>Weight/Eggless Cake <span>*</span></h5>
                            </div>
                            <textarea class="form-control" rows="5"></textarea>
                            <small>Maximum 40 Character</small>
                        </div>
                        <div class="final-cart mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="quantity">
                                        <input type="number" min="1" max="100" value="1" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a href="cake-cart.php" class="btn btn-one d-block rounded-pill">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="cake-delivery mb-4">
                            <div class="cart-dtl-section-head">
                                <h5>Available in Stores</h5>
                            </div>
                            <div class="cake-delivery-list mb-3 d-flex align-items-center">
                                <div class="cake-delivery-icon me-4">
                                    <img src="{{ asset('site-assets/cake-images/van.png') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="cake-delivery-text">
                                    <h5 class="mb-0">Free Shipping</h5>
                                </div>
                            </div>
                            <div class="cake-delivery-list mb-3 d-flex align-items-center">
                                <div class="cake-delivery-icon me-4">
                                    <img src="{{ asset('site-assets/cake-images/refund.png') }}" class="img-fluid" alt="food on ways">
                                </div>
                                <div class="cake-delivery-text">
                                    <h5 class="mb-0">Instant Refund</h5>
                                </div>
                            </div>
                            <div class="cake-delivery-list d-flex align-items-center">
                                <div class="cake-delivery-text">
                                    <h5 class="mb-0 availability">Availability : </h5>
                                </div>
                                <div class="cake-delivery-text d-flex">
                                    <h5 class="mb-0 stocks">In Stock</h5>
                                    <!-- <h5 class="mb-0 out-stocks">Out Of Stock</h5> -->
                                </div>
                            </div>
                        </div>
                        <div class="cake-coupn mb-4">
                            <form class="row">
                                <div class="col-8">
                                    <input class="form-control" placeholder="Enter Voucher code"></input>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-one">Apply</button>
                                </div>
                            </form>
                        </div>
                        <div class="cake-total pt-4 clearfix">
                            <h3 class="float-start">Total Pay</h3>
                            <h3 class="float-end text-end">
                                1765
                                <span class="d-block">(Tax Included)</span>
                            </h3>
                        </div>
                        <div class="default-btn cake-proceed-btn">
                            <button class="btn btn-more btn-bg-primary w-100 d-block" type="submit" data-bs-toggle="modal" data-bs-target="#paymentModal">Proceed to Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- payment Modal -->
<div class="modal fade" id="paymentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Choose Payment Method</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="payment-img">
                            <a href="#">
                                <img src="{{ asset('site-assets/cake-images/payment/esewa.png') }}" class="img-fluid" alt="food on ways">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="payment-img">
                            <a href="#">
                                <img src="{{ asset('site-assets/cake-images/payment/khalti.svg') }}" class="img-fluid" alt="food on ways">
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


