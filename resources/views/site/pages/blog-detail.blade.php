@extends("site.layouts.layout")

@section("page_title", "Blog Details")

@section("content")

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>Blog Title</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Blog</a>
                </li>
            </ol>
        </nav>
    </div>
</section>

<div class="blog-details-area mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-article">
                    <div class="blog-article-img">
                        <img src="{{ asset('site-assets/images/1.jpg') }}" alt="Images">
                    </div>
                    <div class="blog-status">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul>
                                    <li>Written by <a href="#">Admin</a></li>
                                    <li>21 August, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="article-content">
                        <h2>Lorem ipsum dolor sit ame</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat
                            nulla pariatur.
                        </p>
                        <p>
                            Ecespiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo. Nemo enim
                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                            magni dolores eos qui
                            ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quci velit
                            modi tempora incidunt
                            ut labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                    </div>
                    <div class="blog-article-share">
                        <ul class="social-icon">
                            <li>Share This Post</li>
                            <li>
                                <a href="javascript:;" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="side-bar-wrap">
                    <div class="side-bar-widget">
                        <h3 class="title">Recent Posts</h3>
                        <div class="widget-popular-post">

                            <article class="item">
                                <a href="{{ route('site.blogDetail', 'blog-detail') }}" class="thumb">
                                    <span class="full-image cover bg1" role="img">
                                        <img src="https://source.unsplash.com/random/300x200?sig=1">
                                    </span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                                            Success Depends on Strategy and Plan
                                        </a>
                                    </h4>
                                    <p>March 20, 2021</p>
                                </div>
                            </article>

                            <article class="item">
                                <a href="{{ route('site.blogDetail', 'blog-detail') }}" class="thumb">
                                    <span class="full-image cover bg1" role="img">
                                        <img src="https://source.unsplash.com/random/300x200?sig=2">
                                    </span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                                            Success Depends on Strategy and Plan
                                        </a>
                                    </h4>
                                    <p>March 20, 2021</p>
                                </div>
                            </article>

                            <article class="item">
                                <a href="{{ route('site.blogDetail', 'blog-detail') }}" class="thumb">
                                    <span class="full-image cover bg1" role="img">
                                        <img src="https://source.unsplash.com/random/300x200?sig=3">
                                    </span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="{{ route('site.blogDetail', 'blog-detail') }}">
                                            Success Depends on Strategy and Plan
                                        </a>
                                    </h4>
                                    <p>March 20, 2021</p>
                                </div>
                            </article>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection