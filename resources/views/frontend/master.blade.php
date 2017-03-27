<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<head>

    <meta charset="utf-8">
    <title>{{ $meta->title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $meta->description }}">
    <meta name="author" content="EShop">
    <meta name="keyword" content="{{ $meta->keyword }}">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/flexslider.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/fancySelect.css') }}" rel="stylesheet" media="screen, projection"/>
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css"/>

    <!-- SCRIPTS -->

    <script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="{{ asset('/js/dirPagination.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/productCtrl.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/toArrayFilter.js') }}" type="text/javascript"></script>

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,
                       700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="{{ asset('/font-awesome/css/font-awesome.css') }}" rel="stylesheet">


</head>
<body>

<!-- PRELOADER -->
<div id="preloader">
    <img src="{{ url('images/preloader.gif') }}" alt=""/></div>
<!-- //PRELOADER -->
<div class="preloader_hide">
    <!-- PAGE -->
    <div id="page">

        <!-- HEADER -->
        @include('frontend.header')
                <!-- //HEADER -->
        @yield('content')
        @yield('script')
                <!-- FOOTER -->
        @include('frontend.footer')
                <!-- //FOOTER -->
    </div>
    <!-- //PAGE -->
</div>
@include('frontend.javascripts')
</body>
</html>