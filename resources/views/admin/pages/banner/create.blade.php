@extends('admin.layouts.layout')
    
@section("page_title", isset($data)?"Update Banner":"Add Banner")

@section('content')

@php
    $banner = isset($data["banner"])?$data["banner"]:null;
@endphp

<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.banner.index')}}">Banner</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ isset($banner)?'Update':'Add'}} Banner
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">{{isset($banner) && $banner->count()>0?'Update':'Add'}} Banner Form</h3>
            </div>
            <div class="card-body order-table">
                @if(isset($banner))
                <form class="form" method="POST" enctype="multipart/form-data" action="{{route('admin.banner.update',$banner->id)}}">
                    @method('PUT')
                    @else
                    <form class="form" method="POST" enctype="multipart/form-data" action="{{route('admin.banner.store')}}">
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label class="form-label" for="name">Title</label>
                                    <input type="text" name="name" class="form-control" id="name" 
                                        value="{{ $banner->name??'' }}" placeholder="Enter Banner Title">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="description">description</label>
                                    <textarea rows="10" class="form-control" name="description" id="description" 
                                        placeholder="Your Description Here....">{{ $banner->description??'' }}</textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="link">Link</label>
                                    <input type="text" name="link" class="form-control" id="link" 
                                        value="{{ $banner->link??old('link') }}" placeholder="Link">
                                    @error('link')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="Banned" selected>Banned</option>
                                        <option value="Active" 
                                            @if(isset($banner) && $banner->status == 'Active') selected @endif>
                                            Active
                                        </option>
                                    </select>
                                    @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="center">
                                    @if(isset($banner))
                                    <img src="{{ asset('uploads/banners/'.$banner->pics) }}"
                                        alt="{{ $banner->name }}" class="img img-thumbnail img-responsive">
                                    @endif
                                    <div class="form-input card">
                                        <div class="preview">
                                            <img id="file-ip-1-preview">
                                        </div>
                                        <label for="file-ip-1">Upload Image</label>
                                        <input type="file" id="file-ip-1" name="pics" accept="image/*" 
                                            onchange="showPreview(event);">
                                        @if($errors->has('pics'))
                                        <span class="text-danger text-center">{{ $errors->first('pics') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center mt-2">
                                <div class="form-group">
                                    @if(isset($banner))
                                    <button class="btn btn-outline-warning" style="width: 25%;">Update</button>
                                    @else
                                    <button class="btn btn-outline-success" style="width: 25%;">Create</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">

function showPreview(event){

    if(event.target.files.length > 0){

        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = src;
        preview.style.display = "block";

    }

}

</script>
@endsection