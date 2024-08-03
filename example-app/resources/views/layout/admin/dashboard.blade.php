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
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a
                                        href="?page=listCategories"><span>{{ $cateCount }}</span>danh mục</a></div>
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
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="?page=listComments"> bình
                                        luận</a></div>
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
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><a
                                                href="?page=listUsers"><span>{{ $userCount }}</span> người dùng</a></div>
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



        <div class="chart-container">
            <div class="col-xl-12 col-md-12 mb-4">
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="productChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          
      

        
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              var ctx = document.getElementById('productChart').getContext('2d');
          
              // Chuyển dữ liệu sản phẩm thành JSON và lấy dữ liệu name và quantity
              // Truyền dữ liệu từ PHP vào JavaScript
              var products = {!! json_encode($products) !!};
              var productCount = {{ $productCount }};
                  
              var productNames = products.map(product => product.name.toLowerCase().split(' ').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' '));
              var productQuantities = products.map(product => product.view);
          
              var backgroundColors = [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
              ];
          
              var borderColors = [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ];
          
              var productChart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: productNames,
                  datasets: [{
                    label: 'Top 5 sản phẩm có số lượt xem cao nhất',
                    data: productQuantities,
                    backgroundColor: backgroundColors.slice(0, productQuantities.length),
                    borderColor: borderColors.slice(0, productQuantities.length),
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    },
                    x: {
                      ticks: {
                        callback: function(value, index, values) {
                          return productNames[index].split(' '); // Tách các từ để xuống hàng
                        },
                        maxRotation: 0,
                        minRotation: 0,
                        font: {
                          size: 10 // Thay đổi kích thước font chữ
                        }
                      }
                    }
                  },
                  responsive: true, // Đảm bảo biểu đồ sẽ phản hồi khi thay đổi kích thước cửa sổ
                  maintainAspectRatio: false
                }
              });
            });
          </script>
          
          
      
    @endsection
