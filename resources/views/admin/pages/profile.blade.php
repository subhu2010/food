@extends("admin.layouts.layout")

@section("page_title", "Profile")


@section("content")

<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Profile</h3>
            </div>
            <div class="card-body">
                <form class="form" method="POST" action="" id="myform">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="" value="{{ old('name')??auth()->user('admin')->name }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="" value="{{ old('email')??auth()->user('admin')->email }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone No</label>
                                <input type="number" class="form-control" id="" value="{{ old('phone')??auth()->user('admin')->phone }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" id="" value="{{ old('address')??auth()->user('admin')->address }}">
                            </div>
                            <div class="form-group text-center">
                                <button id="edit" type="button" class="btn btn-sm btn-primary">Edit</button>
                                <button type="button" class="btn btn-sm btn-success">Update</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="center">
                                <div class="form-input card">
                                    <div class="preview">
                                        <img id="file-ip-1-preview">
                                    </div>
                                    <label for="file-ip-1">Upload Image</label>
                                    <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                                </div>
                            </div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection