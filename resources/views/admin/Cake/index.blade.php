@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cake List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Cake List</h3>
                <div class="float-md-end">
                    <a href="{{route('admin.cake.create')}}" class="btn btn-outline-primary">Add Cake</a>
                </div>
            </div>
            <div class="card-body order-table">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Main Image</th>
                            <th>Price</th>
                            <th>Discount %</th>
                            <th>status</th>
                            <th>Description</th>
                            <th>Size</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($cakes as $key => $cake)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$cake->name}}</td>
                            <td>{{$cake->slug}}</td>
                            <td>
                                <div class="avatar avatar-lg me-3">
                                    <a href="{{asset('uploads/Cake/'.$cake->primary_image)}}">
                                        <img src="{{asset('uploads/Cake/'.$cake->primary_image)}}" alt="{{$cake->name}}" srcset="">
                                    </a>
                                </div>
                            </td>
                            <td>{{$cake->price}}</td>
                            <td>{{$cake->discount}}</td>
                            <td>{{$cake->status}}</td>
                            <td>
                                <p style="height: 30px; overflow:hidden">{{$cake->description}}</p>
                            </td>
                            <td>{{$cake->size}}</td>
                            <td>
                                <a href="{{route('admin.cake.edit',$cake->id)}}" class="btn icon btn-sm btn-primary"><i class="far fa-edit"></i></a>
                                <a href="{{route('admin.cake.show',$cake->id)}}" class="btn icon btn-sm btn-info"><i class="far fa-eye"></i></a>
                                <form action="{{route('admin.cake.destroy',$cake->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn icon btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>There are currently no cakes...</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection