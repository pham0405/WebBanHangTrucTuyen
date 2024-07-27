@extends('layout.master')
@section('contents')
    @title('Giới Thiệu')
    <div>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Giới thiệu về chúng tôi</title>
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        </head>

        <body>
            <div class="container">
                <h1>Giới Thiệu</h1>
            </div>
            <style>
                .container h1 {
                    text-align: center;
                }

                type="text/css">body {
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 12px;
                }

                a:link {
                    text-decoration: none
                }

                a:visited {
                    text-decoration: none
                }

                a:hover {
                    text-decoration: none
                }


                .serviceBox {
                    padding: 15px 15px 25px;
                    margin: 40px auto 0;
                    text-align: center;
                    cursor: pointer;
                    border-radius: 4px;
                    background: #fff;
                    border: 1px solid #008b8b;
                    border-bottom-width: 3px;
                    position: relative;
                }

                .serviceBox .service-icon {
                    width: 70px;
                    height: 70px;
                    line-height: 70px;
                    border-radius: 4px;
                    border: 1px solid #008b8b;
                    background: #fff;
                    color: #008b8b;
                    margin: -48px auto 20px;
                }

                .serviceBox .service-icon i {
                    display: inline-block;
                    font-size: 3em;
                    line-height: 70px;
                }

                .serviceBox:hover .service-icon {
                    background: #008b8b;
                    color: #fff;
                }

                .serviceBox h3 {
                    font-size: 20px;
                    font-weight: normal;
                    letter-spacing: 0.7px;
                    position: relative;
                    margin: 20px 0 10px 0;
                    padding: 10px 0;
                    background: none;
                    overflow: hidden;
                    color: #555;
                }

                .serviceBox h3:before {
                    content: &quot;
                    &quot;
                    ;
                    background: #008b8b;
                    width: 0;
                    height: 2px;
                    position: absolute;
                    bottom: 0;
                    left: 50%;
                }

                .serviceBox h3:after {
                    content: &quot;
                    &quot;
                    ;
                    background: #008b8b;
                    width: 0;
                    height: 2px;
                    position: absolute;
                    bottom: 0;
                    right: 50%;
                }

                .serviceBox:hover h3:after,
                .serviceBox:hover h3:before {
                    width: 100%;
                }

                .serviceBox,
                .service-icon,
                .serviceBox .service-icon i,
                .serviceBox h3:before,
                .serviceBox h3:after,
                .serviceBox .read {
                    transition: all 0.5s ease-in-out;
                }

                .serviceBox p {
                    font-size: 14px;
                    margin: 0 0 15px;
                }

                .serviceBox .read {
                    color: #008b8b;
                }

                @media screen and (max-width: 990px) {
                    .serviceBox {
                        margin: 60px auto 0;
                    }
                }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon"> <i class="fa fa-laptop"></i>
                            </div>
                            <h3><a href="http://hocwebgiare.com/dich-vu-web2/Thiet-ke-web-doanh-nghiep.html"
                                    title="Thiết kế web doanh nghiệp">Thiết kế web doanh nghiệp</a>
                            </h3>
                            <p> HocwebGiare.com cung cấp dịch vụ xây dựng thiết kế website chuyên nghiệp cho các công ty,
                                doanh nghiệp ở mọi lĩnh vực: nhà hàng, spa, bất động sản, xuất nhập khẩu, trường học, tư
                                vấn, sản xuất, xây dựng, dịch vụ, thương mại… </p> <a class="read"
                                href="http://hocwebgiare.com/dich-vu-web2/Thiet-ke-web-doanh-nghiep.html">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon"> <i class="fa fa-briefcase"></i>
                            </div>
                            <h3><a href="http://hocwebgiare.com/dich-vu-web1/Tu-van-thiet-ke-website.html"
                                    title="Tư vấn thiết kế websit">Tư vấn thiết kế website</a>
                            </h3>
                            <p> HocwebGiare.com cung cấp một giải pháp tư vấn thiết kế website chuyên nghiệp, khoa học, ấn
                                tượng sáng tạo.Với nhiều năm kinh nghiệm trong việc đào tạo và thiết kế website chúng tôi
                                luôn sẵn sàng trả lời các câu hỏi về lĩnh vực thiết kế website... </p> <a class="read"
                                href="http://hocwebgiare.com/dich-vu-web1/Tu-van-thiet-ke-website.html">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="serviceBox">
                            <div class="service-icon"> <i class="fa fa-mobile"></i>
                            </div>
                            <h3><a href="http://hocwebgiare.com/dich-vu-web3/Thiet-ke-web-theo-yeu-cau.html"
                                    title="Thiết kế web theo yêu cầu">Thiết kế web theo yêu cầu</a>
                            </h3>
                            <p> Mỗi Khách hàng đều có hình thức kinh doanh và lĩnh vực hoạt động khác nhau. Chính vì thế,
                                luôn có những yêu cầu khác nhau về giao diện, cấu trúc, chức năng, cũng như màu sắc. Chúng
                                tôi với đội ngũ thiết kế chuyên nghiệp sẽ cùng bạn xây dựng... </p> <a class="read"
                                href="http://hocwebgiare.com/dich-vu-web3/Thiet-ke-web-theo-yeu-cau.html">Chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        </html>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/jquery-1.11.1.min.js"></script>




    </div>
@endsection
