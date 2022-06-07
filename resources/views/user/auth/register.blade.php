@extends('site.layouts.layout')

@section("page_title", "User Register")


@section('content')

<section class="signup-area signin-area padding-spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 ">
                <div class="signup-block">
                    <div class="site-header page-header">
                        <h3>Sign Up</h3>
                        <p>Already have account?
                            <a href="{{ route('user.login') }}" class="">Sign In</a>
                        </p>
                    </div>
                    <form class="form-contact contact__form" id="user-register-form" method="POST" action="{{ route('user.registerProcess') }}" >

                        @csrf

                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">Your FullName</label>
                                    <input class="form-control @if($errors->has('name')) border-danger @endif" 
                                        name="name" id="name" type="text" placeholder="Your Full Name" value="{{ old('name') }}" >
                                    @if($errors->has('name'))
                                    <span class="text-danger name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">Your Email</label>
                                    <input class="form-control @if($errors->has('email')) border-danger @endif" 
                                        name="email" id="email" type="email" placeholder="your@email.com">
                                    @if($errors->has('email'))
                                    <span class="text-danger name">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="password">
                                        <input class="form-control @if($errors->has('password')) border-danger @endif" 
                                            name="password" type="password" id="password" placeholder="Password" >
                                        <span class="text-danger password">{{ $errors->first('password') }}</span>
                                        <div class="form-alert-icon" onclick="showPassword('password',this);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for="confirm-password">Confirm Password</label>
                                    </div>
                                    <div class="password">
                                        <input class="form-control @if($errors->has('confirm_password')) border-danger @endif" 
                                            name="confirm_password" type="password" id="confirm_password" placeholder="Confirm password">
                                        <span class="text-danger confirm_password">{{ $errors->first('confirm_password') }}</span>
                                        <div class="form-alert-icon" onclick="showPassword('confirm-password',this);">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-eye">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-element mb-3 d-flex align-items-center terms">
                                    <input class="checkbox-primary me-1" type="checkbox" id="agree">
                                    <label for="agree" class="text-secondary mb-0">Accept the <a href="#"
                                            style="text-decoration: underline;">Terms</a> and <a href="#"
                                            style="text-decoration: underline;">Privacy Policy</a></label>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="all-button">
                                    <button id="user-register-button">Register</button>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="continue">
                                    <p>or continue with</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="auth-wrap">

                                    <div class="auth" data-event-label="facebook" data-social-code="facebook">
                                        <a href="{{ route('social.login', 'facebook') }}">
                                            <svg class="svg-icon facebook-login-icon " width="30" height="30"
                                                viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">

                                                <title>Facebook</title>

                                                <rect width="30" height="30" fill="url(#pattern0)"></rect>
                                                <defs>
                                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#image0"
                                                            transform="translate(0 -0.00161812) scale(0.00323625)">
                                                        </use>
                                                    </pattern>
                                                    <image id="image0" width="309" height="310"
                                                        xlink:href="data:image/png;base64,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">
                                                    </image>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="auth" data-event-label="google" data-social-code="google">
                                        <a href="{{ route('social.login', 'google') }}">
                                            <svg class="svg-icon google-login-icon " width="27" height="27"
                                                viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <title>Google</title>
                                                <path
                                                    d="M26.4599 13.7998C26.4599 12.6899 26.3698 11.8799 26.1749 11.0399H13.4999V16.0498H20.9399C20.7899 17.2948 19.9799 19.1698 18.1799 20.4298L18.1547 20.5975L22.1622 23.7021L22.4399 23.7298C24.9898 21.3748 26.4599 17.9098 26.4599 13.7998Z"
                                                    fill="#4285F4"></path>
                                                <path
                                                    d="M13.5001 27C17.145 27 20.205 25.8 22.4401 23.73L18.18 20.4299C17.0401 21.2249 15.51 21.7799 13.5001 21.7799C9.93008 21.7799 6.90009 19.425 5.81999 16.1699L5.66167 16.1834L1.4945 19.4084L1.44 19.5599C3.65998 23.9699 8.22001 27 13.5001 27Z"
                                                    fill="#34A853"></path>
                                                <path
                                                    d="M5.81992 16.1699C5.53493 15.3299 5.36999 14.4298 5.36999 13.4999C5.36999 12.5698 5.53493 11.6699 5.80493 10.8299L5.79738 10.651L1.57801 7.37419L1.43996 7.43986C0.525004 9.26987 0 11.3249 0 13.4999C0 15.6749 0.525004 17.7298 1.43996 19.5598L5.81992 16.1699Z"
                                                    fill="#FBBC05"></path>
                                                <path
                                                    d="M13.5 5.21995C16.0349 5.21995 17.7449 6.31494 18.7199 7.23L22.5299 3.50999C20.19 1.335 17.1449 0 13.5 0C8.21996 0 3.65997 3.02997 1.44 7.43991L5.80497 10.8299C6.90006 7.57497 9.93003 5.21995 13.5 5.21995Z"
                                                    fill="#EB4335"></path>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="auth" data-event-label="linkedin" data-social-code="linkedin">
                                        <a href="{{ route('social.login', 'linkedin') }}">
                                            <svg class="svg-icon linkedin-login-icon "
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="27"
                                                height="27">

                                                <title>Linkedin</title>

                                                <path
                                                    d="M29.63.001H2.362C1.06.001 0 1.034 0 2.306V29.69C0 30.965 1.06 32 2.362 32h27.27C30.937 32 32 30.965 32 29.69V2.306C32 1.034 30.937.001 29.63.001z"
                                                    fill="#0177b5"></path>
                                                <path
                                                    d="M4.745 11.997H9.5v15.27H4.745zm2.374-7.6c1.517 0 2.75 1.233 2.75 2.75S8.636 9.9 7.12 9.9a2.76 2.76 0 0 1-2.754-2.753 2.75 2.75 0 0 1 2.753-2.75m5.35 7.6h4.552v2.087h.063c.634-1.2 2.182-2.466 4.5-2.466 4.806 0 5.693 3.163 5.693 7.274v8.376h-4.743V19.84c0-1.77-.032-4.05-2.466-4.05-2.47 0-2.85 1.93-2.85 3.92v7.554h-4.742v-15.27z"
                                                    fill="#fff"></path>
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="signup-area-image">
                    <img src="{{ asset('site-assets/img/register.svg') }}" alt="Illustration Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>




<script type="text/javascript">
        
    $(document).ready(function(){

        $("input").keyup(function(event){
            
            $("input#"+event.target.name).removeClass("border-danger");
            $("span."+event.target.name).hide();
            $("span."+event.target.name).html("");
            $("span."+event.target.name).removeClass("text-danger");

        });


        $("form#user-register-form").submit(function(event){
            $("button#user-register-button").html("Processing . . .  <i class='fas fa-spinner fa-pulse'></i>")
        });

    });

</script>


@endsection
