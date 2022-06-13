@extends('site.layouts.layout')

@section("page_title", "My CartList")

@section('content')

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid" style="height: 50vh;">
    <div class="banner-content">
        <h1>User Cartlist</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex align-items-center justify-content-center">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('user.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Cartlist</li>
            </ol>
        </nav>
    </div>
</section>

<div class="container">
    <div class="cart-list mt-5">
        <div class="row">
            <div class="col-lg-8">
                <table class="" cellspacing="0">
                    <tbody>
                        <tr class="cart-item">
                            <td class="product-remove">
                                <a href="javascript">
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                            <td class="product-thumbnail">
                                <img src="{{asset('site-assets/images/menu/1.png')}}" height="50" alt="">
                            </td>
                            <td class="product-name" width="40%">
                                <a href="javascript:void(0)">
                                    Jalapeno Angus Burger
                                </a>
                            </td>
                            <td class="product-price">
                                <span class="cart-item-price">Rs 453</span>
                            </td>
                            <td class="product-quantity">
                                <span>1</span>
                            </td>
                            <td class="product-subtotal">
                                Rs 453
                            </td>
                        </tr>
                        <tr class="cart-item">
                            <td class="product-remove">
                                <a href="javascript">
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                            <td class="product-thumbnail">
                                <img src="{{asset('site-assets/images/menu/1.png')}}" height="50" alt="">
                            </td>
                            <td class="product-name" width="40%">
                                <a href="javascript:void(0)">
                                    Jalapeno Angus Burger
                                </a>
                            </td>
                            <td class="product-price">
                                <span class="cart-item-price">Rs 453</span>
                            </td>
                            <td class="product-quantity">
                                <span>1</span>
                            </td>
                            <td class="product-subtotal">
                                Rs 453
                            </td>
                        </tr>
                        <!-- <tr class="cart-item">
                            <td colspan="6" class="actions">
                                <button></button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="cart-collaterl">
                    <h2>YOU MAY BE INTERESTED IN</h2>
                    <div class="cross-sell">
                        <div class="image">
                            <a href="{{url('item-detail')}}">
                                <img src="{{asset('site-assets/images/menu/8.png')}}" alt="" class="img-fluid">
                            </a>
                            <span class="price">Rs 45</span>
                            <a href="javascript:void(0)" class="wishlist"><i class="lar la-heart"></i></a>
                        </div>
                        <div class="content">
                            <h6>
                                <a href="{{url('item-detail')}}">
                                    Burger
                                </a>
                            </h6>
                            <button class="cart-btn">order now</button>
                        </div>
                    </div>
                    <div class="cart-total mt-4">
                        <h2>cart total</h2>
                        <table cellspacing="0" class="cart-table">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td>Rs 100</td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td>Rs 100</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{url('checkout-confirm')}}" class="btn checkout">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="overlayCart" class="overlay-cart">
    <button type="button" class="btn-close" aria-label="Close"></button>
    <div class="container">
        <div class="items-details mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme quick-view-slide">
                        <div class="item">
                            <img src="{{ asset('site-assets/images/item/1.1.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{ asset('site-assets/images/item/1.2.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-summary">
                        <h1 class="heading-title">Bacon Cheeseburger</h1>
                        <div class="short-desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis id ratione ipsum.
                                Similique ducimus</p>
                            <ul class="item-weight-holder">
                                <li>
                                    <span class="item-weight">
                                        Serving size:
                                        <span class="item-weight-values">
                                            290 g </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="nutrition-summary">
                            <ul class="nutrition-list">
                                <li class="nutrition-energy">
                                    <span class="nutrition-list-label">Energy</span>
                                    430 Cal
                                    <span class="nutrition-list-label">DI*</span>
                                    22%
                                </li>
                                <li class="nutrition-energy">
                                    <span class="nutrition-list-label">PROTEIN</span>
                                    20 g
                                    <span class="nutrition-list-label">DI*</span>
                                    50%
                                </li>
                                <li class="nutrition-energy">
                                    <span class="nutrition-list-label">FAT</span>
                                    10 g
                                    <span class="nutrition-list-label">DI*</span>
                                    15%
                                </li>
                                <li class="nutrition-energy">
                                    <span class="nutrition-list-label">SAT FAT</span>
                                    2 g
                                    <span class="nutrition-list-label">DI*</span>
                                    10%
                                </li>
                                <li class="nutrition-energy">
                                    <span class="nutrition-list-label">CARBS</span>
                                    10 Cal
                                    <span class="nutrition-list-label">DI*</span>
                                    3%
                                </li>
                            </ul>
                            <span class="nutrition-di">*DI: Recommended Daily Intake based on 2000 calories
                                diet</span>
                            <span class="nutrition-allergens fw-600">Allergens: Milk, Eggs, Soy, Glutten</span>
                        </div>
                        <p class="price my-4">
                            Rs 800
                        </p>
                        <div class="addon-order">
                            <div class="quantity">
                                <input type="number" min="1" max="100" value="1" />
                            </div>
                            <button type="submit" class="btn cart-btn">Add</button>
                            <div class="addon-wishlist">
                                <i class="lar la-heart"></i>
                            </div>
                        </div>
                        <div class="product-meta">
                            <span class="posted-in">Category:</span><a href="javascrip:void(0)" rel="tag">Burgers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection