@section('page_title', 'Admin Dashboard')

@extends('admin.layouts.layout')

@section('content')

    
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__body m-portlet__body--no-padding">
                <div class="row m-row--col-separator-xl">

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">Total Admin</h4><br>
                                <span class="m-widget24__desc"></span>
                                <span class="m-widget24__stats m--font-secondary">{{ $data['admin'] }}</span>
                                <div class="m--space-40"></div>
                                <span class="m-widget24__number">
                                    <a href="{{ route('admin.adminList') }}" 
                                        title="Total Admin">View List
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">Total Users</h4><br>
                                <span class="m-widget24__desc"></span>
                                <span class="m-widget24__stats m--font-info">{{ $data['user'] }}</span>
                                <div class="m--space-40"></div>
                                <span class="m-widget24__number">
                                    <a href="" 
                                        title="Total User">View List
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <div class="m-widget24">
                            <div class="m-widget24__item">
                                <h4 class="m-widget24__title">Total News</h4><br>
                                <span class="m-widget24__desc"></span>
                                <span class="m-widget24__stats m--font-brand">{{ $data['news'] }}</span>
                                <div class="m--space-40"></div>
                                <span class="m-widget24__number">
                                <a href="{{ route('admin.newsList') }}" 
                                    title="Total News">View List
                                </a>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection