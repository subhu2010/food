@extends('admin.layouts.layout')
    
@section("page_title", "Add Admin")

@section('content')

<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.adminList') }}">Admin</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Add Admin
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    
    @include("admin.includes.errors")

    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Add Admin</h3>
            </div>
            <div class="card-body order-table">
                <form class="form" method="POST" enctype="multipart/form-data" 
                    action="{{ route('admin.addAdmin') }}">
                        
                    @csrf

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" 
                                    value="{{ old('name')??'' }}" placeholder="Name">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" 
                                    value="{{ old('email')??'' }}" placeholder="Email">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" 
                                    value="{{ old('password')??'' }}" placeholder="Password">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control" id="phone" 
                                    value="{{ $banner->phone??'' }}" placeholder="Phone">
                                @error('phone')
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
                                    <label for="file-ip-1">Upload Image</label>
                                    <input type="file" id="file-ip-1" name="profile" accept="image/*" 
                                        onchange="showPreview(event);">
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
@endsection

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