
@extends('layout.admin')
@section('contentsAdm')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Quản Lý Loại Sản Phẩm</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('addCate')}}"><button class="btn text-gray-100 bg-gradient-primary">Thêm Loại</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Thương Hiệu</th>
                        <th>Tình Trạng</th>
                        <th>Chỉnh Sửa</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Thương Hiệu</th>
                        <th>Tình Trạng</th>
                        <th>Chỉnh Sửa</th>
                    </tr>
                </tfoot>
                @foreach ()


                @endforeach

               
            </table>
        </div>
    </div>
</div>
@endsection