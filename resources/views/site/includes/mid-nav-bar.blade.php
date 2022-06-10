<div class="container">
    <div class="header-middle clearfix">
        
        <div class="header-middle-message">
            <small class="d-block">Order Online or Call Now:</small>
            <span class="d-block">
                <a href="tel:{{ $data['setting']->phone??'+977 987654321' }}">
                    <i class="las la-phone"></i>
                    {{ $data['setting']->phone??'+977 987654321' }}
                </a>
            </span>
            <a href="tel:{{ $data['setting']->phone??'+977 987654321' }}" class="d-md-none"><i class="las la-phone"></i></a>
        </div>

        @include("site.includes.mobile-nav")

        <div class="header-middle-cart clearfix">
            <div class="user-icon" id="loginBtn">
                <a href="#">
                    <i class="lar la-user"></i>
                </a>
            </div>
            <div class="login-section ">
                <div>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link login-btn active" id="pills-home-login-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home-login" type="button" role="tab" aria-controls="pills-home-login"
                                aria-selected="true">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link login-btn" id="pills-home-register-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home-register" type="button" role="tab"
                                aria-controls="pills-home-register" aria-selected="false">Register</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home-login" role="tabpanel"
                            aria-labelledby="pills-home-login-tab">
                            <form>
                                <div class="form-group mb-4">
                                    <label>USERNAME OR EMAIL ADDRESS *</label>
                                    <input class="form-control"></input>
                                </div>
                                <div class="form-group mb-4">
                                    <label>PASSWORD *</label>
                                    <input class="form-control"  type="password"><a href="#"
                                        class="password-control"></a></input>

                                </div>
                                <div class="form-group ">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input bg-dark" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group mb-4 text-center">
                                    <a href="{{ route('user.social.login', 'facebook') }}">
                                        <img src="{{ asset('site-assets/images/facebook.png') }}" class="img-fluid"></img>
                                    </a>
                                    <a href="{{ route('user.social.login', 'google') }}">
                                        <img src="{{ asset('site-assets/images/google.png') }}" class="img-fluid"></img>
                                    </a>
                                </div>
                                <button type="submit" class="btn btn-primary btn-one mb-4">Login</button>
                                <div class="form-group">
                                    <a href="#">Lost your password?</a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-home-register" role="tabpanel"
                            aria-labelledby="pills-home-register-tab">
                            <form>
                                <div class="form-group mb-4">
                                    <label>USERNAME OR EMAIL ADDRESS *</label>
                                    <input class="form-control"></input>
                                </div>
                                <div class="form-group mb-4">
                                    <label>PASSWORD *</label>
                                    <input class="form-control"  type="password"><a href="#"
                                        class="password-control"></a></input>

                                </div><div class="form-group mb-4">
                                    <label>CONFIRM PASSWORD *</label>
                                    <input class="form-control"  type="password"><a href="#"
                                        class="password-control"></a></input>

                                </div>
                                <hr>
                                <div class="form-group mb-4 text-center">
                                    <a href="#">
                                        <img src="{{asset('site-assets/images/facebook.png')}}" class="img-fluid"></img>
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('site-assets/images/google.png')}}" class="img-fluid"></img>
                                    </a>
                                </div>
                                <div class="form-group">
                                    Your personal data will be used to support your experience throughout this website, to
                                    manage access to your account, and for other purposes described in our <a href="#">privacy
                                        policy</a>.
                                </div>
                                <button type="submit" class="btn btn-primary btn-one">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-icon">
                <a href="#">
                    <i class="lar la-heart"></i>
                    <span class="count">0</span>
                </a>
            </div>
            <div class="cart-icon">
                <a href="{{url('cart')}}">
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