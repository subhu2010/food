@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Customer List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Customer List</h3>
                <!-- <div class="float-md-end">
                    <a href="{{route('admin.customer.create')}}" class="btn btn-outline-primary">Customer Menu</a>
                </div> -->
            </div>
            <div class="card-body order-table">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Bio</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $key => $customer)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$customer->name}}</td>
                            <td>
                                {{$customer->contact_number}}
                            </td>
                            <td>
                                {{$customer->address}}
                            </td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->bio}}</td>
                            <td>
                                @forelse($customer->userImages as $img)
                                <div class="avatar avatar-lg me-3">
                                    <a href="{{asset('uploads/User/'.$user->image_name)}}">
                                        <img src="{{asset('uploads/User/'.$user->image_name)}}" srcset="">
                                    </a>
                                </div>
                                @empty
                                <p>No images Yet...</p>
                                @endforelse
                            </td>
                            <td>
                                <a href="{{route('admin.customer.show',$customer->id)}}" class="btn icon btn-sm btn-info"><i class="far fa-eye"></i></a>
                                <form action="{{route('admin.customer.destroy',$customer->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn icon btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>There are currently no customers ...</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection