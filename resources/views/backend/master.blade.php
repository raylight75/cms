<!DOCTYPE html>
<html>

<head>
    <title>Admin Backend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style-backend.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/flat-blue.css') }}">

    <!-- SCRIPTS -->
    <script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
    {!! Rapyd::styles(false) !!}
    {!! Rapyd::head() !!}

</head>

<body class="flat-blue">
<div class="app-container">
    <div class="row content-container">
        @include('backend.navbar')
        @include('backend.sidebar')
        @yield('content')
    </div>
    <!-- FOOTER -->
    @include('backend.footer')
            <!-- //FOOTER -->
</div>
</body>

</html>
