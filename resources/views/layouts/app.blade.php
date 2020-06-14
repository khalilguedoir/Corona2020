<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{asset('template/js/jquery.min.js')}}"></script>

    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script type="text/javascript" src="{{asset('template/js/popper.js')}}"></script>
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
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/line-awesome.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('template/css/line-awesome-font-awesome.min.css')}}"> -->
	<link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('template/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('template/lib/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('template/lib/slick/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/responsive.css')}}">
    <link href="https://s3.amazonaws.com/codecademy-content/projects/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet" type="text/css">
    @yield('linkSheet')
</head>
<body>

@include('layouts.nav')
<!-- el div class wrapper teb3a tmplate 3ala heka zedtha -->
   <div class="wrapper">

        <main class="p-4">
            @yield('content')
        </main>

    </div>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ URL::to('js/app.js') }}"></script>
</body>
</html>
