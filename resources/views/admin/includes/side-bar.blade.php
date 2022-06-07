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
                <li class="sidebar-title">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{route('landingPage')}}" class="sidebar-link">
                        <i class="las la-globe"></i>
                        <span>Website</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="las la-image"></i>
                        <span>Banner</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('admin.banner.create')}}">Add Banner</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('admin.banner.index')}}">Banner List</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="las la-user-alt"></i>
                        <span>Staff</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('admin.staff.create')}}">Add Staff</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('admin.staff.index')}}">Staff List</a>
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
                            <a href="">Menu Catalogue</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('admin.menu.index')}}">Menu List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('admin.product.index')}}">Product List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="menu-grid.php">Menu Grid</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('admin.menu.create')}}">Add Menu</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('admin.product.create')}}">Add product</a>
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
                            <a href="{{route('admin.cakebanner.index')}}">Banner List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('admin.cake.index')}}">Cake List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('admin.cake.create')}}">Add Cake</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('admin.cakebanner.create')}}">Add Banner</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="las la-users"></i>
                        <span>Customers</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="customer-review.php">Customer Review</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('admin.customer.index')}}">Customer List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="social-activity.php">Social Activity</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="lab la-first-order"></i>
                        <span>order</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="order-list.php">Order List</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="recent-order.php">recent Order</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  ">
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
                </li>
                <li class="sidebar-item  ">
                    <a href="complete-order.php" class="sidebar-link">
                        <i class="lab la-first-order-alt"></i>
                        <span>Complete Order</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="pending-order.php" class="sidebar-link">
                        <i class="lab la-first-order-alt"></i>
                        <span>Pending Order</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="#" class="sidebar-link">
                        <i class="las la-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>