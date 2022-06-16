@extends('site.layouts.layout')

@section("page_title", "User Dashboard")

@section('content')

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid" style="height: 50vh;">
    <div class="banner-content">
        <h1>User Order</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex align-items-center justify-content-center">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('user.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Order</li>
            </ol>
        </nav>
    </div>
</section>

<div class="container">
    <div class="dashboard-section">
        <div class="dashboard-section-space">
            <div class="row g-0">
                <div class="col-lg-3 col-md-3">
                    
                    @include('user.includes.side-bar')

                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="user-dash-content">
                        <h4 class="user-dashboard-title fw-700">My Orders</h4>
                        <div class="user-order bs-space mt-3">
                            <form>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <button class="btn" type="button" id="button-addon1"><i class="fas fa-search"></i></button>
                                            <input type="text" class="form-control" name="" placeholder="Search by product name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4">
                                        <div class="row align-items-center">
                                            <label class="form-label col-4 text-end mb-0">Show</label>
                                            <div class="col-8">
                                                <select class="form-select">
                                                    <option selected="Last 10 Days">Last 10 Days</option>
                                                    <option >Last 20 Days</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="user-order-table mt-3">
                                <table class="">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Date</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>2021/01/01</td>
                                            <td>Family cambo pack</td>
                                            <td>1</td>
                                            <td>Rs. 524</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>2021/01/01</td>
                                            <td>Family cambo pack</td>
                                            <td>2</td>
                                            <td>Rs. 524</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>2021/01/01</td>
                                            <td>Family cambo pack</td>
                                            <td>5</td>
                                            <td>Rs. 524</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="user-dashboard-title fw-700">My Returns</h4>
                        <div class="user-order bs-space mt-3">
                            <div class="user-order-table">
                                <table class="">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Date</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>2021/01/01</td>
                                            <td>Family cambo pack</td>
                                            <td>1</td>
                                            <td>Rs. 524</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>2021/01/01</td>
                                            <td>Family cambo pack</td>
                                            <td>2</td>
                                            <td>Rs. 524</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>2021/01/01</td>
                                            <td>Family cambo pack</td>
                                            <td>5</td>
                                            <td>Rs. 524</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="user-dashboard-title fw-700">My Cancellations</h4>
                        <div class="user-order bs-space mt-3">
                            <div class="user-order-table">
                                <table class="">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Date</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>2021/01/01</td>
                                            <td>Family cambo pack</td>
                                            <td>1</td>
                                            <td>Rs. 524</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>2021/01/01</td>
                                            <td>Family cambo pack</td>
                                            <td>2</td>
                                            <td>Rs. 524</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>2021/01/01</td>
                                            <td>Family cambo pack</td>
                                            <td>5</td>
                                            <td>Rs. 524</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection