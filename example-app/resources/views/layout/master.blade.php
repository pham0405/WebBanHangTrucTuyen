<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('meta_tittle' , 'Home')</title>

    @stack('style')
</head>
<body>

  
    <x-header></x-header>
    @yield('content')


   <x-slidebar></x-slidebar>


    <x-footer></x-footer>
    @stack('script')
</body>
</html>