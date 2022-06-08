<header class='mb-3'>
    <nav class="navbar navbar-expand navbar-light">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown me-1">
                        <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bi bi-envelope bi-sub fs-4 text-gray-600'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <h6 class="dropdown-header">Mail</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">No new mail</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <h6 class="dropdown-header">Notifications</h6>
                            </li>
                            <li><a class="dropdown-item">No notification available</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ auth('admin')->user()->name }}</h6>
                                <p class="mb-0 text-sm text-gray-600">Administrator</p>
                            </div>

                            @php

                            $profile = asset("/uploads/profiles").'/';
                            $profile.= !empty(auth('admin')->user()->pics) ? auth('admin')->user()->pics : 'default.png'; 

                            @endphp

                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="{{ $profile }}">
                                </div>
                            </div>
                        </div>
                    </a>

                    <form id="admin-logout" action="{{ route('admin.logout') }}" method="POST"> @csrf </form>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" 
                        style="min-width: 11rem;">
                        <li>
                            <h6 class="dropdown-header">Hello, {{ auth('admin')->user()->name }} !</h6>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i class="las la-user-alt"></i> My Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.editSetting') }}">
                                <i class="las la-cog"></i> Setting
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i class="las la-key"></i> Change Password
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;"
                                onclick="document.querySelector('form#admin-logout').submit()">
                                <i class="las la-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>