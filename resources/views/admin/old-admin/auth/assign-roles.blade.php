@section('page_title', 'Assign Roles')


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
                                <h3 class="m-portlet__head-text">Assign Roles</h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <a class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" 
                                href="{{ route('admin.adminList') }}">Admin List
                            </a>
                        </div>
                    </div>
                    <form class="m-form" action="{{ route('admin.assignRolesProcess', $data['admin']->id) }}" 
                        method="post">

                        @csrf

                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first col-md-5">

                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name">User Admin:</label>
                                    <input disabled type="text" class="form-control m-input" 
                                        value="{{ $data['admin']->name }}">
                                </div>
                                
                                <div class="form-group m-form__group">
                                    <label>Roles:</label>
                                    <div class="m-radio-inline">
                                        @foreach($data['roles'] as $rol)
                                            @if(in_array($rol->id, $data['assign']))
                                                <label class="m-checkbox m-checkbox--state-success">
                                                    <input type="radio" name="roles" checked
                                                        value="{{ $rol->id }}" >
                                                        {{ $rol->name }}
                                                    <span></span>
                                                </label>
                                            @else 
                                                <label class="m-checkbox m-checkbox--state-success">
                                                    <input type="radio" name="roles" 
                                                        value="{{ $rol->id }}" >
                                                        {{ $rol->name }}
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