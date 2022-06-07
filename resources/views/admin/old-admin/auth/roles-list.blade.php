@section('page_title', 'Roles List')


@extends('admin.layouts.layout')


@section('content')

	<div class="m-content">

		@include('admin.includes.errors')

		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">Roles List
							<small>List of roles.</small>
						</h3>
					</div>
				</div>

				<div class="m-portlet__head-tools">
					<a class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" 
						href="{{ route('admin.addRoles') }}">Add Roles
					</a>
				</div>

			</div>
			<div class="m-portlet__body">

				<div class="loader" id="tableLoader" style="display: none;">
                    <h3 class="text">
                        please wait . . <span class="m-loader m-loader--brand"></span>
                    </h3>
                </div>

				<div class="m-section">
					<div class="m-section__content">
						<div class="table-responsive m_datatable m-datatable m-datatable--default m-datatable--brand m-datatable--loaded">
							<table class="table m-table m-table--head-bg-primary">
								<thead>
									<tr>
										<th>#</th>
										<th>Role Name</th>
										<th>Created At</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>

									@foreach($data['roles'] as $key => $role)
									<tr id="role{{ $role->id }}">
										<th scope="row">{{ ++$key }}</th>
										<td class="sorting_1">{{ $role->name }}</td>
										<td class="center">
											{{ empty($role->created_at)?"Un Known":date('j M, Y', strtotime($role->created_at)) }}
										</td>
										<td data-field="Actions" class="m-datatable__cell">
											<span style="overflow: visible; width: 110px;">                                     
												<a href="{{ route('admin.editRole', $role->id) }}" 
													class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" 
													title="Edit">                         
													<i class="la la-edit"></i>
												</a>
												<a href="javascript:;" onclick="deleteRoles(<?= $role->id; ?>);" 
													class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" 
													title="Delete">
													<i class="la la-trash"></i>
												</a>
												<a href="{{ route('admin.assignPermissions', $role->id) }}" 
													class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" 
													title="Assign">                         
													<i class="la la-plus-square"></i>
												</a>
											</span>
										</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" charset="utf-8" async defer>
		

		// Roles Delete
		function deleteRoles(id){

		if(confirm('Are You Sure Want To Delete ??')){

			var url = "{{ route('admin.deleteRoles') }}";

			$("div#tableLoader").show();

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

                    $("div#alertMessage").html(
                        "<div data-notify='container' class='alert alert-success m-alert animated bounce'"+ 
                            "role='alert'"+ 
                            "style='display:inline-block; margin:0px auto; position:fixed;"+
                            "transition:all 0.5s ease-in-out 0s; z-index:10000; right: 30px; bottom: 60px;"+
                            "animation-iteration-count:1;'>"+
                            "<button type='button' class='close' data-dismiss='alert' aria-label='Close'"+
                                "style='position:absolute; right:10px; top:5px; z-index:100002;'"+
                                "id='closeAlertMessage'>"+
                            "</button>"+
                            "<span data-notify='message' id='message'>"+
                            "<i class='fa fa-check' aria-hidden='true'>&nbsp;</i>"+response.message+"</span>"+
                        "</div>");

                    $("tr#role"+id).delay(500).fadeOut(500);

                }else{

                    $("div#alertMessage").html(
                        "<div data-notify='container' class='alert alert-danger m-alert animated bounce'"+ 
                            "role='alert'"+ 
                            "style='display:inline-block; margin:0px auto; position:fixed;"+
                            "transition:all 0.5s ease-in-out 0s; z-index:10000; right: 30px; bottom: 60px;"+
                            "animation-iteration-count:1;'>"+
                            "<button type='button' class='close' data-dismiss='alert' aria-label='Close'"+
                                "style='position:absolute; right:10px; top:5px; z-index:100002;'"+
                                "id='closeAlertMessage'>"+
                            "</button>"+
                            "<span data-notify='message' id='message'>"+
                            "<i class='fa fa-ban' aria-hidden='true'>&nbsp;</i>"+response.message+"</span>"+
                        "</div>");

                }

                $("div#tableLoader").hide();
                setTimeout(function(){
                    $("button#closeAlertMessage").click();
                }, 5000);


			})
			.fail(function(){

				$("div#alertMessage").html(
                    "<div data-notify='container' class='alert alert-danger m-alert animated bounce'"+ 
                        "role='alert'"+ 
                        "style='display:inline-block; margin:0px auto; position:fixed;"+
                        "transition:all 0.5s ease-in-out 0s; z-index:10000; right: 30px; bottom: 60px;"+
                        "animation-iteration-count:1;'>"+
                        "<button type='button' class='close' data-dismiss='alert' aria-label='Close'"+
                            "style='position:absolute; right:10px; top:5px; z-index:100002;'"+
                            "id='closeAlertMessage'>"+
                        "</button>"+
                        "<span data-notify='message' id='message'>"+
                        "<i class='fa fa-ban' aria-hidden='true'>&nbsp;</i>Role Cannot Deleted</span>"+
                    "</div>");

				$("div#tableLoader").hide();
                setTimeout(function(){
                    $("button#closeAlertMessage").click();
                }, 5000);

			});

		}


	}


	</script>



@endsection