<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link rel="shortcut icon" href="images/favicon.ico">

<!-- CSS -->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('/css/flexslider.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('/css/fancySelect.css') }}" rel="stylesheet" media="screen, projection"/>
<link href="{{ asset('/css/animate.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css"/>

<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,
                       700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link href="{{ asset('/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

<!-- CLEARFIX -->
<div class="clearfix padbot40">
    <div class="tovar_view_fotos clearfix">
        <ul class="slides">
            <li><a><img src="{{ url('images/products') }}/{{$item->a_img}}"
                        alt="" /></a></li>
        </ul>
    </div>

    <div class="tovar_view_description">
        <div class="tovar_view_title"><h1>@lang('site.quick view')</h1></div>
        <div class="tovar_view_title">{{$item->name}}</div>
        <div class="tovar_article">88-305-676</div>
        <div class="clearfix tovar_brend_price">
            <div class="pull-left tovar_brend">{{$item->brand}}</div>
            <div class="pull-right tovar_view_price">
                {!! Helper::price($item->price) !!}&nbsp{!! $currency !!}
            </div>
        </div>
        <div class="tovar_color_select">
            <p>@lang('site.аvailable color')</p>
            @foreach($item->color as $c)
                <a class="color{{$c->color_id}}"></a>
            @endforeach
        </div>
        <div class="tovar_size_select">
            <div class="clearfix">
                <p class="pull-left">@lang('site.аvailable size')</p>
                <span><?= _('Size & Fit')?></span>
            </div>
            @foreach($item->size as $s)
                <a class="sizeXXXL">{{$s->size}}</a>
            @endforeach
        </div>
        <div class="box visible">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur.
            </p>
        </div>
        <div class="tovar_shared clearfix">
            <p>@lang('site.share')</p>
            <ul>
                <li><a class="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                <li><a class="linkedin" href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="google-plus" href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="tumblr" href="javascript:void(0);"><i class="fa fa-tumblr"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //CLEARFIX -->