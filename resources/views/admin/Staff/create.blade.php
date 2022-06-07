@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.staff.index')}}">Staff</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{isset($staff) && $staff->count>0?'Update':'Add'}} Staff</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">{{isset($staff) && $staff->count>0?'Update':'Add'}} Staff Form</h3>
            </div>
            <div class="card-body order-table">
                @if(isset($staff))
                <form class="form" method="POST" enctype="multipart/form-data" action="{{route('admin.staff.update',$staff->id)}}">
                    @method('PUT')
                    @else
                    <form class="form" method="POST" enctype="multipart/form-data" action="{{route('admin.staff.store')}}">
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{$staff->name??''}}" placeholder="Enter Staff Name" required>
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="Email">Email</label>
                                    <input type="email" class="form-control" name="email" id="Email" value="{{$staff->email??''}}" placeholder="Enter Staff Email" required>
                                    @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                @if(isset($staff))
                                @else
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                                    @if($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="password">Password Confirmation</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="Confrim Password" required>
                                    @if($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                @endif
                                <div class="form-group">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" name="address" class="form-control" id="address" value="{{$staff->address??''}}" placeholder="Enter Staff Address" required>
                                    @if($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="contact_number">Contact Number</label>
                                    <input type="number" class="form-control" name="contact_number" id="contact_number" value="{{$staff->contact_number??''}}" placeholder="Enter Staff Number" required>
                                    @if($errors->has('contact_number'))
                                    <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="center">
                                    @if(isset($staff))
                                    <img src="{{asset('uploads/Staff/'.$staff->image)}}" alt="{{$staff->title}}" class="img img-thumbnail img-responsive" required>
                                    @endif
                                    <div class="form-input card">
                                        <div class="preview">
                                            <img id="file-ip-1-preview">
                                        </div>
                                        <label for="file-ip-1">Upload Image</label>
                                        <input type="file" id="file-ip-1" name="image" accept="image/*" onchange="showPreview(event);">
                                        @if($errors->has('image'))
                                        <span class="text-danger text-center">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center mt-2">
                                <div class="form-group">
                                    @if(isset($staff))
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
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
@endsection