<!-- Page Heading -->
@extends('layout.admin')
@section('contentsAdm')
    <h1 class="h3 mb-2 text-gray-800">Danh Sách Sản Phẩm</h1>

    <!-- Hiển thị thông báo -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('addProd') }}"><button class="btn text-gray-100 bg-gradient-primary">Thêm Sản Phẩm</button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sản Phẩm</th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Mô tả</th>
                            <th>Lượt xem</th>
                            <th>Chỉnh Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Sản Phẩm</th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Mô tả</th>
                            <th>Lượt xem</th>
                            <th>Chỉnh Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td><img src="{{ $product->image }}" alt="{{ $product->name }}" width="100"></td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->view }}</td>

                                <td style="text-align: center;">
                                    <a href="{{ route('products.edit', $product->id) }}" class="nav-link">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                
                                <td>
                                    <a href="{{ route('products.destroy', $product->id) }}"
                                       onclick="event.preventDefault(); if(confirm('Bạn có chắc chắn muốn xóa?')) document.getElementById('delete-form-{{ $product->id }}').submit();">
                                       <i class="fa-regular fa-circle-xmark"></i>
                                    </a>
                                    <form id="delete-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
