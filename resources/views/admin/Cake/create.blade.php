@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.cake.index')}}">Cake Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{isset($cake) && $cake->count()>0?'Update':'Add'}} Cake</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="add-cake">
        <div class="row">
            @if(isset($cake))
            <div class="col-xl-7 col-lg-6 col-md-6">
                @else
                <div class="col-xl-12 col-lg-12 col-md-12">
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title">{{isset($cake) && $cake->count()>0?'Update':'Add'}} Cake Form</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($cake))
                            <form class="row" action="{{route('admin.cake.update',$cake->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @else
                                <form action="{{route('admin.cake.store')}}" method="POST" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label" for="cakeName">Cake Name</label>
                                            <input type="text" name="name" class="form-control" id="cakeName" value="{{$cake->name ?? ''}}" placeholder="Cake Name" required>
                                            @if($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label" for="size">Size</label>
                                            <input type="text" class="form-control" name="size" id="size" value="{{$cake->size ?? ''}}" placeholder="Cake Size" required>
                                            @if($errors->has('price'))
                                            <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label" for="price">Price</label>
                                            <input type="number" class="form-control" name="price" id="price" value="{{$cake->price ?? ''}}" placeholder="Enter Price" required>
                                            @if($errors->has('price'))
                                            <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label" for="Discount">Discount</label>
                                            <input type="number" name="discount" class="form-control" id="Discount" value="{{$cake->discount ?? 0}}" placeholder="Enter Discount(%)" required>
                                            @if($errors->has('discount'))
                                            <span class="text-danger">{{ $errors->first('discount') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea rows="5" class="form-control" name="description" id="description" placeholder="Product Description Here ...">{{$cake->description ?? ''}}</textarea>
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
                                            @if(isset($cake) && $cake->status == "available")
                                            <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked" checked=''>
                                            @else
                                            <input class="form-check-input" name="status" type="checkbox" id="flexSwitchCheckChecked">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mt-4">
                                        <div class="form-group text-center">
                                            @if(isset($cake))
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
                @if(isset($cake))
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title">Cake</h3>
                        </div>
                        <div class="card-body">
                            <div class="xzoom-container">
                                <div class="row">
                                    <div class="col-xl-10">
                                        <div class="product-img">
                                            <img class="xzoom" id="xzoom-default" src="{{asset('uploads/Cake/'.$cake->primary_image)}}" xoriginal="{{asset('uploads/Cake/'.$cake->primary_image)}}" />
                                        </div>
                                        <div class="xzoom-thumbs">
                                            <a href="{{asset('uploads/Cake/'.$cake->primary_image)}}"><img class="xzoom-gallery" src="{{asset('uploads/Cake/'.$cake->primary_image)}}"></a>
                                            @foreach($cake->cakeImages as $img)
                                            <a href="{{asset('uploads/Cake/'.$img->image_name)}}"><img class="xzoom-gallery" src="{{asset('uploads/Cake/'.$img->image_name)}}"> </a>
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