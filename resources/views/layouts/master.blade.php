<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
	<meta name="description" content="Quick Data">
	<meta name="author" content="Cosmos Technologies">
	<meta name="keywords" content="Quick Data, ISP management">

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<title> {{Config::get('app.name')}} | @yield('page_title')</title>
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/style_web.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/normalize.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->


    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

    <!-- For animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>

    @vite('resources/js/app.js')

</head>

<body>
    @yield('body-content')
</body>

@yield('script_index')

</html>
