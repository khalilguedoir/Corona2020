<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <!-- <script src="{{asset('template/js/jquery.min.js')}}"></script> -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{asset('template/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/jquery.mCustomScrollbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/lib/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/scrollbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/script.js')}}"></script>
    @yield('script')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href=" {{ asset('template/css/animate.css') }} ">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/line-awesome.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('template/css/line-awesome-font-awesome.min.css')}}"> -->
	<link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('template/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('template/lib/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('template/lib/slick/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/responsive.css')}}">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    
    @yield('linkSheet')
</head>
<body>
  
@include('layouts.nav')
<!-- el div class wrapper teb3a tmplate 3ala heka zedtha -->
   <div class="wrapper"> 
    <main>
        <div class="main-section p-4">
            @yield('content')
        </div>

    </div>
</main>

@yield('javascript')
</body>
</html>
