@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>Contact us</h1>
    </div>
</section>

<section class="section-padding ma-tb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form_validate ajax_submit form_alert" action="sendmail.php" method="post"
                    enctype="multipart/form-data" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="text-light-black fw-600">Full Name</label>
                                <input type="text" name="name" class="form-control form-control-submit"
                                    placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="text-light-black fw-600">Email I'd</label>
                                <input type="email" name="email" class="form-control form-control-submit"
                                    placeholder="Email I'd">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="text-light-black fw-600">Phone No.</label>
                                <input type="text" name="phone" class="form-control form-control-submit"
                                    placeholder="Phone No.">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="text-light-black fw-600">Subject</label>
                                <input type="text" name="subject" class="form-control form-control-submit"
                                    placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label class="text-light-black fw-600">Message</label>
                                <textarea class="form-control form-control-submit" name="message" rows="6"
                                    placeholder="Write Message"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-one">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="strength-section custom-bg pa-tb">
        <div class="container">
            <div class="section-title">
                <h3>our strength</h3>
            </div>
            <div class="row g-0 g-4">
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="menu-card-one">
                        <a href="#">
                            <div class="menu-card-img">
                                <img src="{{ asset('site-assets/images/strength/surprise.png') }}" class=""
                                    alt="food on ways">
                            </div>
                            <div class="menu-card-title">
                                <h4>surprise food</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="menu-card-one">
                        <a href="#">
                            <div class="menu-card-img">
                                <img src="{{ asset('site-assets/images/strength/package.png') }}" class=""
                                    alt="food on ways">
                            </div>
                            <div class="menu-card-title">
                                <h4>premium packaging</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="menu-card-one">
                        <a href="#">
                            <div class="menu-card-img">
                                <img src="{{ asset('site-assets/images/strength/fast-delivery.png') }}" class=""
                                    alt="food on ways">
                            </div>
                            <div class="menu-card-title">
                                <h4>mid night delivery</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="menu-card-one">
                        <a href="#">
                            <div class="menu-card-img">
                                <img src="{{ asset('site-assets/images/strength/delivery.png') }}" class=""
                                    alt="food on ways">
                            </div>
                            <div class="menu-card-title">
                                <h4>express delivery</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="menu-card-one">
                        <a href="#">
                            <div class="menu-card-img">
                                <img src="{{ asset('site-assets/images/strength/mobile-payment.png') }}" class=""
                                    alt="food on ways">
                            </div>
                            <div class="menu-card-title">
                                <h4>easy payment</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-2 col-lg-2 col-md-4 col-6">
                    <div class="menu-card-one">
                        <a href="#">
                            <div class="menu-card-img">
                                <img src="{{ asset('site-assets/images/strength/transaction.png') }}" class=""
                                    alt="food on ways">
                            </div>
                            <div class="menu-card-title">
                                <h4>instant refund</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection