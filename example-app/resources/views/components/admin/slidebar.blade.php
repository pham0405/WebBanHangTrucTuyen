<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <div class="slidebar">
        <!-- Sidebar - Brand -->


        <div class="sidebar-brand-text mx-3">
            <div class="main-logo">
                <a href="{{ route('admin') }}">
                    <img src="{{ asset('assets/client/images/logo.png') }}" alt="logo" class="img-fluid">
                </a>

            </div>
        </div>

        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Thống Kê</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - list products -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('products.index') }}">
                <i class="fa-solid fa-shop"></i>
                <span>Sản Phẩm</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - list categories -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('category') }}">
                <i class="fa-solid fa-mobile-screen-button"></i>
                <span>Loại Sản Phẩm</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - list user -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('account') }}">
                <i class="fa-solid fa-user"></i>
                <span>Tài Khoản</span></a>
        </li>
        <!-- Divider -->




        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - list order -->
        <li class="nav-item active">
            <a class="nav-link" href="orders">
                <i class="fa-solid fa-box"></i>
                <span>Đơn Hàng</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - Trang Site -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('homepage') }}">
                <i class="fa-solid fa-repeat"></i>
                <span>Trang User</span></a>
        </li>
    </div>
</ul>
