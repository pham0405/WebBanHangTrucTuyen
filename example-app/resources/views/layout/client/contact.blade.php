@extends('layout.master')
@section('contents')
    @title('Liên Hệ')
    <div>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Feedback Form with map</title>
            <link rel=
    "stylesheet" href=
    "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
                integrity=
    "sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
                crossorigin="anonymous">
            <link rel="stylesheet"
                href=
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
                integrity=
    "sha512-jKX8EOtiVrylMIEk2nRkf5KowSF8+AJslPduL+oV4FqnyxSQxL0t4rKOeKKvntPtskFi1q6hBld6HzfdjZlnfA=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>

        <body>
            <div class="container">
                <h1>Liên Hệ</h1>
            </div>
            <style>
                .container h1 {
                    text-align: center;
                }
            </style>


            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-4 bg-white border rounded">
                            <h1 class="text-center " style = "color : #DEAD6F">Waggy pet Shop</h1>
                            <h2 class="text-center">Contact Us</h2>
                            <form>
                                <div class="form-group">
                                    <label for="fullName">
                                        <i class="fa fa-user"></i> Full Name:
                                    </label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        <i class="fa fa-envelope"></i> Email Address:
                                    </label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">
                                        <i class="fa fa-phone"></i> Contact No:
                                    </label>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" required>
                                </div>
                                <div class="form-group">
                                    <label for="msg">
                                        <i class="fa fa-comment"></i> Write Message:
                                    </label>
                                    <textarea class="form-control" id="msg" name="msg" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
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
        </body>

        </html>


    </div>
@endsection
