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
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/pricerange.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/main-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/main-responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/new-style.css') }}">

    <!-- xzoom -->
    <script src="{{ asset('site-assets/xzoom/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site-assets/xzoom/xzoom.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/xzoom/xzoom.css') }}" media="all" /> 
    <script type="text/javascript" src="{{ asset('site-assets/xzoom/jquery.hammer.min.js') }}"></script>  

    <!-- cookiealert styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
  

</head>

<body>

<div id="header" class="mian-header-top">
    <div id="header-top">
        <div class="container">
            <div class="header-top clearfix">
                <div class="top-left-menu d-none d-md-block">
                    <ul class="top-menu">
                        <li>
                            <a href="{{url('/')}}">home</a>
                        </li>
                        <li>
                            <a href="{{url('new-item-list')}}">foods</a>
                        </li>
                        <li>
                            <a href="{{url('new-item-list')}}">beverages</a>
                        </li>
                    </ul>
                </div>
                <div id="logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('site-assets/images/logo.png') }}" class="img-fluid"></img>
                    </a>
                </div>
                <div class="top-right-menu  d-none d-md-block">
                    <ul  class="top-menu">
                        <li>
                            <a href="{{url('new-item-list')}}">cakes</a>
                        </li>
                        <li>
                            <a href="{{url('new-item-list')}}">health diets</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-middle clearfix">
            <div class="header-middle-message">
                <small class="d-block">Order Online or Call Now:</small>
                <span class="d-block">
                    <i class="las la-phone"></i>
                    +977 9864235178
                </span>
                <a href="tel:+977 9864235178" class="d-md-none"><i class="las la-phone"></i></a>
            </div>
            <div class="d-xl-none float-end ms-4 mb-canvas">
                <a class="btn btn-mb-bar" data-bs-toggle="offcanvas" href="#offcanvasMobile" role="button" aria-controls="offcanvasMobile">
                    <i class="las la-bars"></i>
                </a>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasMobile" aria-labelledby="offcanvasMobileLabel">
                    <div class="offcanvas-header">
                        <ul class="nav nav-pills justify-content-between w-100" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="offcanvas-title active" id="pills-menu-tab" data-bs-toggle="pill" data-bs-target="#pills-menu"  role="tab" aria-controls="pills-menu" aria-selected="true">Menu</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="offcanvas-title" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login"  role="tab" aria-controls="pills-login" aria-selected="false"><i class="lar la-user"></i></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#" class="offcanvas-title" id="pills-cart-tab" data-bs-toggle="pill" data-bs-target="#pills-cart"  role="tab" aria-controls="pills-cart" aria-selected="false"><i class="las la-shopping-cart"></i></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                                    <i class="las la-times"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas-body">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">
                                <nav class="sidebar mb-nav card py-2 mb-4">
                                    <ul class="nav flex-column" id="nav_accordion">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Home </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> About </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Cakes </a>
                                        </li>
                                        <li class="nav-item has-submenu">
                                            <a class="nav-link" href="#"> our menu  </a>
                                            <ul class="submenu collapse">
                                                <li><a class="nav-link" href="{{url('new-item-list')}}">pizza </a></li>
                                                <li><a class="nav-link" href="{{url('new-item-list')}}">burger </a></li>
                                                <li><a class="nav-link" href="{{url('new-item-list')}}">momo </a> </li>
                                                <li><a class="nav-link" href="{{url('new-item-list')}}">sizzler </a> </li>
                                                <li><a class="nav-link" href="{{url('new-item-list')}}">chicken roast </a> </li>
                                                <li><a class="nav-link" href="{{url('new-item-list')}}">french fries </a> </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Cart </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Contact </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                <div class="login-section ">
                                    <div>
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link login-btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Login</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link login-btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Register</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <label>USERNAME OR EMAIL ADDRESS *</label>
                                                        <input class="form-control"></input>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label>PASSWORD *</label>
                                                        <input class="form-control" id="password-input" type="password"><a href="#" class="password-control"></a></input>

                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="mb-3 form-check">
                                                            <input type="checkbox" class="form-check-input bg-white" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-one mb-4">Login</button>
                                                    <div class="form-group">
                                                        <a href="#">Lost your password?</a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <form>
                                                    <div class="form-group mb-4">
                                                        <label>USERNAME OR EMAIL ADDRESS *</label>
                                                        <input class="form-control"></input>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label>PASSWORD *</label>
                                                        <input class="form-control" id="password-input" type="password"><a href="#" class="password-control"></a></input>

                                                    </div>
                                                    <div class="form-group mb-4">
                                                        Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a>.
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-one">Register</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle-cart clearfix">
                <div class="user-icon" id="loginBtn">
                    <a href="#">
                        <i class="lar la-user"></i>
                        <!-- <i class="las la-times"></i> -->
                    </a>
                </div>
                <div class="login-section ">
                    <div>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link login-btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link login-btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Register</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <form>
                                    <div class="form-group mb-4">
                                        <label>USERNAME OR EMAIL ADDRESS *</label>
                                        <input class="form-control"></input>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>PASSWORD *</label>
                                        <input class="form-control" id="password-input" type="password"><a href="#" class="password-control"></a></input>
                                        
                                    </div>
                                    <div class="form-group ">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input bg-dark" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-one mb-4">Login</button>
                                    <div class="form-group">
                                        <a href="#">Lost your password?</a>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <form>
                                    <div class="form-group mb-4">
                                        <label>USERNAME OR EMAIL ADDRESS *</label>
                                        <input class="form-control"></input>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label>PASSWORD *</label>
                                        <input class="form-control" id="password-input" type="password"><a href="#" class="password-control"></a></input>
                                        
                                    </div>
                                    <div class="form-group ">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input bg-dark" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a>.
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-one">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-icon">
                    <a href="#">
                        <i class="las la-shopping-cart"></i>
                        <span class="count">0</span>
                    </a>
                </div>
                <div class="search-icon">
                    <a id="show">
                        <i class="las la-search"></i>
                    </a>
                    <form class="search-icon-display" style="display:none">
                        <span class="close-btn" id="hide"><i class="las la-times"></i></span>
                        <input type="text" class="form-control search-control" name="">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom-menu" class="d-none d-xl-block">
        <div class="container">
            <ul class="bottom-menu-nav">
                <li>
                    <a href="{{url('new-item-list')}}" class="has-mega">
                        <img src="{{ asset('site-assets/images/menu/pizza.svg') }}">
                        <span>Pizza</span>
                    </a>
                    <div class="row mega-menu g-0">
                        <div class="col-3">
                            <a href="{{url('new-item-list')}}">
                                <div class="menu-item">
                                    <img class="img-fluid" src="{{ asset('site-assets/images/8.jpg') }}"></img>
                                    <span>Legendary Deep Dish</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="{{url('new-item-list')}}">
                                <div class="menu-item">
                                    <img class="img-fluid" src="{{ asset('site-assets/images/5.jpg') }}"></img>
                                    <span>Legendary Deep Dish</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="{{url('new-item-list')}}">
                                <div class="menu-item">
                                    <img class="img-fluid" src="{{ asset('site-assets/images/6.jpg') }}"></img>
                                    <span>Legendary Deep Dish</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="{{url('new-item-list')}}">
                                <div class="menu-item pe-4">
                                    <img class="img-fluid" src="{{ asset('site-assets/images/2.jpg') }}"></img>
                                    <span>Legendary Deep Dish</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="{{url('new-item-list')}}">
                        <img src="{{ asset('site-assets/images/menu/burger.svg') }}">
                        <span>Burger</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('new-item-list')}}">
                        <img src="{{ asset('site-assets/images/menu/momo.svg') }}">
                        <span>momo</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('new-item-list')}}">
                        <img src="{{ asset('site-assets/images/menu/chicken.svg') }}">
                        <span>chicken roast</span>
                    </a>
                    <div class="row mega-menu g-0">
                        <div class="col-3">
                            <a href="#">
                                <div class="menu-item">
                                    <img class="img-fluid" src="{{ asset('site-assets/images/8.jpg') }}"></img>
                                    <span>Legendary Deep Dish</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="menu-item">
                                    <img class="img-fluid" src="{{ asset('site-assets/images/5.jpg') }}"></img>
                                    <span>Legendary Deep Dish</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="menu-item">
                                    <img class="img-fluid" src="{{ asset('site-assets/images/6.jpg') }}"></img>
                                    <span>Legendary Deep Dish</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <div class="menu-item pe-4">
                                    <img class="img-fluid" src="{{ asset('site-assets/images/2.jpg') }}"></img>
                                    <span>Legendary Deep Dish</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="{{url('new-item-list')}}">
                        <img src="{{ asset('site-assets/images/menu/fries.svg') }}">
                        <span>french fries</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('new-item-list')}}">
                        <img src="{{ asset('site-assets/images/menu/dessert.svg') }}">
                        <span>desserts</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
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


<script>
    $("#header #loginBtn > a").on('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            $("#loginBtn, .login-section").toggleClass("active");
        });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;    

        if(nextEl) {
            e.preventDefault(); 
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
// DOMContentLoaded  end
</script>