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
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
</head>
<body>
<div id="app">
    @include('layouts.partials.navbar')
    <div class="container">
        <div class="well" style="text-align: center">
            <img src="{{ asset('asset/img/smile.png') }}" alt="Error 401" style="max-height: 244px; max-width: 244px">
            <h1>Error 401 </h1>
            <h1>UNAUTHORIZED</h1>
            <h3>You don't have Access to This Content</h3>
        </div>
    </div>
</div>


<!-- Scripts -->
<!-- jQuery Scripts -->
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>

<script src="{{ asset('asset/js/app.js') }}"></script>
<script src="{{ asset('asset/js/costum.js') }}"></script>
</body>
</html>
