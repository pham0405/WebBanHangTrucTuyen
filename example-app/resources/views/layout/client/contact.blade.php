@extends('layout.master')
@section('contents')
@title('Liên Hệ')
<div>
    <div class="container">
        <h1>Liên Hệ</h1>
    </div>
    <style>
        .container h1 {
            text-align: center;
        }

        .btn-block {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .form-control {
            text-transform: none; /* Đảm bảo rằng không có chữ cái đầu viết hoa */
        }
    </style>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="p-4 bg-white border rounded">
                    <h1 class="text-center" style="color: #DEAD6F">Waggy Pet Shop</h1>
                    <h2 class="text-center">Contact Us</h2>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="form-group">
                            <label for="fullName">
                                <i class="fa fa-user"></i> Họ Và Tên:
                            </label>
                            <input type="text" class="form-control" id="fullName" name="fullName" required>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                <i class="fa fa-envelope"></i> Email :
                            </label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile">
                                <i class="fa fa-phone"></i> Số Điện Thoại:
                            </label>
                            <input type="tel" class="form-control" id="mobile" name="mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="msg">
                                <i class="fa fa-comment"></i> Nội Dung :
                            </label>
                            <textarea class="form-control" id="msg" name="msg" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Gửi</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 bg-secondary text-white rounded">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8911757863025!2d105.75562867479395!3d10.02583839008093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0896bcf7b7f4d%3A0x734067dcfe2b2d39!2sDee%20Coffee%20(%20Chi%20Nh%C3%A1nh%201%20)!5e0!3m2!1svi!2s!4v1721913320471!5m2!1svi!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
