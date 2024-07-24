<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?page=home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-mobile"></i>
        </div> 
        <div class="sidebar-brand-text mx-3">DTK-NP STORE</div>
    
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Thống Kê</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - list products -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('productsAdm') }}">
            <i class="fa-solid fa-shop"></i>
            <span>Sản Phẩm</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - list categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('category')}}">
        <i class="fa-solid fa-mobile-screen-button"></i>
            <span>Loại Sản Phẩm</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - list user -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('account')}}">
            <i class="fa-solid fa-user"></i>
            <span>Tài Khoản</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - list comment -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('comment')}}">
            <i class="fas fa-comments"></i>
            <span>Bình Luận</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - list order -->
    <li class="nav-item">
        <a class="nav-link" href="orders">
            <i class="fa-solid fa-box"></i>
            <span>Đơn Hàng</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Trang Site -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('homepage')}}">
            <i class="fa-solid fa-repeat"></i>
            <span>Trang User</span></a>
    </li>

</ul>