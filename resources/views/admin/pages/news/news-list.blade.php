@extends("admin.layouts.layout")

@section("page_title", "News List")

@section("content")

<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.dashboard')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">News List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">News List</h3>
                <div class="float-md-end">
                    <a href="{{route('admin.addNews')}}" class="btn btn-outline-primary">Add News</a>
                </div>
            </div>
            <div class="card-body order-table">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    @forelse($news as $key => $value)
                        <tr id="page-{{ $value->id }}">
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
                                <a href="{{ route('admin.editNews',$value->id) }}" class="btn icon btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="javascript:;" class="btn icon btn-sm btn-danger" 
                                    onclick="deletePage({{ $value->id }})" >
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