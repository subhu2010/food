@extends("admin.layouts.layout")

@section("page_title", "Update Website Setting")

@section("content")

@php
    $setting = $data["setting"];
@endphp

<div id="main-content">

    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:;">Website Setting</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Update Setting</h3>
            </div>
            <div class="card-body order-table">
                <form class="form" method="POST" enctype="multipart/form-data" 
                    action="{{ route('admin.settingProcess') }}">
                    <div class="row">

                        <div class="col-lg-6">

                            <div class="form-group">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" 
                                    value="{{ old('name')??$setting->name }}" placeholder="Name">
                                @error('name'))
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="Email">Email</label>
                                <input type="email" class="form-control" name="email" id="Email" 
                                    value="{{ old('email')??$setting->email }}" placeholder="Email">
                                @error('email'))
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="Contact">Contact</label>
                                <input type="number" class="form-control" name="contact" id="Contact" 
                                    value="{{ old('contact')??$setting->contact }}" placeholder="Contact">
                                @error('contact'))
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="Phone">Phone</label>
                                <input type="number" class="form-control" name="phone" id="Phone" 
                                    value="{{ old('phone')??$setting->phone }}" placeholder="Phone">
                                @error('phone'))
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="Address">Address</label>
                                <input type="text" class="form-control" name="address" id="Address" 
                                    value="{{ old('address')??$setting->address }}" placeholder="Address">
                                @error('address'))
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="center">
                                <div class="form-input card">
                                    <div class="preview">
                                        <img id="image_preview" 
                                            style="@if(!empty($setting->logo))display:block @endif"
                                            src="{{ asset('uploads/logo/'.$setting->logo) }}" 
                                            title="{{ $setting->name }}"
                                            alt="{{ $setting->name }}" >
                                    </div>
                                    <label for="file-ip-1">Upload Image</label>
                                    <input type="file" id="file-ip-1" name="logo" accept="image/*" 
                                        onchange="showPreview(event);">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 text-center mt-2">
                            <div class="form-group">
                                <button class="btn btn-outline-success" style="width: 25%;">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
