<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        @yield('title')
    </title>
    

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
<link href="{{ URL::to('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/owl.theme.css') }}" rel="stylesheet">
   
    <!-- theme stylesheet -->
    <link href="{{ URL::to('css/style.default.css') }}" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{ URL::to('css/custom.css') }}" rel="stylesheet">

    <script src="{{ URL::to('js/respond.min.js') }}"></script>

    <link rel="shortcut icon" href="{{ URL::to('favicon.png') }}">


    @yield('styles')
</head>

<body>
    @include('partials.header')

<div id="all">
    @yield('content')
</div>

    @include('partials.footer')
      
    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="{{ URL::to('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.cookie.js') }}"></script>
    <script src="{{ URL::to('js/waypoints.min.js') }}"></script>
    <script src="{{ URL::to('js/modernizr.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap-hover-dropdown.js') }}"></script>
    <script src="{{ URL::to('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::to('js/front.js') }}"></script>

@yield('scripts')

</body>
</html>