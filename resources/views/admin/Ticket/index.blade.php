@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Support Tickets List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Support Ticket List</h3>
                <!-- <div class="float-md-end">
                    <a href="{{route('admin.banner.create')}}" class="btn btn-outline-primary">Add Banner</a>
                </div> -->
            </div>
            <div class="card-body order-table">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Message</th>
                            <th>Raised By</th>
                            <th>Status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tickets as $key => $ticket)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                {{$banner->message}}
                            </td>
                            <td>
                                @if($ticket->user != null)
                                {{$ticket->user->name}}
                                @else
                                Not Available
                                @endif
                            </td>
                            <td>{{$banner->status}}</td>
                            <td>
                                <a href="mailto:{{$ticket->user->email}}" class="btn icon btn-sm btn-info"><i class="far fa-mail"></i></a>
                                <form action="{{route('admin.ticket.delete',$ticket->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn icon btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>There are currently no tickets available...</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection