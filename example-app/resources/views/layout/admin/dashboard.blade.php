    <!-- Page Heading -->

    @extends('layout.admin')
    @section('contentsAdm')


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thống Kê Số Lượng</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Total Product -->
        
           
      
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