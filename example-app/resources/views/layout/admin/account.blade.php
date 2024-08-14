
@extends('layout.admin')
@section('contentsAdm')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
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
                        <th>Email</th>
                        <th>Vai Trò</th>
                        <th>Trạng Thái</th>
                        <th>Khóa Tài Khoản</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Vai Trò</th>
                        <th>Trạng Thái</th>
                        <th>Khóa Tài Khoản</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
<tr>
    <th>{{$user->id}}</th>
    <th>{{$user->name}}</th>
    <th>{{$user->email}}</th>
    <th>{{$user->userType}}</th>
    <th> 
        @if ($user->status == 1)
        <span class="badge badge-success">Hoạt Động</span>
    @else
        <span class="badge badge-danger">Khóa</span>
    @endif</th>
    <th>
        <form action="{{ $user->status == 1 ? route('admin.users.lock', $user->id) : route('admin.users.unlock', $user->id) }}" method="POST">
            @csrf
            <button type="submit" style="border: none; background: none;">
                @if ($user->status == 1)
                    <i class="fas fa-lock-open"></i> <!-- Icon mở khóa -->
                @else
                    <i class="fas fa-lock"></i> <!-- Icon khóa -->
                @endif
            </button>
        </form>
    </th>
</tr>

                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection