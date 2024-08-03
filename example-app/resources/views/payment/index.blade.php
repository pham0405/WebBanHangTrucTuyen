<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
</head>
<body>
    <h1>Thanh toán MoMo</h1>
    <form action="{{ route('payment.pay') }}" method="post">
        @csrf
        <button type="submit">Thanh toán ngay</button>
    </form>
</body>
</html>