@section('page_title', 'Assign Permissions')


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
                                <h3 class="m-portlet__head-text">Assign Permissions</h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <a class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" 
                                href="{{ route('admin.rolesList') }}">Roles List
                            </a>
                        </div>
                    </div>
                    <form class="m-form" action="{{ route('admin.assignPermissionsProcess', $data['roles']->id) }}" 
                        method="post">

                        @csrf

                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first col-md-5">

                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name">Role:</label>
                                    <input disabled type="text" class="form-control m-input" 
                                        value="{{ $data['roles']->name }}">
                                </div>
                                
                                <div class="form-group m-form__group">
                                    <label>Permissions:</label>
                                    <div class="m-radio-inline">
                                        @foreach($data['permission'] as $per)
                                            @if(in_array($per->id, $data['assign']))
                                                <label class="m-checkbox m-checkbox--state-success">
                                                    <input type="checkbox" name="permissions[]" checked
                                                        value="{{ $per->id }}" >
                                                        {{ $per->name }}
                                                    <span></span>
                                                </label>
                                            @else 
                                                <label class="m-checkbox m-checkbox--state-success">
                                                    <input type="checkbox" name="permissions[]" 
                                                        value="{{ $per->id }}" >
                                                        {{ $per->name }}
                                                    <span></span>
                                                </label>
                                            @endif   
                                        @endforeach    
                                    </div>                                                        
                                </div>

                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('admin.rolesList') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection