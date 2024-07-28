@extends('layout.admin')
@section('contentsAdm')


<div class="container-fluid">
    <div class="card-header">
        <h2>Thêm Sản Phẩm</h2>
    </div>
    <form action="?page=addProd" method="post" enctype="multipart/form-data">
    <label>Danh mục sản phẩm: </label>
    <select name="cate_id" class="form-floating mb-3 mt-3">
       
    </select>
    <div class="form-floating mb-3 mt-3">
        <label>Tên sản phẩm</label>
        <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="cateName" required>
    </div>
    <div class="form-floating mb-3 mt-3">
        <label>Ảnh sản phẩm</label>
        <input type="file" class="form-control" name="imageProd">
    </div>
    <div class="form-floating mb-3 mt-3">
        <label>Số lượng</label>
        <input type="text" class="form-control" name="quantity">
    </div>
    <div class="form-floating mb-3 mt-3">
        <label>Mô tả</label>
        <input type="text" class="form-control" placeholder="Nhập mô tả sản phẩm" name="description" required>
    </div>
    <div class="form-floating mb-3 mt-3">
        <label>Giá sản phẩm</label>
        <input type="text" class="form-control" placeholder="Giá sản phẩm" name="catePrice" required>
    </div>
    {{-- <div class="form-floating mb-3 mt-3">
        <label>Tình Trạng</label>
        <select class="form-control" name="status">
            <option value="Còn kinh doanh">Còn kinh doanh</option>
            <option value="Ngừng kinh doanh">Ngừng kinh doanh</option>
        </select>
    </div> --}}
   
    {{-- <div class="form-floating mb-3 mt-3">
        <label>Ảnh mô tả sản phẩm</label>
        <input type="file" class="form-control" name="imageProds[]" multiple>
    </div> --}}
   

    <button tyle="submit" name="addCate" class="btn btn-primary">Thêm</button>
    </form>
</div>

@endsection