@extends('layout.admin')
@section('contentsAdm')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Chi Tiết Đơn Hàng Có Mã </h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('orders')}}"><button class="btn text-gray-100 bg-gradient-primary">Quay Lại</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Ảnh</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tfoot>
                <th>Sản Phẩm</th>
                        <th>Ảnh</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                </tfoot>
                <tbody>

                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection