<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('page_title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <script src="{{ asset('admin-assets/js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('admin-assets/css/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{ asset('uploads/fav.fw.png') }}" />
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" 
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" 
        crossorigin="anonymous"> -->

    <style>
        @media(max-width:842px) {
            .m-portlet__head-text small {
                padding-left: 0 !important;
                padding-top: 3px;
                margin-right: 15px !important;
            }
        }

        @media(max-width:768px) {
            .m-form__group .col-md-3 {
                margin-bottom: 10px;
            }

            .custom-file {
                width: 100% !important;
            }
        }

        @media(max-width:575px) {
            .m-portlet__head {
                padding: 15px !important;
            }

            .m-portlet .m-portlet__body {
                padding: 15px !important;
                padding-bottom: 1px !important;
            }

            .m-widget1 {
                padding: 10px 0 !important;
            }

            .m-widget5 {
                padding: 15px 0 !important;
                margin-left: -15px;
            }

            .m-portlet.m-portlet--full-height {
                margin-bottom: 0 !important;
            }
        }
    </style>

</head>

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <style>
        #error-msg {
            background: #cf2338;
            padding: 15px 0;
        }

        #error-msg h4 {
            color: #fff;
            font-size: 14px;
        }

        #error-msg h4 i {
            margin-right: 10px;
        }

        #error-msg h4 a {
            float: right;
            font-size: 30px;
            color: #fff;
            margin-top: -12px;
        }
    </style>

    <div id="error-msg" style="display:none">
        <div class="container">
            <h4 style="margin:0">
                <i class="fas fa-info-circle"></i>
                This browser may not support all the Features of the Website. Please use Chrome, Firefox, Opera or similar browsers for better User Experience.
            </h4>
        </div>
    </div>

    <script>
        isIE = false || !!document.documentMode;
        if (isIE == true) {
            document.getElementById("error-msg").style.display = "block";
        }
    </script>

    <div class="m-grid m-grid--hor m-grid--root m-page">
        <header id="m_header" class="m-grid__item m-header" m-minimize-offset="200" m-minimize-mobile-offset="200">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">

                    <div class="m-stack__item m-brand  m-brand--skin-dark ">
                        <div class="m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="{{ route('admin.dashboard') }}" class="m-brand__logo-wrapper" title="Admin Dashboard">
                                    Admin Panel
                                </a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
                                    <span></span>
                                </a>
                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <button class="m-aside-header-menu-mobile-close m-aside-header-menu-mobile-close--skin-dark" id="m_aside_header_menu_mobile_close_btn">
                            <i class="la la-close"></i>
                        </button>
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                        <a href="javascript:;" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-topbar__userpic">
                                                <?php
                                                $profile = empty(Auth::guard('admin')->user()->pics);
                                                if (isset($profile)) :
                                                    $profile = asset('uploads/profiles/admins/default-profile.jpg');
                                                else :
                                                    $profile = asset('uploads/profiles/admins/' . Auth::guard('admin')->user()->pics);
                                                endif;
                                                ?>
                                                <img src="{{ $profile }}" class="m--img-rounded m--marginless m--img-centered" alt="{{ ucwords(Auth::guard('admin')->user()->name) }}" />
                                            </span>
                                            <span class="m-topbar__username m--hide">
                                                {{ ucwords(Auth::guard('admin')->user()->name) }}
                                            </span>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust">
                                            </span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center" style="background: url({{ asset('admin-assets/images/user_profile_bg.jpg') }}); background-size: cover;">
                                                    <div class="m-card-user m-card-user--skin-dark">
                                                        <div class="m-card-user__pic">
                                                            <img src="{{ $profile }}" class="m--img-rounded m--marginless" alt="{{ ucwords(Auth::guard('admin')->user()->name) }}" />
                                                        </div>
                                                        <div class="m-card-user__details">
                                                            <span class="m-card-user__name m--font-weight-500">
                                                                {{ ucwords(Auth::guard('admin')->user()->name) }}
                                                            </span>
                                                            <a href="javascript:;" title="Email Address" class="m-card-user__email m--font-weight-300 m-link">
                                                                {{ ucwords(Auth::guard('admin')->user()->email) }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <li class="m-nav__section m--hide">
                                                                <span class="m-nav__section-text">Section</span>
                                                            </li>
                                                            <!-- <li class="m-nav__item">
                                                                <a href="#" class="m-nav__link" title="Profile">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text">
                                                                                My Profile
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li> -->
                                                            <li class="m-nav__item">
                                                                <a href="{{ route('admin.editSetting') }}" class="m-nav__link" title="Setting">
                                                                    <i class="m-nav__link-icon flaticon-cogwheel-1"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text">
                                                                                Setting
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="#" class="m-nav__link" title="Setting">
                                                                    <i class="m-nav__link-icon flaticon-cogwheel-1"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text" data-toggle="modal" data-target="#admin_edit_password">
                                                                                Edit Password
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                                            <li class="m-nav__item">
                                                                <button type="button" class="btn m-btn--pill btn-danger m-btn m-btn--custom m-btn--label-brand m-btn--bolder" data-toggle="modal" data-target="#admin_logout_model">
                                                                    Logout
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- Admin Edit Password Modal -->
        <div class="modal fade" id="admin_edit_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info" id="exampleModalLabel">
                            Admin Edit Password
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                        </button>
                    </div>
                    <div id="changePass"></div>
                    <div class="modal-body">
                        <form method="POST" action="javascript:;" id="passwordChangeForm">

                            @csrf

                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">
                                    Old Password:
                                </label>
                                <input type="password" name="old_password" placeholder="Old Password" class="form-control">
                                <span id="old_password" class="text-danger" style="display:none;"></span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">
                                    New Password:
                                </label>
                                <input type="password" name="new_password" placeholder="New Password" class="form-control">
                                <span id="new_password" class="text-danger" style="display:none;"></span>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">
                                    Confirm Password:
                                </label>
                                <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control">
                                <span id="confirm_password" class="text-danger" style="display:none;"></span>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-danger" id="adminChangePassword">
                            Change Password
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Logout Modal -->
        <div class="modal fade" id="admin_logout_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info" id="exampleModalLabel">
                            LOGOUT
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>
                            Are You Sure Want To Logout ?
                        </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            Close
                        </button>
                        <a class="btn btn-danger" href="javascript:;" id="adminLogout" title="Logout" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {

                // Admin Logout
                $("a#adminLogout").click(function(event) {

                    event.preventDefault();

                    let url = "{{ route('admin.logout') }}";

                    $("a#adminLogout").addClass('disabled');
                    $("a#adminLogout").html("Logging Out . . . <i class='fa fa-spinner fa-pulse' style='font-size:24px'></i>");

                    $.ajax({

                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: url,
                            type: 'POST',
                            dataType: 'json',

                        })
                        .done(function(response) {

                            if (response.success) {

                                window.location = "{{ route('admin.login') }}";
                                $("a#adminLogout").removeClass('disabled');

                            } else {

                                $("a#adminLogout").html("Logout");
                                $("a#adminLogout").removeClass('disabled');

                            }


                        })
                        .fail(function(error) {

                            $("a#adminLogout").html("Logout");
                            $("a#adminLogout").removeClass('disabled');

                        });

                });


                // Admin Change Password
                $("button#adminChangePassword").click(function(event) {

                    event.preventDefault();

                    let data = $("form#passwordChangeForm").serialize();
                    let url = "{{ route('admin.changePassword') }}";

                    $("button#adminChangePassword").attr('disabled', true);
                    $("button#adminChangePassword").html("Changing Password . . <i class='fa fa-spinner fa-pulse' style='font-size:24px'></i>");

                    $.ajax({

                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: url,
                            type: 'POST',
                            dataType: 'json',
                            data: data,

                        })
                        .done(function(response) {

                            $("div#changePass").html("");

                            if (response.success) {

                                $("form#passwordChangeForm")[0].reset();

                                $("div#changePass").html("<div class='alert alert-success'>" +
                                    response.message +
                                    "&nbsp;<i class='fa fa-spinner fa-pulse' style='font-size:24px'></i>" +
                                    "</div>");

                                setTimeout(function() {
                                    window.location = "{{ route('admin.login') }}";
                                }, 2000);

                            } else {

                                if (response.errors != undefined) {

                                    console.log(response.ind);
                                    console.log(response.errors);

                                    for (var i = 0; i < response.errors.length; i++) {

                                        $("span#" + response.ind[i]).show();
                                        $("span#" + response.ind[i]).html(response.errors[i]);

                                    }

                                } else {

                                    $("div#changePass").html("<div class='alert alert-success'>" +
                                        response.message +
                                        "</div>");

                                }

                            }

                            $("button#adminChangePassword").attr('disabled', false);
                            $("button#adminChangePassword").html("Change Password");

                        })
                        .fail(function() {

                            $("div#changePass").html("");
                            $("div#changePass").html("<div class='alert alert-danger'>" +
                                "Something Went Wrong While Changing Password ! ! !" +
                                "</div>");
                            $("button#adminChangePassword").attr('disabled', false);
                            $("button#adminChangePassword").html("Change Password");

                        });

                });

            });
        </script>