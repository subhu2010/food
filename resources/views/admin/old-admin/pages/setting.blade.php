@section('page_title', 'Website Setting')

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
                                    Update Setting
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <a class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" 
                                href="{{ route('admin.dashboard') }}">Admin Dashboard
                            </a>
                        </div>
                    </div>

                    <form class="m-form" action="{{ route('admin.editSettingProcess') }}" method="post" 
                        enctype="multipart/form-data">

                        @csrf

                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first">

                                <div class="form-group m-form__group">
                                    <label>Name*</label>
                                    <input type="text" name="name" class="form-control m-input" 
                                        placeholder="Name" 
                                        value="{{ old('name')?old('name'):$data['setting']->name }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Logo</label>
                                    <div></div>
                                    <div class="custom-file" style="width:40%">
                                        <input type="file" name="logo" class="custom-file-input" 
                                            id="customFile" accept="image/*">
                                        <label class="custom-file-label selected" for="customFile">Choose file</label>
                                        @if($data['setting']->logo != "")
                                            <img src="{{ asset('uploads/logo/'.$data['setting']->logo) }}" 
                                                alt="{{ $data['setting']->name }}" 
                                                title="{{ $data['setting']->name }}" height="100" width="150" >
                                        @else
                                            {{ "Logo was Not Uploaded ! ! !" }}
                                        @endif
                                    </div>
                                </div><br>

                                <div class="form-group m-form__group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control m-input" 
                                        placeholder="Email" 
                                        value="{{ old('email')?old('email'):$data['setting']->email }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control m-input" 
                                        placeholder="Address" 
                                        value="{{ old('address')?old('address'):$data['setting']->address }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Contact No</label>
                                    <input type="text" name="contact" class="form-control m-input" 
                                        placeholder="Contact No" 
                                        value="{{ old('contact')?old('contact'):$data['setting']->contact }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Phone No</label>
                                    <input type="text" name="phone" class="form-control m-input" 
                                        placeholder="Phone No" 
                                        value="{{ old('phone')?old('phone'):$data['setting']->phone }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Facebook Link</label>
                                    <input type="text" name="facebook" class="form-control m-input" 
                                        placeholder="Facebook Link" 
                                        value="{{ old('facebook')?old('facebook'):$data['setting']->facebook }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Instagram Link</label>
                                    <input type="text" name="instagram" class="form-control m-input" 
                                        placeholder="Instagram Link" 
                                        value="{{ old('instagram')?old('instagram'):$data['setting']->instagram }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Youtube Link</label>
                                    <input type="text" name="youtube" class="form-control m-input" 
                                        placeholder="Youtube Link" 
                                        value="{{ old('youtube')?old('youtube'):$data['setting']->youtube }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Linkedin Link</label>
                                    <input type="text" name="linkedin" class="form-control m-input" 
                                        placeholder="Linkedin Link" 
                                        value="{{ old('linkedin')?old('linkedin'):$data['setting']->linkedin }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>Tiktok Link</label>
                                    <input type="text" name="tiktok" class="form-control m-input" 
                                        placeholder="Tiktok Link" 
                                        value="{{ old('tiktok')?old('tiktok'):$data['setting']->tiktok }}">
                                </div>
                                
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection