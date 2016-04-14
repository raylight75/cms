<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<head>

    <meta charset="utf-8">
    <title>404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="404 page">
    <meta name="author" content="EShop">
    <meta name="keyword" content="404 page">

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
        <header>
        </header>
        <!-- //HEADER -->

        <!-- PAGE 404 -->
        <section class="page404 parallax">

            <!-- CONTAINER -->
            <div class="container">
                <div class="wrapper404">
                    <h1>404</h1>

                    <h2>ERROR</h2>

                    <p>The page you are looking for does not exist. Return to the home page</p>
                    <a class="btn btn-white" href="{{ url('cms') }}">Return to home page</a>
                </div>
            </div>
            <!-- //CONTAINER -->
        </section>
        <!-- //PAGE 404 -->

        <!-- FOOTER -->
        @include('frontend.footer')
                <!-- //FOOTER -->
    </div>
    <!-- //PAGE -->
</div>
@include('frontend.javascripts')
</body>
</html>