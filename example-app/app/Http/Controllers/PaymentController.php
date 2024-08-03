<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index');
    }

    public function pay(Request $request)
    {
        $endpoint = env('MOMO_ENDPOINT');
        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');
        $orderId = time() . "";
        $orderInfo = "Thanh toán qua MoMo";
        $amount = "10000";
        $redirectUrl = route('payment.return');
        $ipnUrl = route('payment.return');
        $extraData = "";

        $requestId = time() . "";
        $requestType = "captureWallet";
        $extraData = "";

        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = [
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        ];

        $client = new Client();
        $response = $client->post($endpoint, [
            'json' => $data
        ]);

        $body = json_decode($response->getBody(), true);

        return redirect()->to($body['payUrl']);
    }

    public function return(Request $request)
    {
        // Xử lý thông tin thanh toán trả về từ MoMo
        $data = $request->all();
        if ($data['resultCode'] == 0) {
            // Thanh toán thành công
            return "Thanh toán thành công!";
        } else {
            // Thanh toán thất bại
            return "Thanh toán thất bại!";
        }
    }
}