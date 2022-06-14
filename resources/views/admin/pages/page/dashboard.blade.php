@extends("admin.layouts.layout")

@section("page_title", "Admin Dashboard")

@section("content")

<div id="main-content">

    <!-- analytic card -->
    <div class="card">
        <div class="card-header">
            <h3 class="title float-md-start">Analytics Overview</h3>
            <div class="float-md-end">
                <select class="form-select" id="basicSelect">
                    <option>Last 30 Days</option>
                    <option>Last 2 Weeks</option>
                    <option>Last 1 Weeks</option>
                </select>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="float-start text-light mb-0">
                                Sells Graph
                                <span class="d-block">23.4k</span>
                            </h4>
                            <span class="badge bg-light-primary float-end"><i class="fas fa-long-arrow-alt-up me-1"></i>3.2%</span>
                        </div>
                        <div class="card-body bg-primary p-0">
                            <canvas id="sellGraph"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="float-start text-light mb-0">
                                Sells Graph
                                <span class="d-block">23.4k</span>
                            </h4>
                            <span class="badge bg-light-primary float-end"><i class="fas fa-long-arrow-alt-up me-1"></i>3.2%</span>
                        </div>
                        <div class="card-body bg-primary p-0">
                            <canvas id="sellGraph1"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="float-start text-light mb-0">
                                Sells Graph
                                <span class="d-block">23.4k</span>
                            </h4>
                            <span class="badge bg-light-primary float-end"><i class="fas fa-long-arrow-alt-up me-1"></i>3.2%</span>
                        </div>
                        <div class="card-body bg-primary p-0">
                            <canvas id="sellGraph2"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="float-start text-light mb-0">
                                Sells Graph
                                <span class="d-block">23.4k</span>
                            </h4>
                            <span class="badge bg-light-primary float-end"><i class="fas fa-long-arrow-alt-up me-1"></i>3.2%</span>
                        </div>
                        <div class="card-body bg-primary p-0">
                            <canvas id="sellGraph3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- recent order request -->
    <div class="recent-order-request">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Recent Order Requested</h3>
                <div class="float-md-end">
                    <a href="#" class="btn btn-outline-primary">View All</a>
                </div>
            </div>
            <div class="card-body order-table">
                <table>
                    <thead>
                        <tr>
                            <th>Food Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Product Id</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="avatar avatar-lg me-3">
                                    <img src="{{ asset('admin-assets/images/dish/2.jpg') }}" alt="" srcset="">
                                </div>Pizza
                            </td>
                            <td>Rs. 1550</td>
                            <td>2</td>
                            <td>6734512</td>
                            <td>
                                <a href="#" class="btn icon btn-sm btn-primary m-1"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn icon btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                                <a href="#" class="btn icon btn-sm btn-success m-1"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="avatar avatar-lg me-3">
                                    <img src="{{ asset('admin-assets/images/dish/1.jpg') }}" alt="" srcset="">
                                </div>Momo
                            </td>
                            <td>Rs. 500</td>
                            <td>2</td>
                            <td>6734522</td>
                            <td>
                                <a href="#" class="btn icon btn-sm btn-primary m-1"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn icon btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                                <a href="#" class="btn icon btn-sm btn-success m-1"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="avatar avatar-lg me-3">
                                    <img src="{{ asset('admin-assets/images/dish/3.jpg') }}" alt="" srcset="">
                                </div>Burger
                            </td>
                            <td>Rs. 850</td>
                            <td>2</td>
                            <td>6737512</td>
                            <td>
                                <a href="#" class="btn icon btn-sm btn-primary m-1"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn icon btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                                <a href="#" class="btn icon btn-sm btn-success m-1"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="title float-start">
                        Market Overview
                        <span class="sub-title">Client Order Overview</span>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="chartbox">
                        <canvas id="marketOverview" width="400" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card earning">
                <div class="card-header">
                    <h3 class="title float-start">
                        Total Earnings
                    </h3>
                </div>
                <div class="card-body">
                    <table class="earning-list">
                        <tbody>
                            <tr>
                                <td>
                                    <span class="earning-place text-primary">
                                        <i class="fas fa-university"></i>
                                    </span>
                                </td>
                                <td>
                                    <span class="earning-total text-success">Rs. 51002</span>
                                </td>
                                <td>
                                    <small class="earning-day text-info">Today</small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="earning-place text-primary">
                                        <i class="fas fa-star"></i>
                                    </span>
                                </td>
                                <td>
                                    <span class="earning-total text-success">Rs. 51002</span>
                                </td>
                                <td>
                                    <small class="earning-day text-info">Today</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="earning-branch">
                        <div class="form-check p-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="customCheck" id="customColorCheck1">
                                <label class="form-check-label d-block" for="customColorCheck1">Shankhamul branch</label>
                            </div>
                        </div>
                        <div class="form-check p-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="customCheck" id="customColorCheck1">
                                <label class="form-check-label d-block" for="customColorCheck1">koteshwor branch</label>
                            </div>
                        </div>
                        <div class="form-check p-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="customCheck" id="customColorCheck1">
                                <label class="form-check-label d-block" for="customColorCheck1">Tinkune branch</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5">
            <!-- monthly revenue -->
            <section class="section monthly-revenue">
                <div class="card">
                    <div class="card-header">
                        <h3 class="title float-md-start">Monthly Revenue</h3>
                        <div class="float-md-end">
                            <a href="#" class="btn btn-outline-primary">Feburary</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="progress-weekily">
                            <label>Week 1</label>
                            <div class="progress progress-primary  mb-4">
                                <div class="progress-bar progress-label" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-weekily">
                            <label>Week 2</label>
                            <div class="progress progress-primary  mb-4">
                                <div class="progress-bar progress-label" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-weekily">
                            <label>Week 3</label>
                            <div class="progress progress-primary  mb-4">
                                <div class="progress-bar progress-label" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-weekily">
                            <label>Week 4</label>
                            <div class="progress progress-primary  mb-4">
                                <div class="progress-bar progress-label" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="title float-start">
                        Order Timing Chart
                        <span class="sub-title">Client Order Overview</span>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="chartbox">
                        <canvas id="orderTiming"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Recently Placed Order</h3>
                <div class="float-md-end">
                    <a href="#" class="btn btn-outline-primary">View All</a>
                </div>
            </div>
            <div class="card-body order-table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Order name</th>
                            <th>Customer Name</th>
                            <th>Location</th>
                            <th>Order Status</th>
                            <th>Delivered Time</th>
                            <th>Price</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>French Fries</td>
                            <td>Sarita Neupane</td>
                            <td>New baneshwor</td>
                            <td><span class="btn btn-sm btn-warning">Pending</span></td>
                            <td>10:00</td>
                            <td>Rs 230</td>
                            <td>
                                <a href="#" class="btn icon btn-sm btn-primary m-1"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn icon btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                                <a href="#" class="btn icon btn-sm btn-success m-1"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Pizza</td>
                            <td>Rita Sakya</td>
                            <td>Koteshwor</td>
                            <td><span class="btn btn-sm btn-success">Delivered</span></td>
                            <td>10:00</td>
                            <td>Rs 560</td>
                            <td>
                                <a href="#" class="btn icon btn-sm btn-primary m-1"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn icon btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                                <a href="#" class="btn icon btn-sm btn-success m-1"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Chicken Biryani</td>
                            <td>Bimal Sharma</td>
                            <td>Tinkune</td>
                            <td><span class="btn btn-sm btn-danger">Cancelled</span></td>
                            <td>10:00</td>
                            <td>Rs 560</td>
                            <td>
                                <a href="#" class="btn icon btn-sm btn-primary m-1"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn icon btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                                <a href="#" class="btn icon btn-sm btn-success m-1"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Pizza</td>
                            <td>Rita Sakya</td>
                            <td>Koteshwor</td>
                            <td><span class="btn btn-sm btn-success">Delivered</span></td>
                            <td>10:00</td>
                            <td>Rs 560</td>
                            <td>
                                <a href="#" class="btn icon btn-sm btn-primary m-1"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn icon btn-sm btn-danger m-1"><i class="fas fa-trash"></i></a>
                                <a href="#" class="btn icon btn-sm btn-success m-1"><i class="fas fa-print"></i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- trending order -->
    <section class="trending-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-start">
                    Trending Order
                </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="trending-card">
                            <div class="trending-card-img">
                                <img src="{{ asset('admin-assets/images/dish/1.jpg') }}" class="img-fluid" alt="food on ways">
                            </div>
                            <div class="trending-card-title mt-2 px-2 clearfix">
                                <h5 class="text-primary float-start" title="Chicken Kabab">Chicken Kabab</h5>
                                <span class="float-end text-success">Rs 545</span>
                            </div>
                            <div class="trending-card-content px-2 d-flex align-items-center justify-content-between">
                                <div class="trending-total-order">
                                    <h5 class="text-danger">Order</h5>
                                    <h6 class="text-primary">15</h6>
                                </div>
                                <div class="trending-total-income">
                                    <h5 class="text-danger">Income</h5>
                                    <h6 class="text-primary">Rs 8956</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="trending-card">
                            <div class="trending-card-img">
                                <img src="{{ asset('admin-assets/images/dish/1.jpg') }}" class="img-fluid" alt="food on ways">
                            </div>
                            <div class="trending-card-title mt-2 px-2 clearfix">
                                <h5 class="text-primary float-start" title="Chicken Kabab">Chicken Kabab</h5>
                                <span class="float-end text-success">Rs 545</span>
                            </div>
                            <div class="trending-card-content px-2 d-flex align-items-center justify-content-between">
                                <div class="trending-total-order">
                                    <h5 class="text-danger">Order</h5>
                                    <h6 class="text-primary">15</h6>
                                </div>
                                <div class="trending-total-income">
                                    <h5 class="text-danger">Income</h5>
                                    <h6 class="text-primary">Rs 8956</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="trending-card">
                            <div class="trending-card-img">
                                <img src="{{ asset('admin-assets/images/dish/1.jpg') }}" class="img-fluid" alt="food on ways">
                            </div>
                            <div class="trending-card-title mt-2 px-2 clearfix">
                                <h5 class="text-primary float-start" title="Chicken Kabab">Chicken Kabab</h5>
                                <span class="float-end text-success">Rs 545</span>
                            </div>
                            <div class="trending-card-content px-2 d-flex align-items-center justify-content-between">
                                <div class="trending-total-order">
                                    <h5 class="text-danger">Order</h5>
                                    <h6 class="text-primary">15</h6>
                                </div>
                                <div class="trending-total-income">
                                    <h5 class="text-danger">Income</h5>
                                    <h6 class="text-primary">Rs 8956</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="trending-card">
                            <div class="trending-card-img">
                                <img src="{{ asset('admin-assets/images/dish/1.jpg') }}" class="img-fluid" alt="food on ways">
                            </div>
                            <div class="trending-card-title mt-2 px-2 clearfix">
                                <h5 class="text-primary float-start" title="Chicken Kabab">Chicken Kabab</h5>
                                <span class="float-end text-success">Rs 545</span>
                            </div>
                            <div class="trending-card-content px-2 d-flex align-items-center justify-content-between">
                                <div class="trending-total-order">
                                    <h5 class="text-danger">Order</h5>
                                    <h6 class="text-primary">15</h6>
                                </div>
                                <div class="trending-total-income">
                                    <h5 class="text-danger">Income</h5>
                                    <h6 class="text-primary">Rs 8956</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-xl-7">
            <!-- support section -->
            <div class="card">
                <div class="card-header">
                    <h3 class="title float-md-start">Recent Support Tickets</h3>
                    <div class="float-md-end">
                        <a href="#" class="btn btn-outline-primary">View All</a>
                    </div>
                </div>
                <div class="card-body">

                    {{-- @forelse($data["tickets"] as $ticket)
                    <div class="support-list">
                        <div class="avatar avatar-lg me-3">
                            <img src="{{ asset('admin-assets/images/faces/2.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="support-content">
                            <div class="support-content-header clearfix">
                                <h5 class="title float-start text-primary">
                                    @if($ticket->user != null)
                                    {{$ticket->user->name}}
                                    @else
                                    User Not Defined
                                    @endif
                                    <span class="sub-title d-block mt-2 fs-6"><i class="far fa-calendar-alt me-2"></i>date('d-m-Y', strtotime($ticket->updated_at));</span>
                                </h5>
                                <div class="float-end">
                                    <a href="#" class="btn btn-sm btn-danger">Closed</a>
                                </div>
                                <p>{{$ticket->message}}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>There are currently no open tickets ...</p>
                    @endforelse --}}
                    
                    <div class="support-list">
                        <div class="avatar avatar-lg me-3">
                            <img src="{{ asset('admin-assets/images/faces/2.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="support-content">
                            <div class="support-content-header clearfix">
                                <h5 class="title float-start text-primary">
                                    Ritika josi
                                    <span class="sub-title d-block mt-2 fs-6"><i class="far fa-calendar-alt me-2"></i>December 24, 2021</span>
                                </h5>
                            </div>
                            <p>Lorem Ipsum has been the industry's standard the 1500s, when an unknown printer took a galley of typ to make a type specimen book. It has survived not only fi</p>
                        </div>
                    </div>
                    <div class="support-list">
                        <div class="avatar avatar-lg me-3">
                            <img src="{{ asset('admin-assets/images/faces/2.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="support-content">
                            <div class="support-content-header clearfix">
                                <h5 class="title float-start text-primary">
                                    Ritika josi
                                    <span class="sub-title d-block mt-2 fs-6"><i class="far fa-calendar-alt me-2"></i>December 24, 2021</span>
                                </h5>
                                <div class="float-end">
                                    <a href="#" class="btn btn-sm btn-danger">Closed</a>
                                </div>
                            </div>
                            <p>Lorem Ipsum has been the industry's standard the 1500s, when an unknown printer took a galley of typ to make a type specimen book. It has survived not only fi</p>
                        </div>
                    </div>
                    <div class="support-list">
                        <div class="avatar avatar-lg me-3">
                            <img src="{{ asset('admin-assets/images/faces/2.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="support-content">
                            <div class="support-content-header clearfix">
                                <h5 class="title float-start text-primary">
                                    Ritika josi
                                    <span class="sub-title d-block mt-2 fs-6"><i class="far fa-calendar-alt me-2"></i>December 24, 2021</span>
                                </h5>
                                <div class="float-end">
                                    <a href="#" class="btn btn-sm btn-danger">Closed</a>
                                </div>
                            </div>
                            <p>Lorem Ipsum has been the industry's standard the 1500s, when an unknown printer took a galley of typ to make a type specimen book. It has survived not only fi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <!-- chat box -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <div class="media d-flex align-items-center">
                            <div class="avatar me-3">
                                <img src="{{ asset('admin-assets/images/faces/1.jpg') }}" alt="" srcset="">
                                <span class="avatar-status bg-success"></span>
                            </div>
                            <div class="name flex-grow-1">
                                <h6 class="mb-0">Fred</h6>
                                <span class="text-xs">Online</span>
                            </div>
                            <button class="btn btn-sm">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body pt-4 bg-grey">
                        <div class="chat-content">
                            <div class="chat">
                                <div class="chat-body">
                                    <div class="float-end me-4">
                                        <div class="chat-message float-end">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                        <div class="chat-message float-end">Duis non augue consequat, suscipit nulla vel, laoreet velit.
                                        </div>
                                    </div>
                                    <div class="avatar" style="height: 32px;">
                                        <img src="{{ asset('admin-assets/images/faces/1.jpg') }}" alt="" srcset="">
                                        <span class="avatar-status bg-success"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-body">
                                    <div class="avatar" style="height: 32px;">
                                        <img src="{{ asset('admin-assets/images/faces/1.jpg') }}" alt="" srcset="">
                                        <span class="avatar-status bg-success"></span>
                                    </div>
                                    <div class="float-start ms-4">
                                        <div class="chat-message float-start">Morbi at justo aliquam, interdum quam id, commodo urna.
                                        </div>
                                        <div class="chat-message float-start">Pellentesque pharetra tellus molestie, commodo magna in, consectetur mauris.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="message-form d-flex flex-direction-column align-items-center">
                            <a href="http://" class="black"><i data-feather="smile"></i></a>
                            <div class="d-flex flex-grow-1 ml-4">
                                <input type="text" class="form-control" placeholder="Type your message..">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection