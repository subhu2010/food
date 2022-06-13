@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<div class="page-banner">
    <img src="{{ asset('site-assets/images/carousel/3.jpg') }}" class="img-fluid" alt="food on ways">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="las la-long-arrow-alt-left"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Signup Or Login</li>
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
                                <a href="" class="button-facebook">
                                    <i class="social-icon lab la-facebook-f"></i>
                                </a>
                                <a href="" class="button-google">
                                    <i class="social-icon lab la-google"></i>
                                </a>
                            </div>
                        </div>
                        <div class="formbox-or">
                            <div class="or-line"></div>
                            <div class="or">OR</div>
                        </div>
                        <div class="formbox-textbox">
                            <label class="form-label">Enter Email <span>*</span></label>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="formbox-textbox">
                            <label class="form-label">Enter Password <span>*</span></label>
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <div class="formbox-forgot">
                            <a href="">Forgot Password?</a>
                        </div>
                        <div class="formbox-submit">
                            <!-- <button type="button" class="btn btn-one">Login</button> -->
                            <a href="{{url('user-dashboard')}}" class="btn btn-one">Login</a>
                        </div>
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
                                <a href="" class="button-facebook">
                                    <i class="social-icon lab la-facebook-f"></i>
                                </a>
                                <a href="" class="button-google">
                                    <i class="social-icon lab la-google"></i>
                                </a>
                            </div>
                        </div>
                        <div class="formbox-or">
                            <div class="or-line"></div>
                            <div class="or">OR</div>
                        </div>
                        <div class="formbox-textbox">
                            <label class="form-label">Enter Full Name <span>*</span></label>
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="formbox-textbox">
                            <label class="form-label">Enter Email <span>*</span></label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="formbox-textbox">
                            <label class="form-label">Enter Password <span>*</span></label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="formbox-textbox">
                            <label class="form-label">Enter Re-Password <span>*</span></label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="formbox-submit">
                            <button type="button" class="btn btn-one">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
