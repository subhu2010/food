@extends("site.layouts.layout")

@section("page_title", "Blogs")

@section("content")

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>Blogs</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog List</li>
            </ol>
        </nav>
    </div>
</section>

<div class="container ma-tb">
    <div class="blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                            <div class="blog-card-img">
                                <img src="{{asset('site-assets/images/1.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="blog-content">
                                <h5>Hot Water Cornbread</h5>
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                            <div class="blog-card-img">
                                <img src="{{asset('site-assets/images/2.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="blog-content">
                                <h5>Hot Water Cornbread</h5>
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                            <div class="blog-card-img">
                                <img src="{{asset('site-assets/images/3.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="blog-content">
                                <h5>Hot Water Cornbread</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                            <div class="blog-card-img">
                                <img src="{{asset('site-assets/images/4.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="blog-content">
                                <h5>Hot Water Cornbread</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                            <div class="blog-card-img">
                                <img src="{{asset('site-assets/images/5.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="blog-content">
                                <h5>Hot Water Cornbread</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                            <div class="blog-card-img">
                                <img src="{{asset('site-assets/images/6.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="blog-content">
                                <h5>Hot Water Cornbread</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                            <div class="blog-card-img">
                                <img src="{{asset('site-assets/images/7.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="blog-content">
                                <h5>Hot Water Cornbread</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                            <div class="blog-card-img">
                                <img src="{{asset('site-assets/images/8.jpg')}}" class="img-fluid" alt="">
                            </div>
                            <div class="blog-content">
                                <h5>Hot Water Cornbread</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection