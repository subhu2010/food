<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('admin-assets/images/logo/logo.png') }}" alt="Logo" srcset="">
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block">
                        <i class="bi bi-x bi-middle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">
                    <h3>Food On Ways</h3>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{ route('site.landingPage') }}" class="sidebar-link" target="_blank">
                        <i class="las la-globe"></i>
                        <span>Website</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="las la-image"></i>
                        <span>Manage Site</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('admin.banner.index') }}">
                                <i class="las la-list"></i>
                                Banners
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('admin.newsList') }}">
                                <i class="las la-list"></i>
                                News
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('admin.pageList') }}">
                                <i class="las la-list"></i>
                                Pages
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="las la-clipboard-list"></i>
                        <span>Menus</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('admin.categoryList') }}">
                                <i class="las la-list"></i>
                                Menu Catalogue
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('admin.productList') }}">
                                <i class="las la-list"></i>
                                Products
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="las la-birthday-cake"></i>
                        <span>Cakes</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('admin.cakebanner.index') }}">Banner List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('admin.cake.index') }}">Cake List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('admin.cake.create') }}">Add Cake</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('admin.cakebanner.create') }}">Add Banner</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="lab la-first-order"></i>
                        <span>orders</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="javascript:;">
                                <i class="las la-list"></i>
                                Orders List
                            </a>
                        </li>

                        <li class="submenu-item ">
                            <a href="javascript:;">
                                <i class="las la-list"></i>
                                Recent Order
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="javascript:;">
                                <i class="las la-list"></i>
                                Pending Order
                            </a>
                        </li>

                        <li class="submenu-item ">
                            <a href="javascript:;">
                                <i class="las la-list"></i>
                                Cancelled Order
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="javascript:;" class='sidebar-link'>
                        <i class="las la-users"></i>
                        <span>User Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('admin.adminList') }}">
                                <i class="las la-user-shield"></i>
                                Admins
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('admin.userList') }}">
                                <i class="las la-user"></i>
                                Customers
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('admin.staff.index') }}">
                                <i class="las la-user"></i>
                                Staffs
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- <li class="sidebar-item  ">
                    <a href="{{route('admin.ticket.index')}}" class="sidebar-link">
                        <i class="las la-ticket-alt"></i>
                        <span>Support Ticket</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="invoice.php" class="sidebar-link">
                        <i class="las la-file-invoice-dollar"></i>
                        <span>Invoice</span>
                    </a>
                </li> -->

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>