@extends('site.layouts.layout')

@section('page_title', 'Food On Ways')

@section('content')

    <section class="breadcrumb-banner">
        <img src="{{ asset('site-assets/images/3.jpg') }}" class="img-fluid">
        <div class="banner-content">
            <h1>Checkout</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container">
        <section class="light-border min-order ma-t">
            <small><i class="fa-solid fa-circle-info"></i></small>
            <p> Minimum order amount for <span>Free Delivery</span> is <span><strong>$49.99</strong></span>. You need just
                <span><strong>$38.00</strong></span> more for <span>Free Delivery</span>. <a href="javascript:void(0)"
                    class="text-danger">Continue Shopping</a>
            </p>
        </section>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section class="light-border ma-t">
                    <div class="delivery-time">
                        <h5><span><i class="las la-clock"></i></span> Specify Delivery Time (optional)</h5>
                        <div class="row mt-4">
                            <div class="col-md-5 col-sm-5">
                                <div class="form-group">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="form-group">
                                    <input type="time" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="light-border ma-t">
                    <div class="delivery-time">
                        <h5><span><i class="las la-shopping-basket"></i></span> Order Type</h5>
                        <div class="row mt-4">
                            <div class="col-md-5 col-sm-5">
                                <div class="form-group">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label text-dark" for="flexRadioDefault1">
                                            Home Delivery
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="form-group">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label text-dark" for="flexRadioDefault2">
                                            Pickup
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container ma-t">
        <div class="row form-billing">
            <div class="col-md-7 col-sm-6">
                <h3>Billing & Shipping</h3>
                <form action="">
                    <div class="form-group">
                        <label for="">first name<span>*</span></label>
                        <input type="text" class="form-control" placeholder="Jhon">
                    </div>
                    <div class="form-group">
                        <label for="">last name<span>*</span></label>
                        <input type="text" class="form-control" placeholder="Doe">
                    </div>
                    <div class="form-group">
                        <label for="">providence<span>*</span></label>
                        <select name="" class="form-select" id="" style="background: #f8f8f8;color:#666;">
                            <option selected>-- Select Providence --</option>
                            <option value="providence 1">Providence 1</option>
                            <option value="providence 2">Providence 2</option>
                            <option value="providence 3">Providence 3</option>
                            <option value="providence 4">Providence 4</option>
                            <option value="providence 5">Providence 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">street address<span>*</span></label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">town / city<span>*</span></label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">phone number<span>*</span></label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">email address<span>*</span></label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <br>
                    <br>
                    <h3 class="mb-3">Additional information</h3>
                    <div class="form-group">
                        <label for="" class="text-dark">ORDER NOTES (OPTIONAL)</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="5"
                            placeholder="Notes about your order e.g. special notes for delivery"></textarea>
                    </div>
                </form>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="light-border">
                    <div class="product-section-list clearfix">
                        <div class="change-branch delivery-info m-0">
                            <span class="estimated-time">40 min.</span>
                            <span>
                                <strong>Delivery from:</strong>
                                Worldwide
                            </span>
                            <span>
                                <strong>To:</strong>
                                <span class="full-address">1 Bhattarai Marg, 44600, Kathmandu, Nepal</span>
                                <a href="javascript:" class="button"></a>
                            </span>
                        </div>
                    </div>
                    <table class="checkout-box">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pro-name">Bacon Cheeseburger <span>* 1</span></td>
                                <td class="pro-price">Rs 1248</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Subtotal</td>
                                <td>Rs 1248</td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td>Rs 124</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td class="tot-price">Rs 1500</td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="payment-box">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <div class="form-check" id="headingOne">
                                    <div data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <input type="radio" checked class="form-check-input" id="radioOne"
                                            name="fav_language" value=" CASH ON DELIVERY">
                                        <label class="form-check-label" for="radioOne"> CASH ON DELIVERY</label>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="form-check" id="headingTwo">
                                    <div data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                        aria-controls="collapseTwo">
                                        <input type="radio" class="form-check-input" id="radioTwo"
                                            name="fav_language" value="CREDIT CARD (STRIPE)">
                                        <label class="form-check-label" for="radioTwo">Online Payment</label>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="payment-list">
                                            <li class="payment-icon">
                                                <a href="javascript:void(0)">
                                                    <img src="{{ asset('site-assets/images/e-sewa.png') }}"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                            <li class="payment-icon">
                                                <a href="javascript:void(0)">
                                                    <img src="{{ asset('site-assets/images/khalti.png') }}"
                                                        alt="" class="img-fluid">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-p">
                        <p>Your personal data will be used to process your order, support your experience throughout this
                            website, and for other purposes described in our <a href="javascript:void(0)"
                                class="text-danger">privacy policy</a>.</p>
                    </div>
                    <div class="form-check t-m">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I HAVE READ AND AGREE TO THE WEBSITE <span><strong><a href="javascript:void(0)">TERMS AND CONDITIONS *</a></strong></span>
                        </label>
                    </div>
                    <button class="btn btn-one">PLACE ORDER</button>
                </div>
            </div>
        </div>
    </div>

@endsection
