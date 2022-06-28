@extends("admin.layouts.layout")

@section("page_title", "Add Product")

@php
	$categories = $data["categories"];
@endphp

@section("content")

<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.productList') }}">Product List</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Add Product
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    
    @include("admin.includes.errors")

    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Add Product</h3>
            </div>
            <div class="card-body order-table">
                <form class="form" method="POST" enctype="multipart/form-data" 
                    action="{{ route('admin.addProductProcess') }}">
                        
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">

                        	<div class="form-group">
                                <label class="form-label" for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="" selected>-- SELECT CATEGORY --</option>
                                    
                                    @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach

                                </select>
                                @error('category')
                                <span class="text-danger">{{ $message }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="type">Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="" selected>-- SELECT TYPE --</option>
                                    <option value="breakfast">Breakfast</option>
                                    <option value="lunch">Lunch</option>
                                    <option value="dinner">Dinner</option>
                                </select>
                                @error('type')
                                <span class="text-danger">{{ $message }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" 
                                    value="{{ old('name')??'' }}" placeholder="Name">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="desc">Description</label>
                                <textarea rows="10" class="form-control" name="desc" id="desc" 
                                    placeholder="Your Description Here....">{{ old('desc')??'' }}</textarea>
                                @error('desc')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="price">Price</label>
                                <input type="number" name="price" class="form-control" id="price" 
                                    value="{{ old('price')??0 }}" placeholder="Price">
                                @error('price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="discount">Discount</label>
                                <input type="number" name="discount" class="form-control" id="discount" 
                                    value="{{ old('discount')??0 }}" placeholder="Discount">
                                @error('discount')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="ingredient">Service Size</label>
                                <input type="text" name="ingredient" class="form-control" id="ingredient" 
                                    value="{{ old('ingredient')??'' }}" placeholder="Egg, Salt, Sugar ...">
                                @error('ingredient')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="serving_size">Serving Size</label>
                                <input type="text" name="serving_size" class="form-control" id="serving_size" 
                                    value="{{ old('serving_size')??'' }}" placeholder="200g">
                                @error('serving_size')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="center">
                                <div class="form-input card">
                                    <div class="preview">
                                        <img id="image_preview" >
                                    </div>
                                    <label for="file-ip-1">Upload Image</label>
                                    <input type="file" id="file-ip-1" name="pics" accept="image/*" 
                                        onchange="showPreview(event);">
                                    @error('pics')
                                    <span class="text-danger text-center">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="status">Status</label>
                                    <div class="row ms-2">
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" value="Active" 
                                                name="status" id="status">
                                            <label class="form-check-label" for="status">
                                            Active
                                            </label>
                                        </div>
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" value="Banned" 
                                                name="status" id="statusb" checked>
                                            <label class="form-check-label" for="statusb">
                                            Banned
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="status">Surprise</label>
                                    <div class="row ms-2">
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" value="Yes" 
                                                name="surprise" id="surprise">
                                            <label class="form-check-label" for="surprise">
                                            Yes
                                            </label>
                                        </div>
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" value="No" 
                                                name="surprise" id="surpriseb" checked>
                                            <label class="form-check-label" for="surpriseb">
                                            No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="status">Trending</label>
                                    <div class="row ms-2">
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" value="Yes" 
                                                name="trending" id="trending">
                                            <label class="form-check-label" for="trending">
                                            Yes
                                            </label>
                                        </div>
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" value="No" 
                                                name="trending" id="trendingb" checked>
                                            <label class="form-check-label" for="trendingb">
                                            No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="status">Recommend</label>
                                    <div class="row ms-2">
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" value="Yes" 
                                                name="recommend" id="recommend">
                                            <label class="form-check-label" for="recommend">
                                            Yes
                                            </label>
                                        </div>
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" value="No" 
                                                name="recommend" id="recommendb" checked>
                                            <label class="form-check-label" for="recommendb">
                                            No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="status">Veg</label>
                                    <div class="row ms-2">
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" value="Yes" 
                                                name="veg" id="veg">
                                            <label class="form-check-label" for="veg">
                                            Yes
                                            </label>
                                        </div>
                                        <div class="form-check col-3">
                                            <input class="form-check-input" type="radio" value="No" 
                                                name="veg" id="vegb" checked>
                                            <label class="form-check-label" for="vegb">
                                            No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="form-label" for="seo_title">SEO Title</label>
                                    <input type="text" name="seo_title" class="form-control" id="seo_title" 
                                        value="{{ old('seo_title')??'' }}" placeholder="SEO Title">
                                    @error('seo_title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="seo_keywords">SEO Keywords</label>
                                    <textarea rows="3" class="form-control" name="seo_keywords" 
                                        placeholder="SEO Keywords">{{ old('seo_keywords')??'' }}</textarea>
                                    @error('seo_keywords')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="seo_desc">SEO Description</label>
                                    <textarea rows="3" class="form-control" name="seo_desc" 
                                        placeholder="SEO Description">{{ old('seo_desc')??'' }}</textarea>
                                    @error('seo_desc')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> -->

                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 text-center mt-2">
                            <div class="form-group">
                                <button class="btn btn-outline-success" style="width: 25%;">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include("admin.includes.tinymce")

<script>
    
function showPreview(event){

    if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("image_preview");
        preview.src = src;
        preview.style.display = "block";
    }

}

</script>

@endsection
