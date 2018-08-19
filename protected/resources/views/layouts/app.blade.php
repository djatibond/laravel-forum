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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    <style >
        .inline-it {
            display: inline-block !important;
        }
        .liked{
            color: red;
        }
    </style>
</head>
<body>
<div id="app">
    @include('layouts.partials.navbar')
    @yield('slider')
    <div class="container">
        @include('layouts.partials.success')
        @include('layouts.partials.error')
        @yield('content')
    </div>
    @include('layouts.partials.footer')

    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</div>


<!-- Scripts -->
<!-- jQuery Scripts -->
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>

<!-- Carousel Scripts -->
<script>
    $('#myCarousel').carousel({
        interval: 4000, paus: "hover"
    });
</script>

<!-- Popover Script -->
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
</script>

<!-- Like It Script -->
<script>
    function likeIt(commentId,elem){
        var csrfToken='{{csrf_token()}}';
        var likesCount=parseInt($('#'+commentId+"-count").text());
        $.post('{{route('toggleLike')}}', {commentId: commentId,_token:csrfToken}, function (data) {
            console.log(data);
            if(data.message==='liked'){
                $(elem).addClass('liked');
                $('#'+commentId+"-count").text(likesCount+1);
            }else{
                $('#'+commentId+"-count").text(likesCount-1);
                $(elem).removeClass('liked');
            }
        });
    }
</script>

<script src="{{ asset('asset/js/app.js') }}"></script>
<script src="{{ asset('asset/js/costum.js') }}"></script>
</body>
</html>
