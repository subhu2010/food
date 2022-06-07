<div class="user-sidebar" id="user-sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link user-menu-link @if($data['active'] == 'dashboard') dashboard-link @endif" href="{{ route('user.dashboard') }}">
                <i class="las la-tachometer-alt"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link @if($data['active'] == 'profile') dashboard-link @endif" href="{{ route('user.profile') }}">
                <i class="las la-user-circle"></i> my account
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link @if($data['active'] == 'my-orders') dashboard-link @endif" href="{{ route('user.myOrders') }}">
                <i class="las la-shopping-cart"></i>my orders
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link @if($data['active'] == 'my-reviews') dashboard-link @endif" href="{{ route('user.myReviews') }}">
                <i class="las la-list-alt"></i>my reviews
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link @if($data['active'] == 'my-wishlist') dashboard-link @endif" href="{{ route('user.myWishlist') }}">
                <i class="las la-shopping-bag"></i> my wishlist
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link @if($data['active'] == 'history') dashboard-link @endif" href="{{ route('user.history') }}">
                <i class="las la-history"></i> history
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link user-menu-link mb-0" href="{{ route('user.logout') }}">
                <i class="las la-sign-out-alt"></i> logout
            </a>
        </li>
    </ul>
</div>
