@extends("site.layouts.layout")

@section("page_title", "About Us")

@section("content")

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>About US</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our History</li>
            </ol>
        </nav>
    </div>
</section>

<!-- about detail -->
<div class="mt-0">
    <div class="container">
        <div class="product-content">
            <div class="about-banner-content">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="{{asset('site-assets/images/10.jpg')}}" class="img-fluid" alt="food on ways">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-banner-text">
                            <p><strong>Food on Ways</strong> 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining essentially unchanged. It was
                                popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum.</p>
                            <p>using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                opposed to using 'Content here, content here', making it look like readable English.
                                Many desktop publishing packages</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about-include-section">
    @include('site.includes.mobile-section')
</div>


<!-- <div class="pa-t">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="{{asset('site-assets/images/10.jpg')}}" class="img-fluid" alt="food on ways">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-banner-text">
                    <p><strong>Food on Ways</strong> 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages</p>
                </div>
            </div>
        </div>
    </div>
</div>
 -->
<!-- <div class="about-contact pa-tb">
    <div class="container">
        <div class="section-title">
            <h3>Contact Us</h3>
        </div>
        <div class="formbox">
            <form class="row">
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="formbox-textbox">
                        <label class="form-label">Enter Full Name <span>*</span></label>
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="formbox-textbox">
                        <label class="form-label">Enter Email <span>*</span></label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="formbox-textbox">
                        <label class="form-label">Phone No <span>*</span></label>
                        <input type="" class="form-control" placeholder="9800000000">
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="formbox-textbox">
                        <label class="form-label">Message <span>*</span></label>
                        <textarea class="form-control" rows="4" cols="50"></textarea>
                    </div>
                </div>
                <div class="formbox-submit text-center">
                    <button type="button" class="btn btn-one">Send</button>
                </div>
            </form>
        </div>
    </div>
</div> -->



@endsection