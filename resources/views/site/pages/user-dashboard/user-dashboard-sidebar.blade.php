    <div class="user-sidebar" id="user-sidebars">
        <ul class="nav flex-column">
            <li class="nav-item {{ (request()->is('user-dashboard*')) ? 'active' : '' }}">
                <a class="nav-link user-menu-link" href="{{url('user-dashboard')}}"><i class="las la-tachometer-alt"></i> Dashboard</a>
            </li>
            <li class="nav-item {{ (request()->is('user-account*')) ? 'active' : '' }}">
                <a class="nav-link user-menu-link" href="{{url('user-account')}}"><i class="las la-user-circle"></i> my account</a>
            </li>
            <li class="nav-item {{ (request()->is('user-order*')) ? 'active' : '' }}">
                <a class="nav-link user-menu-link" href="{{url('user-order')}}"><i class="las la-shopping-cart"></i>my orders</a>
            </li>
            <li class="nav-item {{ (request()->is('user-review*')) ? 'active' : '' }}">
                <a class="nav-link user-menu-link" href="{{url('user-review')}}"><i class="las la-list-alt"></i>my reviews</a>
            </li>
            <li class="nav-item {{ (request()->is('user-wishlist*')) ? 'active' : '' }}">
                <a class="nav-link user-menu-link" href="{{url('user-wishlist')}}"><i class="las la-shopping-bag"></i> my wishlist</a>
            </li>
            <li class="nav-item {{ (request()->is('user-history*')) ? 'active' : '' }}">
                <a class="nav-link user-menu-link" href="{{url('user-history')}}"><i class="las la-history"></i> history</a>
            </li>
            <li class="nav-item">
                <a class="nav-link user-menu-link mb-0" href="#"><i class="las la-sign-out-alt"></i> logout</a>
            </li>
        </ul>
    </div>
