@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.product.index')}}">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{isset($product) && $product->count>0?'Update':'Add'}} Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="add-product">
        <div class="row">
            @if(isset($product))
            <div class="col-xl-7 col-lg-6 col-md-6">
                @else
                <div class="col-xl-12 col-lg-12 col-md-12">
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title">{{isset($product) && $product->count>0?'Update':'Add'}} Product Form</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($product))
                            <form class="row" action="{{route('admin.product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @else
                                <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label" for="productName">Product Name</label>
                                            <input type="text" name="name" class="form-control" id="productName" value="{{$product->name ?? ''}}" placeholder="Product Name" required>
                                            @if($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label" for="category">Category</label>
                                            <div class="form-group">
                                                <select class="choices form-select" name="sub_category_id" id="category">
                                                    @if(isset($product->subCategory))
                                                    <option value="{{$product->subCategory->id}}" selected>{{$product->subCategory->name}}</option>
                                                    @else
                                                    <option disabled selected>Select Any One</option>
                                                    @endif
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('category_id'))
                                                <span class="text-danger">{{ $errors->first('sub_category_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label" for="price">Price</label>
                                            <input type="number" class="form-control" name="price" id="price" value="{{$product->price ?? ''}}" placeholder="Enter Price" required>
                                            @if($errors->has('price'))
                                            <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label" for="Discount">Discount</label>
                                            <input type="number" name="discount" class="form-control" id="Discount" value="{{$product->discount ?? 0}}" placeholder="Enter Discount(%)" required>
                                            @if($errors->has('discount'))
                                            <span class="text-danger">{{ $errors->first('discount') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea rows="5" class="form-control" name="description" id="description" placeholder="Product Description Here ...">{{$product->description ?? ''}}</textarea>
                                            @if($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label">Product Main Image</label>
                                            <div class="input-group">
                                                <input type="file" name="primary_image" class="form-control" id="productImg">
                                            </div>
                                            @if($errors->has('primary_image'))
                                            <span class="text-danger">{{ $errors->first('primary_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label" for="ingredient">Ingredients</label>
                                            <input type="text" class="form-control" name="ingredient_name" id="ingredient" placeholder="Enter Ingredients" required>
                                            @if(isset($product->ingredients))
                                            @foreach($product->ingredients as $ing)
                                            <input type="checkbox" value="{{$ing->ingredient_name}}" class="mt-2"> {{$ing->ingredient_name}}
                                            @endforeach
                                            @endif
                                            @if($errors->has('ingredient_name'))
                                            <span class="text-danger">{{ $errors->first('ingredient_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label">Product Supporting Images</label>
                                            <div class="input-group">
                                                <input type="file" name="image_name[]" class="form-control" id="productImg" multiple>
                                            </div>
                                            @if($errors->has('image_name'))
                                            <span class="text-danger">{{ $errors->first('image_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-status mt-2">
                                        <div class="form-check form-switch ps-0">
                                            <label class="form-check-label fw-bold" for="flexSwitchCheckChecked">Status Available</label>
                                            @if(isset($product) && $product->status == "available")
                                            <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked" checked=''>
                                            @else
                                            <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-status mt-2">
                                        <div class="form-check form-switch ps-0">
                                            <label class="form-check-label fw-bold" for="flexSwitchCheckChecked">Vegeterian</label>
                                            @if(isset($product) && $product->is_veg == true)
                                            <input class="form-check-input" name="is_veg" type="checkbox" id="flexSwitchCheckChecked" checked=''>
                                            @else
                                            <input class="form-check-input" name="is_veg" type="checkbox" id="flexSwitchCheckChecked">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-status mt-2">
                                        <div class="form-check form-switch ps-0">
                                            <label class="form-check-label fw-bold" for="flexSwitchCheckChecked">Recommended</label>
                                            @if(isset($product) && $product->is_recommended == true)
                                            <input class="form-check-input" name="is_recommended" type="checkbox" id="flexSwitchCheckChecked" checked=''>
                                            @else
                                            <input class="form-check-input" name="is_recommended" type="checkbox" id="flexSwitchCheckChecked">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-status mt-2">
                                        <div class="form-check form-switch ps-0">
                                            <label class="form-check-label fw-bold" for="flexSwitchCheckChecked">Featured</label>
                                            @if(isset($product) && $product->is_trending == true)
                                            <input class="form-check-input" name="is_trending" type="checkbox" id="flexSwitchCheckChecked" checked=''>
                                            @else
                                            <input class="form-check-input" name="is_trending" type="checkbox" id="flexSwitchCheckChecked">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mt-4">
                                        <div class="form-group text-center">
                                            @if(isset($product))
                                            <button class="btn btn-outline-warning" style="width: 25%;">Update</button>
                                            @else
                                            <button class="btn btn-outline-success" style="width: 25%;">Save</button>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                @if(isset($product))
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title">Product</h3>
                        </div>
                        <div class="card-body">
                            <div class="xzoom-container">
                                <div class="row">
                                    <div class="col-xl-10">
                                        <div class="product-img">
                                            <img class="xzoom" id="xzoom-default" src="{{asset('uploads/Product/'.$product->primary_image)}}" xoriginal="{{asset('uploads/Product/'.$product->primary_image)}}" />
                                        </div>
                                        <div class="xzoom-thumbs">
                                            <a href="{{asset('uploads/Product/'.$product->primary_image)}}"><img class="xzoom-gallery" src="{{asset('uploads/Product/'.$product->primary_image)}}"></a>
                                            @foreach($product->productImages as $img)
                                            <a href="{{asset('uploads/Product/'.$img->image_name)}}"><img class="xzoom-gallery" src="{{asset('uploads/Product/'.$img->image_name)}}"> </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
    </section>
</div>
@endsection