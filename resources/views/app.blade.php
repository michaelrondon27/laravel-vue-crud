<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel & VUE</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/toastr/css/toastr.css') }}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('plugins/jquery/jquery-3.2.1.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('plugins/toastr/js/toastr.js') }}"></script>
        <script src="{{ asset('plugins/vue/vue.js') }}"></script>
        <script src="{{ asset('plugins/axios/axios.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
