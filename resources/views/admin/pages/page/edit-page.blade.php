@extends("admin.layouts.layout")

@section("page_title", "Edit Page")

@php
	$parent = $data["parent"];
	$page = $data["page"];
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
                        <a href="{{ route('admin.pageList') }}">Pages</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Edit Page
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    
    @include("admin.includes.errors")

    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Edit Page</h3>
            </div>
            <div class="card-body order-table">
                <form class="form" method="POST" enctype="multipart/form-data" 
                    action="{{ route('admin.addPageProcess') }}">
                        
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">

                        	<div class="form-group">
                                <label class="form-label" for="parent">Parent</label>
                                <select name="parent" id="parent" class="form-control">
                                    <option value="" selected>-- PARENT PAGE --</option>
                                    
                                    @foreach($parent as $pa)
                                    <option value="{{ $pa->id }}" 
                                    	@if($pa->page_id == $page->page_id) @endif >{{ $pa->name }}</option>
                                    @endforeach

                                </select>
                                @error('parent')
                                <span class="text-danger">{{ $message }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" 
                                    value="{{ old('name')??$page->name }}" placeholder="Name">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="desc">Description</label>
                                <textarea rows="10" class="form-control" name="desc" id="desc" 
                                    placeholder="Your Description Here....">{{ old('desc')??$page->description }}</textarea>
                                @error('desc')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="page">Page</label>
                                <input type="text" name="page" class="form-control" id="page" 
                                    value="{{ old('page')??$page->page }}" placeholder="Page" >
                                @error('page')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="order">Order</label>
                                <input type="number" name="order" class="form-control" id="order" 
                                    value="{{ old('order')??$page->order }}" placeholder="Order">
                                @error('order')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Banned" selected>Banned</option>
                                    <option value="Active" @if($page->status == 'Active') selected @endif>Active</option>
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
                                        <img id="image_preview" src="{{ asset('uploads/pages/'.$page->pics) }}" 
                                        	style="@if(!empty($page->pics))display: block; @endif" 
                                        	alt="{{ $page->name }}" >
                                    </div>
                                    <label for="file-ip-1">Upload Image</label>
                                    <input type="file" id="file-ip-1" name="pics" accept="image/*" 
                                        onchange="showPreview(event);">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="seo_title">SEO Title</label>
                                    <input type="text" name="seo_title" class="form-control" id="seo_title" 
                                        value="{{ old('seo_title')??$page->seo_title }}" placeholder="SEO Title">
                                    @error('seo_title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="seo_keywords">SEO Keywords</label>
                                    <textarea rows="3" class="form-control" name="seo_keywords" 
                                        placeholder="SEO Keywords">{{ old('seo_keywords')??$page->seo_keywords }}</textarea>
                                    @error('seo_keywords')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="seo_desc">SEO Description</label>
                                    <textarea rows="3" class="form-control" name="seo_desc" 
                                        placeholder="SEO Description">{{ old('seo_desc')??$page->seo_description }}</textarea>
                                    @error('seo_desc')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

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
