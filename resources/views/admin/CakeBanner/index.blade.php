@extends('admin.layouts.layout')

@section("page_title", "Cake Banner List")

@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cake Banner List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Cake Banner List</h3>
                <div class="float-md-end">
                    <a href="{{ route('admin.cakebanner.create') }}" class="btn btn-outline-primary">Add Cake Banner</a>
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
                    
                    @forelse($cakeBanners as $key => $banner)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            {{ $banner->title }}
                        </td>
                        <td>
                            @if(!empty($banner->image))
                                {{ "Cake Banner Image Uploaded ! ! !" }}
                            @else
                                {{ "Cake Banner Image Not Found ! ! !" }}
                            @endif
                        </td>
                        <td>{{ $banner->status }}</td>
                        <td>
                            <a href="{{route('admin.cakebanner.edit',$banner->id)}}" 
                                class="btn icon btn-sm btn-primary"><i class="far fa-edit"></i></a>
                            <form action="{{route('admin.cakebanner.destroy',$banner->id)}}" method="POST" 
                                onsubmit="return confirm('Are you sure to delete?')">
                                @method('DELETE')
                                @csrf
                                <button class="btn icon btn-sm btn-danger"><i class="fas fa-trash"></i></button>
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