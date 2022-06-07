@section('page_title', 'Add Permission')


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
								<h3 class="m-portlet__head-text">Add Permission</h3>
							</div>
						</div>
					</div>
					<form class="m-form" action="{{ route('admin.addPermissionProcess') }}" 
						method="post" enctype="multipart/form-data">

						@csrf

						<div class="m-portlet__body">
							<div class="m-form__section m-form__section--first">
								<div class="form-group m-form__group">
									<label for="example_input_full_name">Permission Name:</label>
									<input type="text" name="name" class="form-control m-input" 
										placeholder="Permission Name" value="{{ old('name') }}">
									@if($errors->has('name'))
										<span id="name" class="text-danger">{{ $errors->first('name') }}</span>
									@endif
								</div>
								<div class="form-group m-form__group">
									<label>Permission Label:</label>
									<input type="text" name="label" class="form-control m-input" 
										placeholder="Permission Label" value="{{ old('label') }}">
									@if($errors->has('label'))
										<span id="label" class="text-danger">{{ $errors->first('label') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="m-portlet__foot m-portlet__foot--fit">
							<div class="m-form__actions m-form__actions">
								<button type="submit" class="btn btn-primary">Add Permission</button>
								<a href="{{ route('admin.permissionList') }}" class="btn btn-secondary">
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