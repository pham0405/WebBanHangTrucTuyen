@extends('layout.admin')
@section('contentsAdm')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Quản Lý Đơn Hàng</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Số lượng</th>
                        <th>Tổng giá</th> 
                        <th>Tình Trạng</th>
                        <th>Chi Tiết</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Số lượng</th>
                        <th>Tổng giá</th> 
                        <th>Tình Trạng</th>
                        <th>Chi Tiết</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($order as $orders)
                    <tr>
                        <td>{{ $orders->id }}</td>
                        <td>{{ $orders->name }}</td>
                        <td>{{ $orders->quantity }}</td>
                        <td>{{ $orders->total_amount }}</td>
                        <td>{{ $orders->status }}</td>                               
                        <td>
                            <select name="status" class="form-control status-dropdown" data-id="{{ $orders->id }}">
                                <option value="Chờ xác nhận" {{ $orders->status == 'Chờ xác nhận' ? 'selected' : '' }}>Chờ xác nhận</option>
                                <option value="Đang giao hàng" {{ $orders->status == 'Đang giao hàng' ? 'selected' : '' }}>Đang giao hàng</option>
                                <option value="Đã giao hàng" {{ $orders->status == 'Đã giao hàng' ? 'selected' : '' }}>Đã giao hàng</option>
                            </select>
                        </td>
                        </tr>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const statusDropdowns = document.querySelectorAll('.status-dropdown');
                        
                                statusDropdowns.forEach(function(dropdown) {
                                    dropdown.addEventListener('change', function() {
                                        const orderId = this.getAttribute('data-id');
                                        const newStatus = this.value;
                        
                                        fetch(`/orders/update-status/${orderId}`, {
                                            method: 'PUT',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                            },
                                            body: JSON.stringify({
                                                status: newStatus
                                            })
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) {
                                                location.reload();  // Tự động tải lại trang sau khi cập nhật thành công
                                            } else {
                                                alert('Cập nhật trạng thái thất bại. Vui lòng thử lại.');
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Error:', error);
                                            alert('Đã xảy ra lỗi. Vui lòng thử lại.');
                                        });
                                    });
                                });
                            });
                        </script>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection