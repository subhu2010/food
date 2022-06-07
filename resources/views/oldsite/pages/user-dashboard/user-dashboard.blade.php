@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<div class="dashboard-section">
    <div class="dashboard-section-space">
        <div class="row g-0">
            <div class="col-lg-3 col-md-3">
                @include('site.pages.user-dashboard.user-dashboard-sidebar')
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="user-dash-content">
                    <div class="user-desc-section">
                        <div class="row ">
                            <div class="col-lg-7">
                                <div class="user-desc bs-space">
                                    <h5 class="user-name">John Doe</h5>
                                    <p class="user-bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="user-avatar-section bs-space d-flex">
                                    <div class="user-avatar me-2 text-center">
                                        <img src="images/avatar/3.jpg" class="img-fluid" alt="food on ways">
                                    </div>
                                    <div class="user-avatar-dtl">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="col-3 fw-700">Name :</td>
                                                    <td class="col">John Doe</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-3 fw-700">Email :</td>
                                                    <td class="col">info@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="col-3 fw-700">Phone :</td>
                                                    <td class="col">9808963258</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <ul class="user-social">
                                            <li>
                                                <a href="#" class="flex-center"><i class="lab la-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex-center"><i class="lab la-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex-center"><i class="lab la-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex-center"><i class="lab la-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-order bs-space deliver-process">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-4">
                                <div class="delivery-process-img">
                                    <img src="images/Chef-bro.svg" class="img-fluid" alt="food on ways">
                                </div>
                                <h3 class="delivery-process-title">Food cooking</h3>
                            </div>
                            <div class="col-md-4">
                                <div class="delivery-process-img">
                                    <img src="images/order-delivery.jpg" class="img-fluid" alt="food on ways">
                                </div>
                                <h3 class="delivery-process-title">Food is on way to delivery</h3>
                            </div>
                            <div class="col-md-4">
                                <div class="delivery-process-img">
                                    <img src="images/door-delivery.svg" class="img-fluid" alt="food on ways">
                                </div>
                                <h3 class="delivery-process-title">Food is on your destination</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="user-overview">
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <h4 class="user-dashboard-title fw-700">Overview</h4>
                                    </div>
                                    <div class="col-lg-9"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="user-overview-card bs-space text-center">
                                            <h5 class="fw-700">total orders</h5>
                                            <h2 class="user-total-count">350</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="user-overview-card bs-space text-center">
                                            <h5 class="fw-700">total returns</h5>
                                            <h2 class="user-total-count">50</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="user-overview-card bs-space text-center">
                                            <h5 class="fw-700">total cancellation</h5>
                                            <h2 class="user-total-count">30</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="user-overview-card bs-space text-center">
                                            <h5 class="fw-700">total wishlist</h5>
                                            <h2 class="user-total-count">20</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <h4 class="user-dashboard-title fw-700">Live Video</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bs-space">
                                        <div class="video-content" style="padding: 0;background: none;height: 265px;">
                                            <video controls autoplay> <source src="images/1.mp4" type="video/mp4"> </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-review">
                        <div class="row mb-3 align-items-center">
                            <div class="col-3">
                                <h4 class="user-dashboard-title fw-700"><i class="las la-list-alt"></i> Review</h4>
                            </div>
                            <div class="col-9">
                                <a href="#" class="view-all">View All</a>
                            </div>
                        </div>
                        <div class="review-list bs-space">
                            <ol>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </li>
                                <li>
                                    <p>Suspendisse a arcu id arcu porta facilisis.</p>
                                </li>
                                <li>
                                    <p>Nam vitae nunc nec erat sollicitudin iaculis iaculis vel dui.</p>
                                </li>
                                <li>
                                    <p>Curabitur malesuada arcu vitae nunc aliquam lobortis.</p>
                                </li>
                                <li>
                                    <p>Maecenas vitae sapien euismod, pellentesque ante vitae, scelerisque nisi.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
