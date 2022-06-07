@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Banner List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Banner List</h3>
                <div class="float-md-end">
                    <a href="{{route('admin.banner.create')}}" class="btn btn-outline-primary">Add Banner</a>
                </div>
            </div>
            <div class="card-body order-table">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($banners as $key => $banner)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                {{$banner->title}}
                            </td>
                            <td>
                                <div class="avatar avatar-lg me-3">
                                    <a href="{{asset('uploads/Banner/'.$banner->image)}}">
                                        <img src="{{asset('uploads/Banner/'.$banner->image)}}" alt="{{$banner->image}}" srcset="">
                                    </a>
                                </div>
                            </td>
                            <td>{{$banner->status}}</td>
                            <td>
                                <a href="{{route('admin.banner.edit',$banner->id)}}" class="btn icon btn-sm btn-primary"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn icon btn-sm btn-info"><i class="far fa-eye"></i></a>
                                <form action="{{route('admin.banner.destroy',$banner->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn icon btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>There are currently no banners...</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection