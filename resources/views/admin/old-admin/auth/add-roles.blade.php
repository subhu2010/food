@section('page_title', 'Add Role')


@extends('admin.layouts.layout')


@section('content')

	<div class="m-content">

		@include('admin.includes.errors')

		<div class="row">
			<div class="col-lg-12">
				<div class="m-portlet">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<span class="m-portlet__head-icon m--hide">
									<i class="la la-gear"></i>
								</span>
								<h3 class="m-portlet__head-text">Add Roles</h3>
							</div>
						</div>
						<div class="m-portlet__head-tools">
							<a class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" 
								href="{{ route('admin.rolesList') }}">Roles List
							</a>
						</div>
					</div>
					<form class="m-form" action="{{ route('admin.addRoleProcess') }}" 
						method="post" enctype="multipart/form-data">

						@csrf

						<div class="m-portlet__body">
							<div class="m-form__section m-form__section--first">
								<div class="form-group m-form__group">
									<label for="example_input_full_name">Role Name:</label>
									<input type="text" name="name" class="form-control m-input" 
										placeholder="Role Name" value="{{ old('name') }}">
									@if($errors->has('name'))
										<span id="name" class="text-danger">{{ $errors->first('name') }}</span>
									@endif
								</div>
								<div class="form-group m-form__group">
									<label>Role Label:</label>
									<input type="text" name="label" class="form-control m-input" 
										placeholder="Role Label" value="{{ old('label') }}">
									@if($errors->has('label'))
										<span id="label" class="text-danger">{{ $errors->first('label') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions m-form__actions">
								<button type="submit" class="btn btn-primary">Add Roles</button>
								<a href="{{ route('admin.rolesList') }}" class="btn btn-secondary">
									Cancel
								</a>
							</div>
						</div>			
					</form>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript" charset="utf-8" async defer>
		
		$(document).ready(function(){

			$("input").focus(function(event){
				$("span#"+event.target.name).remove();
			});
			
		});


	</script>

@endsection