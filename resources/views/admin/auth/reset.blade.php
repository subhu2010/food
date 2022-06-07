<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }} | Admin Password Reset</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('uploads/fav.fw.png') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
    </script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('admin-assets/css/vendors.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin-assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('uploads/fav.png') }}"/>
</head>
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <style>
        #error-msg {background:#cf2338; padding:15px 0;}
        #error-msg h4 {color:#fff; font-size:14px;}
        #error-msg h4 i {margin-right:10px;}
        #error-msg h4 a {float:right; font-size:30px; color:#fff; margin-top:-12px;}
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
        if(isIE == true){
            document.getElementById("error-msg").style.display = "block";
        }
    </script>

        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" 
                style="background-image: url({{ asset('admin-assets/images/bg/bg-2.jpg') }});">
                <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
                    <div class="m-login__container">
                        
                        <div class="m-login__signin animated flipInX">
                            <div class="m-login__head">
                                <h3 class="m-login__title">{{ __('Admin Password Reset') }}</h3>
                            </div>

                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="m-login__form m-form" id="pass-reset" 
                                action="{{ route('admin.reset') }}" method="POST">

                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Email" 
                                        name="email" value="{{ old('email') }}" autocomplete="off">

                                    @if($errors->has('email'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="password" 
                                        placeholder="Password" name="password">

                                    @if($errors->has('password'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" 
                                        type="password" placeholder="Confirm Password" name="password_confirmation">

                                    @if($errors->has('password_confirmation'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="m-login__form-action">
                                    <button id="reset-password" 
                                        class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                                    {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('admin-assets/js/vendors.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin-assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8" async defer>
            
            $(document).ready(function(){

                $("input").keyup(function(event){

                    $(this).removeClass('border-danger');
                    $(this).next("span").remove();
                    
                });

                $("form#pass-reset").submit(function(event) {
                    event.preventDefault();

                    $("button#reset-password").attr('disabled', true);
                    $("button#reset-password").html("Reseting Password . . . <i class='fa fa-spinner fa-pulse' style='font-size:24px'></i>");

                    this.submit();

                });
            });

        </script>
    </body>
</html>




                            