<div class="user-sidebar" id="user-sidebars">

    <form method="POST" action="{{ route('user.logout') }}" id="user-logout"> @csrf </form>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link user-menu-link {{ $data['active'] == 'dashboard' ? 'active' : '' }}" 
                href="{{ route('user.dashboard') }}">
                <i class="las la-tachometer-alt"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link {{ $data['active'] == 'profile' ? 'active' : '' }}" 
                href="{{ route('user.profile') }}">
                <i class="las la-user-circle"></i> Profile
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link {{ $data['active'] == 'orders' ? 'active' : '' }}" 
                href="{{ route('user.orders') }}">
                <i class="las la-shopping-cart"></i> Orders
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link {{ $data['active'] == 'reviews' ? 'active' : '' }}" 
                href="{{ route('user.reviews') }}">
                <i class="las la-list-alt"></i> Reviews
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link {{ $data['active'] == 'wishlist' ? 'active' : '' }}" 
                href="{{ route('user.wishlist') }}">
                <i class="las la-shopping-bag"></i> Wishlist
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link {{ $data['active'] == 'cartlist' ? 'active' : '' }}" 
                href="{{ route('user.cartlist') }}">
                <i class="las la-shopping-bag"></i> Cartlist
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link {{ $data['active'] == 'history' ? 'active' : '' }}" 
                href="{{ route('user.history') }}">
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
