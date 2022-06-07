@section('page_title', 'Edit News')

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
                                <h3 class="m-portlet__head-text">Edit News</h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <a class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" 
                                href="{{ route('admin.newsList') }}">News List
                            </a>
                        </div>
                    </div>

                    <form class="m-form" action="{{ route('admin.editNewsProcess', $data['news']->id) }}" 
                        method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="m-portlet__body">
                            <div class="m-form__section m-form__section--first">

                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name">Name*</label>
                                    <input type="text" name="name" class="form-control m-input" 
                                        placeholder="Name" value="{{ old('name')?old('name'):$data['news']->name }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label for="pic">Pics*</label>
                                    <div></div>
                                    <div class="custom-file" style="width:40%">
                                        <input type="file" name="pics" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label selected" for="customFile">Choose file</label>
                                        @if($data['news']->pics != "")
                                            <img src="{{ asset('uploads/news/'.$data['news']->pics) }}" 
                                                alt="{{ $data['news']->name }}" width="155">
                                        @else
                                            {{ "Pics was not Uploaded ! ! !" }}
                                        @endif
                                    </div>
                                </div><br>

                                <div class="form-group m-form__group">
                                    <label>Description</label>
                                    <textarea class="desc form-control m-input" name="desc" rows="12" 
                                        value="{{ old('desc') }}">{{ old('desc')?old('desc'):$data['news']->description }}</textarea>
                                </div>

                                <!-- <div class="form-group m-form__group">
                                    <label for="example_input_full_name">Post By*</label>
                                    <input type="text" name="post_by" class="form-control m-input" 
                                        placeholder="Post By" value="{{ old('post_by')?old('post_by'):$data['news']->post_by }}">
                                </div> -->

                                <div class="m-form__group form-group">
                                    <label>Status*</label>
                                    <div class="m-radio-inline">
                                        <label class="m-radio">
                                            <input type="radio" name="status" value="Active" checked >Active
                                            <span></span>
                                        </label>
                                        <label class="m-radio">
                                            <input type="radio" name="status" value="Banned" 
                                                {{ $data['news']->status == 'Banned'?'checked':'' }} >Banned
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group m-form__group">
                                    <label for="example_input_full_name">SEO Title</label>
                                    <input type="text" name="seo_title" class="form-control m-input" 
                                        placeholder="SEO Title" value="{{ old('seo_title')?old('seo_title'):$data['news']->seo_title }}">
                                </div>

                                <div class="form-group m-form__group">
                                    <label>SEO Keywords</label>
                                    <textarea class="form-control m-input" name="seo_keywords" rows="7" 
                                        placeholder="SEO Keywords" 
                                        value="{{ old('seo_keywords') }}">{{ old('seo_keywords')?old('seo_keywords'):$data['news']->seo_keywords }}</textarea>
                                </div>

                                <div class="form-group m-form__group">
                                    <label>SEO Description</label>
                                    <textarea class="form-control m-input" name="seo_desc" rows="7" 
                                        placeholder="SEO Description" 
                                        value="{{ old('seo_desc') }}">{{ old('seo_desc')?old('seo_desc'):$data['news']->seo_description }}</textarea>
                                </div>

                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('admin.newsList') }}" class="btn btn-secondary">
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