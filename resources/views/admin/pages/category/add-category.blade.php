@extends("admin.layouts.layout")

@section("page_title", "Add Menu Catalogue")

@php
	$parent = $data["categories"];
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
                        <a href="{{ route('admin.categoryList') }}">Menu Catalogue</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Add Menu Catalogue
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    
    @include("admin.includes.errors")

    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Add Menu Catalogue</h3>
            </div>
            <div class="card-body order-table">
                <form class="form" method="POST" enctype="multipart/form-data" 
                    action="{{ route('admin.addCategoryProcess') }}">
                        
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">

                        	<div class="form-group">
                                <label class="form-label" for="parent">Parent Menu</label>
                                <select name="parent" id="parent" class="form-control">
                                    <option value="" selected>-- PARENT MENU --</option>
                                    
                                    @foreach($parent as $page)
                                    <option value="{{ $page->id }}">{{ $page->name }}</option>
                                    @endforeach

                                </select>
                                @error('parent')
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
                                <label class="form-label" for="order">Order</label>
                                <input type="number" name="order" class="form-control" id="order" 
                                    value="{{ old('order')??0 }}" placeholder="Order">
                                @error('order')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Banned" selected>Banned</option>
                                    <option value="Active" >Active</option>
                                </select>
                                @error('status')
                                <span class="text-danger">{{ $message }}</span>
                                @endif
                            </div>
                        

                        </div>

                        <div class="col-lg-6">
                            <div class="center">
                                <div class="form-input card">
                                    <div class="preview">
                                        <img id="image_preview" >
                                    </div>
                                    <label for="file-ip-1">Upload Icon</label>
                                    <input type="file" id="file-ip-1" name="icon" accept="image/*" 
                                        onchange="showPreview(event);">
                                    @error('icon')
                                    <span class="text-danger text-center">{{ $message }}</span>
                                    @enderror
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
