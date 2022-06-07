<!doctype html>
<html lang="en">
<head>
    <!-- Page Title -->
    <title>@yield("page_title")</title>

    <!-- FavIcon Link -->
    <link rel="icon" type="image/ico" href="favicon.ico">

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('site-assets/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <script src="{{ asset('site-assets/js/bootstrap.bundle.min.js') }}"crossorigin="anonymous"></script>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/owl/owl.theme.default.min.css') }}">

    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/main-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/main-responsive.css') }}">

    <!-- xzoom -->
    <script src="{{ asset('site-assets/xzoom/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site-assets/xzoom/xzoom.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/xzoom/xzoom.css') }}" media="all" /> 
    <script type="text/javascript" src="{{ asset('site-assets/xzoom/jquery.hammer.min.js') }}"></script>  

    <!-- cookiealert styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
  

</head>

<body>

<header>
    <div class="top-header container-fluid">
        <div class="container-fluid d-none d-sm-block">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="top-header-contact">
                        <ul class="d-flex">
                            <li>
                                <span class="flex-center">
                                    <i class="las la-phone"></i>
                                </span>
                                <a href="#">9864235178</a>
                            </li>
                            <li class="me-0">
                                <span class="flex-center">
                                    <i class="lab la-whatsapp"></i>
                                </span>
                                <a href="#">9864235178</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <div class="header-location d-flex py-2">
                        <label><i class="las la-map-marker"></i></label>
                        <input class="form-control header-from-control" value="Kathmandu Nepal">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-3">
                    <div class="top-header-right">
                        <div class="marquee">
                            <marquee direction="left" class="d-flex">
                                <span>Currently we are delivering within Butwal city.</span>
                            </marquee>
                        </div>
                        <div class="toogle-btn" style="margin-left: 2rem;">
                            <span class="label">Surprise Food</span>
                            <label class="switch">
                                <input type="checkbox" checked id="btnToggle">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper" id="myHeader">
        <div class="container-fluid">
            <nav>
                <input type="checkbox" id="show-menu" class="d-none">
                <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="header-location d-sm-none">
                    <label><i class="las la-map-marker"></i></label>
                    <input class="form-control header-from-control" value="Kathmandu Nepal">
                </div>
                <div class="content">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('site-assets/images/logo.png') }}" class="img-fluid" alt="food on ways">
                        </a>
                    </div>

                    <ul class="links">
                        <li class="d-lg-none">
                            <div class="toogle-btn">
                                <span class="label">Surprise Food</span>
                                <label class="switch">
                                    <input type="checkbox" checked id="btnToggle">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </li>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{url('item-list')}}">food</a></li>
                        <li><a href="{{url('item-list')}}">beverages</a></li>
                        <li><a href="{{url('cake')}}" target="_blank">cakes</a></li>
                        <li><a href="{{url('item-list')}}">healthy diet</a></li>
                        <li class="navcart-icon mobile-icon d-lg-none">
                            <a href="{{url('user-login')}}" class="header-search">
                                <span class="d-lg-none">Login</span>
                                <span class="icon-box">
                                    <i class="las la-user-alt"></i>
                                </span>
                            </a>
                        </li>
                        <li class="navcart-icon mobile-icon d-lg-none">
                            <a href="#" class="header-search">
                                <span class="d-lg-none">Cart</span>
                                <span class="icon-box">
                                    <i class="las la-shopping-cart"></i>
                                </span>
                            </a>
                        </li>
                        <li class="navcart-icon mobile-icon d-lg-none">
                            <a href="#" class="header-search js-searchOpen">
                                <span class="d-lg-none">Search</span>
                                <span class="icon-box"><i class="las la-search"></i></span>
                            </a>
                            <section class="search-overlay">
                                <form class="search-form">
                                    <a href="#" class="btn-search js-searchClose">
                                        <i class="fa fa-4x fa-times" aria-hidden="true"></i>
                                    </a>
                                    
                                    <input class="search" type="search" placeholder="Search" />
                                </form>
                            </section>
                        </li>
                    </ul>
                    <ul class="links d-none d-lg-flex">
                        <li class="navcart-icon mobile-icon">
                            <a href="#" class="header-search js-searchOpen">
                                <span class="d-lg-none">Search</span>
                                <span class="icon-box"><i class="las la-search"></i></span>
                            </a>
                            <section class="search-overlay">
                                <form class="search-form">
                                    <a href="#" class="btn-search js-searchClose">
                                        <i class="fa fa-4x fa-times" aria-hidden="true"></i>
                                    </a>
                                    
                                    <input class="search" type="search" placeholder="Search" />
                                </form>
                            </section>
                        </li>
                        <li class="navcart-icon mobile-icon">
                            <a href="#" class="header-search">
                                <span class="d-lg-none">Login</span>
                                <span class="icon-box">
                                    <i class="las la-user-alt"></i>
                                </span>
                            </a>
                            <ul class="login-menu"style="min-width: 11rem;">
                                <li>
                                    <h6 class="fw-700 mb-2">Hello, John!</h6>
                                <li>
                                    <a class="" href="{{url('user-login')}}"><i class="las la-user-alt me-2"></i> Login</a>
                                </li>
                                </li>
                                <li>
                                    <a class="" href="user-dashboard.php"><i class="las la-user-alt me-2"></i> My Profile</a>
                                </li>
                                <li>
                                    <a class="" href="user-wishlist.php"><i class="las la-heart me-2"></i> Wishlist</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="" href="#"><i class="las la-sign-out-alt me-2"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="navcart-icon mobile-icon">
                            <a href="#" class="header-search">
                                <span class="d-lg-none">Cart</span>
                                <span class="icon-box">
                                    <i class="las la-shopping-cart"></i>
                                </span>
                                <small>1</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="delivery-time">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 text-lg-start text-sm-center text-center">
                    <span class="delivery-text">Moring Breakfast Delivery 6 AM to 8:30 PM</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-lg-center text-sm-center text-center">
                    <span class="delivery-text">Regular Food Delivery 9 AM to 6:30 PM</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-lg-end text-sm-center text-center">
                    <span class="delivery-text">Midnight Delivery 7 PM to 1:00 PM</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="sticky-icon">
    <ul class="sticky-social-icon">
        <li>
            <a href='#' class='facebook' target='_blank'>
                <i class="lab la-facebook-f"></i>
                <p>Facebook</p>
            </a>
        </li>
        <li>
            <a href='#' class='twitter' target='_blank'>
                <i class="lab la-twitter"></i>
                <p>Twitter</p>
            </a>
        </li>

        <li>
            <a href='#' class='instagram' target='_blank'>
                <i class="lab la-instagram"></i>
                <p>Instagram</p>
            </a>
        </li>
        <li>
            <a href='#' class='youtube' target='_blank'>
                <i class="lab la-youtube"></i>
                <p>Youtube</p>
            </a>
        </li>
    </ul>
</div>

