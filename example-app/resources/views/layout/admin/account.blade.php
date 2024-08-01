
@extends('layout.admin')
@section('contentsAdm')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Quản Lý Tài Khoản</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Địa Chỉ</th>
                        <th>Số Điện Thoại</th>
                        <th>Email</th>
                        <th>Vai Trò</th>
                        <th>Tình Trạng</th>
                        <th>Khóa Tài Khoản</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Địa Chỉ</th>
                        <th>Số Điện Thoại</th>
                        <th>Email</th>
                        <th>Vai Trò</th>
                        <th>Tình Trạng</th>
                        <th>Khóa Tài Khoản</th>
                    </tr>
                </tfoot>
                <tbody>
                    
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection