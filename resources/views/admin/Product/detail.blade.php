@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.product.index')}}">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="product-detail">
        <div class="card">
            <div class="card-header">
                <h3 class="title">Product Details</h3>
            </div>
            <div class="card-body">
                <div id="productImg" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item custom-carousel-item active">
                            <img src="{{asset('uploads/Product/'.$product->primary_image)}}" class="d-block w-100" alt="food on ways">
                        </div>
                        @foreach($product->productImages as $img)
                        <div class="carousel-item custom-carousel-item">
                            <img src="{{asset('uploads/Product/'.$img->image_name)}}" class="d-block w-100" alt="food on ways">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productImg" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productImg" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="title">Product Info</h3>
                    </div>
                    <div class="card-body">
                        <div class="product-info-list">
                            <div class="clearfix mb-2">
                                <h6 class="text-primary mb-0 float-start">Price</h6>
                                <h6 class="text-success mb-0 float-end">Rs. {{$product->price}}</h6>
                            </div>
                            <div class="clearfix mb-2">
                                <h6 class="text-primary mb-0 float-start">Discount Amount</h6>
                                <h6 class="text-success mb-0 float-end">Rs. {{number_format(($product->price)-(($product->discount/$product->price)*100),2)}}</h6>
                            </div>
                            <div class="clearfix">
                                <h6 class="text-primary mb-0 float-start">Product Category</h6>
                                @if($product->category != null)
                                <h6 class="text-success mb-0 float-end">{{$product->category->name}}</h6>
                                @else
                                <h6 class="text-success mb-0 float-end">Not Set</h6>
                                @endif
                            </div>
                        </div>
                        <div class="product-info-list">
                            <div class="clearfix mb-2">
                                <h6 class="text-primary mb-0 float-start">Availability</h6>
                                @if($product->status == "available")
                                <a href="#" class="float-end btn btn-sm btn-success">In Stock</a>
                                @else
                                <a href="#" class="float-end btn btn-sm btn-danger">Out Of Stock</a>
                                @endif
                            </div>
                            <div class="clearfix">
                                <h6 class="text-primary mb-0 float-start">Delivery Charge</h6>
                                <h6 class="text-success mb-0 float-end">Free</h6>
                            </div>
                        </div>
                        <div class="product-info-list">
                            <div class="clearfix">
                                <h6 class="text-primary mb-0 float-start">Identification</h6>
                                <h6 class="text-success mb-0 float-end">{{$product->id}}</h6>
                            </div>
                        </div>
                        <div class="product-info-list d-flex justify-content-between">
                            <a href="{{route('admin.product.edit',$product->id)}}" class="float-end btn btn-sm btn-info">Edit</a>
                            <!-- <a href="#" class="float-end btn btn-sm btn-danger">Danger</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="title">Product Detail</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            {{$product->description}}
                        </p>
                        <div class="product-detail-meta d-flex">
                            <div class="today-order text-center">
                                <span><i class="fas fa-heart"></i></span>
                                <p>1286</p>
                                <small>Today Order</small>
                            </div>
                            <div class="today-order text-center">
                                <span><i class="fas fa-heart"></i></span>
                                <p>1286</p>
                                <small>Favourite</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection