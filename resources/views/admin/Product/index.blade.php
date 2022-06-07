@extends('admin.layouts.layout')
@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Product List</h3>
                <div class="float-md-end">
                    <a href="{{route('admin.product.create')}}" class="btn btn-outline-primary">Add Product</a>
                </div>
            </div>
            <div class="card-body order-table">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Main Image</th>
                            <th>Price</th>
                            <th>Discount %</th>
                            <th>status</th>
                            <th>Category</th>
                            <th>Food Type</th>
                            <th>Trending Today?</th>
                            <th>Recommended Today?</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $key => $product)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$product->name}}</td>
                            <td>
                                <div class="avatar avatar-lg me-3">
                                    <a href="{{asset('uploads/Product/'.$product->primary_image)}}">
                                        <img src="{{asset('uploads/Product/'.$product->primary_image)}}" alt="{{$product->primary_image}}" srcset="">
                                    </a>
                                </div>
                            </td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount}}</td>
                            <td>{{$product->status}}</td>
                            <td>
                                @if($product->category != null)
                                {{$product->category->name}}
                                @else
                                Not Set
                                @endif
                            </td>
                            <td>
                            @if($product->is_veg==true)
                                Veg
                                @else
                                Non-veg
                                @endif
                            </td>
                            <td>
                                @if($product->is_trending==true)
                                Trending
                                @else
                                Not-Trending
                                @endif
                            </td>
                            <td>
                                @if($product->is_recommended==true)
                                Recommended
                                @else
                                Not-Recommended
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin.product.edit',$product->id)}}" class="btn icon btn-sm btn-primary"><i class="far fa-edit"></i></a>
                                <a href="{{route('admin.product.show',$product->id)}}" class="btn icon btn-sm btn-info"><i class="far fa-eye"></i></a>
                                <form action="{{route('admin.product.destroy',$product->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn icon btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>There are currently no products...</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection