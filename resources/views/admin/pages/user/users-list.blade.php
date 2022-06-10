@extends('admin.layouts.layout')

@section("page_title", "Customers List")

@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Customers List</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Customers List</h3>
                <div class="float-md-end">
                    <a href="{{ route('admin.addUser') }}" class="btn btn-outline-primary">Add Customer</a>
                </div>
            </div>
            <div class="card-body order-table">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Profile</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data["users"] as $key => $value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->name }}</td>
                            <td>
                                @if(empty($value->profile_photo))
                                    {{ "Profile Not Found ! ! !" }}
                                @else
                                    {{ "Profile Found ! ! !" }}
                                @endif
                            </td>
                            <td>{{ $value->email }}</td>
                            <td>
                                {{$value->contact_number}}
                            </td>
                            <td>
                                {{$value->address}}
                            </td>
                            <td>
                                <a href="javascript:;" class="btn icon btn-sm btn-info">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="javascript:;" class="btn icon btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
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