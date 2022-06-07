@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.banner.index')}}">Banner</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{isset($banner) && $banner->count()>0?'Update':'Add'}} Banner</li>
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
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{$banner->title??''}}" placeholder="Enter Banner Title" required>
                                    @if($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="description">description</label>
                                    <textarea rows="10" class="form-control" name="description" id="description" placeholder="Your Description Here....">{{$banner->description??''}}</textarea>
                                    @if($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="active" selected>Active</option>
                                        <option value="inactive">In-Active</option>
                                    </select>
                                    @if($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="center">
                                    @if(isset($banner))
                                    <img src="{{asset('uploads/Banner/'.$banner->image)}}" alt="{{$banner->title}}" class="img img-thumbnail img-responsive" required>
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