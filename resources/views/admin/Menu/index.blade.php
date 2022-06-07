@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Menu List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Menu List</h3>
                <div class="float-md-end">
                    <a href="{{route('admin.menu.create')}}" class="btn btn-outline-primary">Add Menu</a>
                </div>
            </div>
            <div class="card-body order-table">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($menus as $key => $menu)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$menu->name}}</td>
                            <td>
                                <div class="avatar avatar-lg me-3">
                                    <a href="{{asset('uploads/Menu/'.$menu->image)}}">
                                        <img src="{{asset('uploads/Menu/'.$menu->image)}}" alt="{{$menu->name}}" srcset="">
                                    </a>
                                </div>
                            </td>
                            <td>
                                @if($menu->category != null)
                                {{$menu->category->name}}
                                @else
                                Not Set
                                @endif
                            </td>
                            <td>{{$menu->description}}</td>
                            <td>
                                <a href="{{route('admin.menu.edit',$menu->id)}}" class="btn icon btn-sm btn-primary"><i class="far fa-edit"></i></a>
                                <a href="{{route('admin.menu.show',$menu->id)}}" class="btn icon btn-sm btn-info"><i class="far fa-eye"></i></a>
                                <form action="{{route('admin.menu.destroy',$menu->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn icon btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>There are currently no menu ...</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection