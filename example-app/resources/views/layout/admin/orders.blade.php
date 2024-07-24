@extends('layout.admin')
@section('contentsAdm')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Quản Lý Đơn Hàng</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Số Loại Sản Phẩm</th>
                        <th>Tổng Sản Phẩm</th>
                        <th>Tổng Giá</th>
                        <th>Mã Đơn Hàng</th>
                        <th>Khách Hàng</th>
                        <th>Địa Chỉ</th>
                        <th>Điện Thoại</th>
                        <th>Tình Trạng</th>
                        <th>Chi Tiết</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Số Sản Phẩm</th>
                        <th>Tổng Sản Phẩm</th>
                        <th>Tổng Giá</th>
                        <th>Mã Đơn Hàng</th>
                        <th>Khách Hàng</th>
                        <th>Địa Chỉ</th>
                        <th>Điện Thoại</th>
                        <th>Tình Trạng</th>
                        <th>Chi Tiết</th>
                    </tr>
                </tfoot>
                <tbody>

                   
                                    </select>                               
                                        
                                </form>
                            </td>
                            <td><a href="{{ route('ordersDetail')}}">
                                <button class="btn text-gray-100 bg-gradient-primary">Xem</button>
                            </a></td>
                        </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection