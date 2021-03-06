<div class="d-xl-none float-end ms-4 mb-canvas">
    <a class="btn btn-mb-bar" data-bs-toggle="offcanvas" href="#offcanvasMobile" role="button"
        aria-controls="offcanvasMobile">
        <i class="las la-bars"></i>
    </a>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        id="offcanvasMobile" aria-labelledby="offcanvasMobileLabel">
        <div class="offcanvas-header">
            <ul class="nav nav-pills justify-content-between w-100" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="offcanvas-title active" id="pills-menu-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-menu" role="tab" aria-controls="pills-menu" aria-selected="true">Menu</a>
                </li>

                @guest
                <li class="nav-item" role="presentation">
                    <a class="offcanvas-title" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login"
                        role="tab" aria-controls="pills-login" aria-selected="false">
                        <i class="lar la-user"></i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#" class="offcanvas-title" id="pills-cart-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-cart" role="tab" aria-controls="pills-cart" aria-selected="false">
                        <i class="las la-shopping-cart"></i>
                    </a>
                </li>
                @endguest

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
                                <a class="nav-link" href="{{ route('site.landingPage') }}"> Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;"> Cakes </a>
                            </li>
                            <li class="nav-item has-submenu">
                                <a class="nav-link" href="javascript:;"> our menu </a>
                                <ul class="submenu collapse">
                                    <li><a class="nav-link" href="javascript:;">pizza </a></li>
                                    <li><a class="nav-link" href="javascript:;">burger </a></li>
                                    <li><a class="nav-link" href="javascript:;">momo </a> </li>
                                    <li><a class="nav-link" href="javascript:;">sizzler </a> </li>
                                    <li><a class="nav-link" href="javascript:;">chicken roast </a> </li>
                                    <li><a class="nav-link" href="javascript:;">french fries </a> </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.cartlist') }}"> Cart </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                @guest
                <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                    <div class="login-section ">
                        <div>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link login-btn active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Login</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link login-btn" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Register</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <form>
                                        <div class="form-group mb-4">
                                            <label>USERNAME OR EMAIL ADDRESS *</label>
                                            <input class="form-control"></input>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>PASSWORD *</label>
                                            <div class="password">
                                                <input class="form-control" name="password" type="password"
                                                    id="m-password" placeholder="Password">
                                                <div class="form-alert-icon" onclick="showPassword('m-password',this);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group ">
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input bg-white"
                                                    id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                            </div>
                                        </div>
                                        <hr class="bg-white">
                                        <div class="form-group mb-4 text-center">
                                            <a href="#">
                                                <img src="{{ asset('site-assets/images/facebook.png') }}"
                                                    class="img-fluid"></img>
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('site-assets/images/google.png') }}"
                                                    class="img-fluid"></img>
                                            </a>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-one mb-4">Login</button>
                                        <div class="form-group">
                                            <a href="#">Lost your password?</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <form>
                                        <div class="form-group mb-4">
                                            <label>USERNAME OR EMAIL ADDRESS *</label>
                                            <input class="form-control"></input>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>PASSWORD *</label>
                                            <div class="password">
                                                <input class="form-control" name="password" type="password"
                                                    id="mn-password" placeholder="Password">
                                                <div class="form-alert-icon"
                                                    onclick="showPassword('mn-password',this);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group mb-4">
                                            <label>CONFIRM PASSWORD *</label>
                                            <div class="password">
                                                <input class="form-control" name="password" type="password"
                                                    id="mc-password" placeholder="Password">
                                                <div class="form-alert-icon"
                                                    onclick="showPassword('mc-password',this);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="bg-white">
                                        <div class="form-group mb-4 text-center">
                                            <a href="#">
                                                <img src="{{ asset('site-assets/images/facebook.png') }}"
                                                    class="img-fluid"></img>
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('site-assets/images/google.png') }}"
                                                    class="img-fluid"></img>
                                            </a>
                                        </div>
                                        <div class="form-group mb-4">
                                            Your personal data will be used to support your experience throughout this
                                            website, to manage access to your account, and for other purposes described
                                            in our <a href="#">privacy policy</a>.
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-one">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endguest

            </div>
        </div>
    </div>
</div>
