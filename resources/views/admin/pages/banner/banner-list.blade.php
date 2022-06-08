@extends('admin.layouts.layout')
    
@section("page_title", "Banner List")

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
                    
                    @forelse($data["banners"] as $key => $value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->name }}</td>
                            <td>
                                {{ !empty($value->pics)?"Image Uploaded ! ! !":"Image Not Uploaded ! ! !"; }}
                            </td>
                            <td>
                                @if($value->status == "Active")
                                    <span class="text-success">{{ $value->status }}</span>
                                @else
                                    <span class="text-danger">{{ $value->status }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin.banner.edit',$value->id)}}" class="btn icon btn-sm btn-primary">
                                    <i class="far fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.banner.destroy',$value->id) }}" 
                                    method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn icon btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection