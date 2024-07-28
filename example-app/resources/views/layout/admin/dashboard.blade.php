    <!-- Page Heading -->

    @extends('layout.admin')
    @section('contentsAdm')
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Thống Kê Số Lượng</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Total Product -->

            <!-- Content Row -->

            <!-- Total Product -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Tổng Sản Phẩm</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a
                                        href="?page=listProducts"><span>{{ $productCount }}</span> sản phẩm</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-shop fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Tổng Loại</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="?page=listCategories"><span>{{ $cateCount }}</span>danh mục</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-shirt fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Tổng Bình Luận</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="?page=listComments"> bình luận</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Số Người Dùng
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><a href="?page=listUsers"><span>{{ $userCount }}</span> người dùng</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>

            </div>

        </div>
    @endsection
