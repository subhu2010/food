@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>Help & Support</h1>
    </div>
</section>

<div class="container ma-tb">
    <section class="faq-area">
        <div class="faq-accordion">
            <div class="row accordion">
                <div class="col-lg-12 mb-4">
                    <div class="accordion-item">
                        <a class="accordion-title active" href="javascript:void(0)">
                            <span>
                                <i class='las la-angle-down'></i>
                            </span>
                            What are frequently asked question?
                        </a>
                        <div class="accordion-content show">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipis
                                cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <span>
                                <i class='las la-angle-down'></i>
                            </span>
                            What are frequently asked question?
                        </a>
                        <div class="accordion-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipis
                                cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <span>
                                <i class='las la-angle-down'></i>
                            </span>
                            What are frequently asked question?
                        </a>
                        <div class="accordion-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipis
                                cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <span>
                                <i class='las la-angle-down'></i>
                            </span>
                            What are frequently asked question?
                        </a>
                        <div class="accordion-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipis
                                cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection