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
    <script src="{{ asset('site-assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- line awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/owl/owl.theme.default.min.css') }}">


    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/app.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/pricerange.css') }}"> -->



    <!-- xzoom -->
    <script src="{{asset('site-assets/xzoom/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('site-assets/xzoom/xzoom.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('site-assets/xzoom/xzoom.css')}}" media="all" />
    <!-- 
    <script src="{{ asset('site-assets/xzoom/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site-assets/xzoom/xzoom.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/xzoom/xzoom.css') }}" />
    <script type="text/javascript" src="{{ asset('site-assets/xzoom/jquery.hammer.min.js') }}"></script> -->

    <!-- cookiealert styles -->


</head>

<body>

    <div id="header" class="main-header-top">
        <div id="header-top">
            <div class="container">
                <div class="header-top clearfix">
                    <div class="top-left-menu d-none d-xl-block">
                        <ul class="top-menu">
                            <li>
                                <a href="{{url('item-list')}}">cakes</a>
                            </li>
                            <li>
                                <a href="{{url('item-list')}}">foods</a>
                            </li>
                            <li>
                                <a href="{{url('item-list')}}">foodonways Deals</a>
                            </li>
                            <li>
                                <a href="{{url('item-list')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div id="logo">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('site-assets/images/logo.png') }}" class="img-fluid"></img>
                        </a>
                    </div>
                    <div class="top-right-menu  d-none d-xl-block">
                        <ul class="top-menu">
                            <li>
                                <div class="toogle-btn">
                                    <span class="label">dine-in/takeaway</span>
                                    <label class="switch">
                                        <input type="checkbox" checked="" id="btnToggle">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="location-input">
                                    <i class="las la-map-marker"></i>
                                    <input type="text" class="form-control" disabled readonly value="kathmandu, Nepal"
                                        data-bs-toggle="modal" data-bs-target="#location">
                                </div>
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
                @include('site.includes.mb-nav')

                @include('site.includes.header-middle')

            </div>
        </div>
        @include('site.includes.bottom-menu')
    </div>

    <!-- <div class="sticky-icon">
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
    </div> -->




    <!-- location Modal -->
    <div class="modal fade" id="location" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="locationLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="locationLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>