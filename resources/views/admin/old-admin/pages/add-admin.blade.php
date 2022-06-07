@section('page_title', 'Add Admin')

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
                                <h3 class="m-portlet__head-text">
                                    Add Admin
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <a class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" 
                                href="{{ route('admin.adminList') }}">Admin List
                            </a>
                        </div>
                    </div>

                    <form class="m-form" action="{{ route('admin.addAdminProcess') }}" 
                        method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first">

                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name">Name*</label>
                                    <input type="text" name="name" class="form-control m-input" 
                                        placeholder="Name" value="{{ old('name')?old('name'):'' }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label for="pic">Profile Picture</label>
                                    <div></div>
                                    <div class="custom-file" style="width:40%">
                                        <input type="file" name="profile" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label selected" for="customFile">Choose file</label>
                                    </div>
                                </div>

                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name">Email*</label>
                                    <input type="text" name="email" class="form-control m-input" 
                                        placeholder="Email" value="{{ old('email')?old('email'):'' }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name">Password*</label>
                                    <input type="password" name="password" class="form-control m-input" 
                                        placeholder="Password" >
                                </div>

                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name">Confirm Password*</label>
                                    <input type="password" name="password_confirmation" class="form-control m-input" 
                                        placeholder="Confirm Password" >
                                </div>

                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name">Phone</label>
                                    <input type="text" name="phone" class="form-control m-input" 
                                        placeholder="Phone" value="{{ old('phone')?old('phone'):'' }}">
                                </div>

                                <div class="m-form__group form-group">
                                    <label>Status*</label>
                                    <div class="m-radio-inline">
                                        <label class="m-radio">
                                            <input type="radio" name="status" value="Active" >Active
                                            <span></span>
                                        </label>
                                        <label class="m-radio">
                                            <input type="radio" name="status" value="Banned" checked >Banned
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <button type="submit" class="btn btn-primary">Add</button>
                                <a href="{{ route('admin.adminList') }}" class="btn btn-secondary">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection