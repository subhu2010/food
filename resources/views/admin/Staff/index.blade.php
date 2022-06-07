@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Staff List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Staff List</h3>
                <div class="float-md-end">
                    <a href="{{route('admin.staff.create')}}" class="btn btn-outline-primary">Add Staff</a>
                </div>
            </div>
            <div class="card-body order-table">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($staffs as $key => $staff)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                            <div class="avatar avatar-lg me-3">
                                    <a href="{{asset('uploads/Staff/'.$staff->image)}}">
                                        <img src="{{asset('uploads/Staff/'.$staff->image)}}" alt="{{$staff->image}}" srcset="">
                                    </a>
                                </div>
                                {{$staff->name}}
                            </td>
                            <td>{{$staff->email}}</td>
                            <td>{{$staff->address}}</td>
                            <td>{{$staff->contact_number}}</td>
                            <td>
                                <a href="{{route('admin.staff.edit',$staff->id)}}" class="btn icon btn-sm btn-primary"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn icon btn-sm btn-info"><i class="far fa-eye"></i></a>
                                <form action="{{route('admin.staff.destroy',$staff->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn icon btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>There are currently no staffs...</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection