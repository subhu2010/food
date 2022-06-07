@extends('site.layouts.layout')

@section("page_title", "User Login")


@section('content')

<div class="page-banner">
    <img src="{{ asset('site-assets/images/9.jpg') }}" class="img-fluid" alt="food on ways">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}"><i class="las la-long-arrow-alt-left"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Login / Signup</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="login-section pa-tb">
        <div class="row align-items-center">
            <div class="offset-lg-2 col-lg-4">
                <div class="form-container">
                    <div class="formbox">
                        <div class="formbox-title">SIGN IN</div>
                        <div class="formbox-social">
                            <div class="social-title ">Connect with Your Social Accounts</div>
                            <div class="social-buttons flex-center">
                                <a href="{{ route('user.social.login', 'facebook') }}" class="button-facebook">
                                    <i class="social-icon lab la-facebook-f"></i>
                                </a>
                                <a href="{{ route('user.social.login', 'google') }}" class="button-google">
                                    <i class="social-icon lab la-google"></i>
                                </a>
                            </div>
                        </div>
                        <div class="formbox-or">
                            <div class="or-line"></div>
                            <div class="or">OR</div>
                        </div>
                        <form action="{{ route('user.loginProcess') }}" method="post" accept-charset="utf-8" id="user-login-form" >

                            @csrf

                            <div class="formbox-textbox">
                                <label class="form-label">Email<span>*</span></label>
                                <input type="email" name="email" placeholder="Email" 
                                    class="form-control @if($errors->has('email')) border-danger @endif" >
                                @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="formbox-textbox">
                                <label class="form-label">Password<span>*</span></label>
                                <input type="password" name="password" placeholder="Password" 
                                    class="form-control @if($errors->has('password')) border-danger @endif" >
                                @if($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="formbox-forgot">
                                <a href="{{ route('user.showLinkRequestForm') }}">Forgot Password?</a>
                            </div>
                            <div class="formbox-submit">
                                <button type="submit" class="btn btn-one user-login-button">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="border-left: 1px solid #ddd;">
                <div class="form-container">
                    <div class="formbox">
                        <div class="formbox-title">SIGN UP</div>
                        <div class="formbox-social">
                            <div class="social-title ">Connect with Your Social Accounts</div>
                            <div class="social-buttons flex-center">
                                <a href="{{ route('user.social.login', 'facebook') }}" class="button-facebook">
                                    <i class="social-icon lab la-facebook-f"></i>
                                </a>
                                <a href="{{ route('user.social.login', 'google') }}" class="button-google">
                                    <i class="social-icon lab la-google"></i>
                                </a>
                            </div>
                        </div>
                        <div class="formbox-or">
                            <div class="or-line"></div>
                            <div class="or">OR</div>
                        </div>
                        <form action="{{ route('user.registerProcess') }}" method="post" accept-charset="utf-8" id="user-register-form" >

                            @csrf

                            <div class="formbox-textbox">
                                <label class="form-label">Full Name<span>*</span></label>
                                <input type="text" name="rname" placeholder="Full Name" value="{{ old('rname')??'' }}" 
                                    class="form-control @if($errors->has('rname')) border-danger @endif">
                                @if($errors->has('rname'))
                                    <span class="text-danger">{{ $errors->first('rname') }}</span>
                                @endif
                            </div>
                            <div class="formbox-textbox">
                                <label class="form-label">Email<span>*</span></label>
                                <input type="email" name="remail" placeholder="Email" value="{{ old('remail')??'' }}" 
                                    class="form-control @if($errors->has('remail')) border-danger @endif">
                                @if($errors->has('remail'))
                                    <span class="text-danger">{{ $errors->first('remail') }}</span>
                                @endif
                            </div>
                            <div class="formbox-textbox">
                                <label class="form-label">Password<span>*</span></label>
                                <input type="password" name="rpassword" placeholder="Password" 
                                    class="form-control @if($errors->has('rpassword')) border-danger @endif">
                                @if($errors->has('rpassword'))
                                    <span class="text-danger">{{ $errors->first('rpassword') }}</span>
                                @endif
                            </div>
                            <div class="formbox-textbox">
                                <label class="form-label">Confirm Password<span>*</span></label>
                                <input type="password" name="rconfirm_password" placeholder="Confirm Password" 
                                    class="form-control @if($errors->has('rconfirm_password')) border-danger @endif">
                                @if($errors->has('rconfirm_password'))
                                    <span class="text-danger">{{ $errors->first('rconfirm_password') }}</span>
                                @endif
                            </div>
                            <div class="formbox-submit">
                                <button type="submit" class="btn btn-one user-register-button" >Sign Up</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
        
    $(document).ready(function(){

        $("input").keyup(function(event){
            
            $("input#"+event.target.name).removeClass("border-danger");
            $("span."+event.target.name).hide();
            $("span."+event.target.name).html("");
            $("span."+event.target.name).removeClass("text-danger");

        });


        $("form#user-register-form").submit(function(event){

            $("button.user-register-button").html("Processing . . .  <i class='fas fa-spinner fa-pulse'></i>");
            $("button.user-register-button").attr('disabled', true);

        });

        $("form#user-login-form").submit(function(event){

            $("button.user-login-button").html("Processing . . .  <i class='fas fa-spinner fa-pulse'></i>");
            $("button.user-login-button").attr('disabled', true);

        });

    });

</script>


@endsection
