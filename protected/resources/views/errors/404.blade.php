<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('asset/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
</head>
<body>
<div id="app">
    <div class="container">
        <div class="well" style="text-align: center; margin-top: 60px">
            <img src="{{ asset('asset/img/smile.png') }}" alt="Error 404" style="max-height: 244px; max-width: 244px">
            <h1>Error 404</h1>
            <h1>Can't Found This Page</h1>
            <a href="{{ url('/') }}" class="btn btn-default btn-lg"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>

</div>


<!-- Scripts -->
<!-- jQuery Scripts -->
<script src="{{ asset('asset/js/app.js') }}"></script>
</body>
</html>
