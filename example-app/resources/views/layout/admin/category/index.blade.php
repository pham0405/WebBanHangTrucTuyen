@extends('layout.admin')

@section('contentsAdm')

<h1 class="h3 mb-2 text-gray-800">Quản Lý Loại Sản Phẩm</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ route('category.create') }}"><button class="btn text-gray-100 bg-gradient-primary">Thêm Loại</button></a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Thương Hiệu</th>
                        <th>Mô tả</th>
                        <th>Chỉnh Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Thương Hiệu</th>
                        <th>Mô tả</th>
                        <th>Chỉnh Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('category.edit', $category->id) }}" class="nav-link">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('category.destroy', $category->id) }}"
                                   onclick="event.preventDefault(); if(confirm('Bạn có chắc chắn muốn xóa?')) document.getElementById('delete-form-{{ $category->id }}').submit();">
                                   <i class="fa-regular fa-circle-xmark"></i>
                                </a>
                                <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: none;">
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
