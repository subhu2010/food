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

<!-- product detail -->
<div class="custom-bg">
    <div class="container">
        <div class="product-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="xzoom-container">
                        <div class="product-img">
                            <img class="xzoom" id="xzoom-default" src="{{ asset('site-assets/cake-images/1.jpg') }}" xoriginal="{{ asset('site-assets/cake-images/1.jpg') }}" />
                        </div>
                        <div class="xzoom-thumbs">
                            <a href="{{ asset('site-assets/cake-images/1.jpg') }}"><img class="xzoom-gallery" src="{{ asset('site-assets/cake-images/1.jpg') }}"  xpreview="{{ asset('site-assets/cake-images/1.jpg') }}"> </a>
                            <a href="{{ asset('site-assets/cake-images/2.jpg') }}"><img class="xzoom-gallery" src="{{ asset('site-assets/cake-images/2.jpg') }}"> </a>
                            <a href="{{ asset('site-assets/cake-images/3.jpg') }}"><img class="xzoom-gallery" src="{{ asset('site-assets/cake-images/3.jpg') }}"> </a>
                            <a href="{{ asset('site-assets/cake-images/4.jpg') }}"><img class="xzoom-gallery" src="{{ asset('site-assets/cake-images/4.jpg') }}"> </a>
                        </div>
                    </div>        
                </div>
                <div class="col-lg-6">
                    <div class="product-dtl">
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
                        <div class="product-dtl-body">
                            <p>Text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie</p>
                            <p>Text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 text-md-start">
                                    <div class="quantity">
                                        <input type="number" min="1" max="100" value="1" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="price-bg text-md-end">
                                        <span>Price Rs 897</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-size mt-4">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="product-size-card">
                                            <span>Size</span>
                                            <h4>5 pound</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="product-size-card border-0">
                                            <span>delivery</span>
                                            <h4>30 min</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="ol-lg-12 text-center">
                                    <a href="{{url('cake-cart')}}" class="btn btn-one">Add to cart</a>
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
<div class="custom-bg pa-tb mt-2">
    <div class="product-dtl-tabs">
        <div class="container">
            <div class="product-tab-header">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-special-tab" data-bs-toggle="pill" data-bs-target="#pills-special" type="button" role="tab" aria-controls="pills-special" aria-selected="false">special items addon</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-feedback-tab" data-bs-toggle="pill" data-bs-target="#pills-feedback" type="button" role="tab" aria-controls="pills-feedback" aria-selected="false">feedback</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill" data-bs-target="#pills-history" type="button" role="tab" aria-controls="pills-history" aria-selected="false">Detail History</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content mt-4" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-special" role="tabpanel" aria-labelledby="pills-special-tab">
                    <div class="row">
                        <div class="col-md-7" style="background:#fff">
                            <div class="modal-body ">
                                <!-- <div class="surprise-food-cart d-flex align-items-center justify-content-between">
                                    <img src="{{ asset('site-assets/images/5.jpg')}}" class="img-fluid" alt="food on ways">
                                    <div class="surprise-food-title">
                                        <h4 class="fw-700">Combo Of The Month</h4>
                                        <p>French fries + Chicken Sizzler + Burger + momos</p>
                                    </div>
                                </div> -->
                                <h4 class="fw-700">Wanna Make it more Special</h4>
                                <div class="special-list-item">
                                    <div class="form-check">
                                        <label class="form-check-label radio-label" for="exampleRadios1">
                                            Flower
                                        </label>
                                        <p class="price">
                                            <input class="form-check-input radio-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
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
                                            <input class="form-check-input radio-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
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
                                            <input class="form-check-input radio-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                            Rs. 895
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between px-0">
                                <div class="price-qty d-flex align-items-center">
                                    <span class="price">
                                        Rs. 1500
                                    </span>
                                    <div class="quantity">
                                        <input type="number" min="1" max="100" value="1" />
                                    </div>
                                </div>
                                <a href="cake-cart.php" class="btn btn-one">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show " id="pills-feedback" role="tabpanel" aria-labelledby="pills-feedback-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-feedback">
                                <div class="product-feedback-head">
                                    <div class="feedback-avatar">
                                        <img src="{{ asset('site-assets/images/avatar/2.jpg')}}" class="img-fluid" alt="food on ways">
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
                                            <p class="mb-0">Survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recent</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-feedback">
                                <div class="product-feedback-head">
                                    <div class="feedback-avatar">
                                        <img src="{{ asset('site-assets/images/avatar/1.jpg')}}" class="img-fluid" alt="food on ways">
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
                                            <p class="mb-0">Survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recent</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
                    <p>Nunc id ultrices elit. Fusce eget eros iaculis arcu dignissim rutrum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut efficitur vitae nisl vel aliquet. Praesent a mollis purus. Nullam feugiat lobortis elementum. Donec lacinia gravida sem molestie bibendum. Mauris fermentum aliquet mauris a tempor. Morbi sed tortor vestibulum dui scelerisque vehicula nec vel turpis. Sed elementum quis eros ac rhoncus.</p>

                    <p>Aliquam vel maximus enim. Fusce eget lobortis arcu. Integer ac orci sed mi congue sodales a ac nisl. Curabitur sed lectus imperdiet, bibendum justo et, congue ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ac vulputate diam, nec posuere arcu. Mauris consectetur, velit vitae congue suscipit, nunc lorem accumsan arcu, porta placerat dolor arcu vel nisi. Sed dictum nulla purus, egestas tempus elit lacinia non. Sed eget consequat lectus. Donec ultricies nec ligula feugiat tempor. Morbi porttitor condimentum dictum.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Surprise food Modal -->
<div class="modal fade modal-checkout" id="supriseCheckout" tabindex="-1" aria-labelledby="supriseCheckoutLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body px-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="surprise-food-cart d-flex align-items-center justify-content-around">
                    <img src="images/5.jpg" class="img-fluid" alt="food on ways">
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
                            <input class="form-check-input radio-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
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
                            <input class="form-check-input radio-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
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
                            <input class="form-check-input radio-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
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
                <a href="cake-cart.php" class="btn btn-one">add to cart</a>
            </div>
        </div>
    </div>
</div>

<style>
    #myHeader {
        background: #fff;
    }
</style>

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


