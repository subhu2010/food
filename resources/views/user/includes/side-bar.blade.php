<div class="user-sidebar" id="user-sidebars">

    <form method="POST" action="{{ route('user.logout') }}" id="user-logout"> @csrf </form>

    <ul class="nav flex-column">
        <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
            <a class="nav-link user-menu-link" href="{{ route('user.dashboard') }}">
                <i class="las la-tachometer-alt"></i> Dashboard
            </a>
        </li>
        <li class="nav-item {{ (request()->is('profile')) ? 'active' : '' }}">
            <a class="nav-link user-menu-link" href="{{ route('user.profile') }}">
                <i class="las la-user-circle"></i> Profile
            </a>
        </li>
        <li class="nav-item {{ (request()->is('orders')) ? 'active' : '' }}">
            <a class="nav-link user-menu-link" href="{{ route('user.orders') }}">
                <i class="las la-shopping-cart"></i> Orders
            </a>
        </li>
        <li class="nav-item {{ (request()->is('reviews')) ? 'active' : '' }}">
            <a class="nav-link user-menu-link" href="{{ route('user.reviews') }}">
                <i class="las la-list-alt"></i> Reviews
            </a>
        </li>
        <li class="nav-item {{ (request()->is('wishlist')) ? 'active' : '' }}">
            <a class="nav-link user-menu-link" href="{{ route('user.wishlist') }}">
                <i class="las la-shopping-bag"></i> Wishlist
            </a>
        </li>
        <li class="nav-item {{ (request()->is('cartlist')) ? 'active' : '' }}">
            <a class="nav-link user-menu-link" href="{{ route('user.cartlist') }}">
                <i class="las la-shopping-bag"></i> Cartlist
            </a>
        </li>
        <li class="nav-item {{ (request()->is('user-history*')) ? 'active' : '' }}">
            <a class="nav-link user-menu-link" href="{{ route('user.history') }}">
                <i class="las la-history"></i> History
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link mb-0" href="javascript:;" 
                onclick="document.querySelector('form#user-logout').submit()">
                <i class="las la-sign-out-alt"></i> logout
            </a>
        </li>
    </ul>
</div>
