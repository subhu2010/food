@extends('admin.layouts.layout')

@section("page_title", "Admins List")

@section('content')
<div id="main-content">
    <div class="card">
        <div class="card-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Admins List</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="recent-placed-order">
        <div class="card">
            <div class="card-header">
                <h3 class="title float-md-start">Admins List</h3>
                <div class="float-md-end">
                    <a href="{{ route('admin.addAdmin') }}" class="btn btn-outline-primary">Add Admin</a>
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
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data["admins"] as $key => $value)
                        <tr id="admin-{{ $value->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->name }}</td>
                            <td>
                                @if(empty($value->profile))
                                    {{ "Profile Not Found ! ! !" }}
                                @else
                                    {{ "Profile Found ! ! !" }}
                                @endif
                            </td>
                            <td>{{ $value->email }}</td>
                            <td>
                                {{ $value->phone }}
                            </td>
                            <td>
                                {{ $value->address }}
                            </td>
                            <td>
                                @if($value->status == "Active")
                                    <span class="text-success">{{ $value->status }}</span>
                                @else
                                    <span class="text-danger">{{ $value->status }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.editAdmin', $value->id) }}" 
                                    class="btn icon btn-sm btn-info">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="javascript:;" onclick="deleteAdmin({{ $value->id }})" 
                                    class="btn icon btn-sm btn-danger">
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


<script>
    
function showPreview(event){

    if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("image_preview");
        preview.src = src;
        preview.style.display = "block";
    }

}


/******************************************* Delete Admin ******************************************/
function deleteAdmin(id){

    $this = this;

    if(confirm('Are You Sure Want To Delete ??')){

        let url = "{{ route('admin.deleteAdmin') }}";

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

                $("tr#admin-"+id).fadeOut(1000);

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