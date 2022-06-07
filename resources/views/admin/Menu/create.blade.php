@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.menu.index')}}">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{isset($menu) && $menu->count>0?'Update':'Add'}} Menu</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">{{isset($menu) && $menu->count>0?'Update':'Add'}} Menu Form</h3>
            </div>
            <div class="card-body order-table">
                @if(isset($menu))
                <form class="form" method="POST" enctype="multipart/form-data" action="{{route('admin.menu.update',$menu->id)}}">
                    @method('PUT')
                    @else
                    <form class="form" method="POST" enctype="multipart/form-data" action="{{route('admin.menu.store')}}">
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{$menu->name??''}}" placeholder="Enter Menu Name" required>
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="form-label" for="category">Category</label>
                                        <div class="form-group">
                                            <select class="choices form-select" name="category_id" id="category">
                                                @if(isset($menu->category))
                                                <option value="{{$menu->category->id}}" selected>{{$menu->category->name}}</option>
                                                @else
                                                <option disabled selected>Select Any One</option>
                                                @endif
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('category_id'))
                                            <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea rows="5" class="form-control" name="description" id="description" placeholder="Menu Description Here ...">{{$menu->description ?? ''}}</textarea>
                                        @if($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="center">
                                    @if(isset($menu))
                                    <img src="{{asset('uploads/Menu/'.$menu->image)}}" alt="{{$menu->name}}" class="img img-thumbnail img-responsive" required>
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
                                    @if(isset($menu))
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