@extends('admin.layouts.layout')
    
@section("page_title", "Products List")

@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- recent placed order -->
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Products List</h3>
                <div class="float-md-end">
                    <a href="{{ route('admin.addProduct') }}" class="btn btn-outline-primary">Add Product</a>
                </div>
            </div>
            <div class="card-body order-table">
                <table id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Menu</th>
                            <th>Type</th>
                            <th>pics</th>
                            <th>Status</th>
                            <th>Veg</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    @forelse($data["products"] as $value)
                        <tr id="category-{{ $value->id }}">
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $value->name }}</td>

                            <td>
                                @if(empty($value->category_id))
                                    <span class="text-primary">Parent Category</span>
                                @else
                                    <span class="text-warning">{{ ucwords($value->category->name) }}</span>
                                @endif
                            </td>

                            <td>{{ $value->type }}</td>

                            <td>
                                @if(isset($value->pics))
                                    {{ "Image Found" }}
                                @else
                                    {{ "Image Not Found" }}
                                @endif
                            </td>

                            <td>
                                @if($value->status == "Active")
                                    <span class="text-success">{{ $value->status }}</span>
                                @else
                                    <span class="text-danger">{{ $value->status }}</span>
                                @endif
                            </td>

                            <td>
                                @if($value->veg == "Yes")
                                    <span class="text-success">{{ $value->veg }}</span>
                                @else
                                    <span class="text-danger">{{ $value->veg }}</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('admin.editProduct', $value->id) }}" 
                                    class="btn icon btn-sm btn-primary">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="javascript:;" class="btn icon btn-sm btn-danger" 
                                    onclick="deleteProduct({{ $value->id }})">
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
    

<script type="text/javascript">
    
    /******************************************* Delete Admin ******************************************/
function deleteProduct(id){

    $this = this;

    if(confirm('Are You Sure Want To Delete ??')){

        let url = "{{ route('admin.deleteProduct') }}";

        $.ajax({

            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: 'POST',
            dataType: 'json',
            data: {id: id},

        })
        .done(function(response){

            if(response.success){

                $("tr#category-"+id).fadeOut(1000);

                $this.alertMessage(response.message, 'success', 'check');

            }else{

                $this.alertMessage(response.message, 'danger', 'ban');

            }

        })
        .fail(function(){

            $this.alertMessage(defaultMessage, 'danger', 'ban');

        });

    }

}

</script>

@endsection