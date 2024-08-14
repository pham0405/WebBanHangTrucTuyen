@extends('layout.master')

@section('contents')
    <style>
        
        
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
       
    </style>

    <div class="container">
        <h1>ĐẶT HÀNG THÀNH CÔNG!</h1>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Tên khách hàng</td>
                    <td>Email</td>
                    <td>Số điện thoại</td>
                    <td>Số lượng</td>
                    <td>Trạng thái</td>
                    <td>Ngày đặt hàng</td>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order['id'] }}</td>
                        <td>{{ $order['name'] }}</td>
                        <td>{{ $order['email'] }}</td>
                        <td>{{ $order['phone_number'] }}</td>
                        <td>{{ $order['quantity'] }}</td>
                        <td>{{ $order['status'] }}</td>
                        <td>{{ $order['created_at'] }}</td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
