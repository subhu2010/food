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
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/cake-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/cake-responsive.css') }}">

    <!-- xzoom -->
    <script src="{{ asset('site-assets/xzoom/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site-assets/xzoom/xzoom.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/xzoom/xzoom.css') }}" media="all" /> 
    <script type="text/javascript" src="{{ asset('site-assets/xzoom/jquery.hammer.min.js') }}"></script>  

    <!-- cookiealert styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
  

</head>

<body>

<div class="wrapper fixed-top" id="myHeader">
        <div class="container-fluid">
            <nav>
                <input type="checkbox" id="show-menu" class="d-none">
                <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="content">
                    <div class="logo">
                        <a href="{{ url('cake') }}">
                            <img src="{{ asset('site-assets/images/logo.png') }}" class="img-fluid" alt="food on ways">
                        </a>
                    </div>

                    <ul class="links">
                        <li><a href="{{ url('cake') }}">Home</a></li>
                        <li><a href="{{url('#')}}">Weeding Cake</a></li>
                        <li><a href="{{url('#')}}">Birthday Cake</a></li>
                        <li><a href="{{url('#')}}" target="_blank">Farewell Cake</a></li>
                        <li class="navcart-icon mobile-icon d-lg-none">
                            <a href="login.php" class="header-search">
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
                                    <a class="" href="login.php"><i class="las la-user-alt me-2"></i> Login</a>
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
