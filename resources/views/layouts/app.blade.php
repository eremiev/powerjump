<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    {{--<link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">--}}

    {{--<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/structure.css') }}" rel="stylesheet">



    <meta name="description" content="Power Jump">

    @if (trim($__env->yieldContent('title')))
        <title>@yield('title')</title>
    @else
        <title>{{ config('app.name', 'Power Jump') }}</title>
    @endif


    @if (trim($__env->yieldContent('facebook')))
        @yield('facebook')
    @else
    <!-- Facebook -->
        <meta property="og:title" content="club Power Jump - Extrem & Art"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="http://powerjump.info"/>
        <meta property="og:image" content="http://powerjump.info/images/img1.jpg"/>
        <meta property="og:site_name" content="Power Jump"/>
        <meta property="og:description" content="НПО “Power Jump”, Сдружение в обществена полза, с цел да обединява и активизира спортно - екстремно ориентирани хора, както и хора, желаещи да се развиват в сферата на атрактивните изкуства, атракционните и физическата активност."/>
        <meta property="og:locale" content="bg_BG"/>
        <meta property="fb:admins" content="1549776988"/>
        <!-- END Facebook -->
    @endif



    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

    @if(Route::currentRouteName() != 'login' && Route::currentRouteName() != 'register')
        @include('pages.nav')
    @endif
    <div style="margin-top: 50px;">
        @yield('content')
    </div>
    @if(Route::currentRouteName() != 'login' && Route::currentRouteName() != 'register')
        @include('pages.footer')
    @endif


<!-- JavaScript -->
<script src="{{ asset('assets/js/jquery.min.js') }}" defer></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('assets/js/wow.min.js') }}" defer></script>
<script src="{{ asset('assets/js/custom.js') }}" defer></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v10.0" nonce="hMzWyV2q"></script>
</body>
</html>