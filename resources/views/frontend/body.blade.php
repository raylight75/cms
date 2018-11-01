@extends('frontend.master')
@section('content')
    @include('frontend/sliders')
    <!-- TOVAR SECTION -->
    <section class="tovar_section">

        <!-- CONTAINER -->
        <div class="container">
            <h2>@lang('site.featured')</h2>

            <!-- ROW -->
            <div class="row">

                <!-- TOVAR WRAPPER -->
                <div class="tovar_wrapper" data-appear-top-offset='-100'
                     data-animated='fadeInUp'>

                    <!-- BANNER -->
                    <div class="col-lg-3 col-md-3 col-xs-6 col-ss-12">
                        <a class="banner type3 margbot40" href="javascript:void(0);">
                            <img src="{{ url('images/tovar') }}/banner3.jpg" alt=""/></a>
                    </div>
                    <!-- //BANNER -->

                    @include('partials/item')

                    <div class="respond_clear_768"></div>

                    <!-- BANNER -->
                    <div class="col-lg-3 col-md-3 col-xs-6 col-ss-12">
                        <a class="banner type1 margbot30" href="javascript:void(0);">
                            <img src="{{ url('images/tovar') }}/banner1.jpg" alt=""/></a>
                        <a class="banner type2 margbot40" href="javascript:void(0);">
                            <img src="{{ url('images/tovar') }}/banner2.jpg" alt=""/></a>
                    </div>
                    <!-- //BANNER -->

                </div>
                <!-- //TOVAR WRAPPER -->
            </div>
            <!-- //ROW -->
            <!-- ROW -->
            <div class="row">
                <!-- BANNER WRAPPER -->
                <div class="banner_wrapper" data-appear-top-offset='-100'
                     data-animated='fadeInUp'>
                    <!-- BANNER -->
                    <div class="col-lg-9 col-md-9">
                        <a class="banner type4 margbot40" href="javascript:void(0);">
                            <img src="{{ url('images/tovar') }}/banner4.jpg" alt=""/></a>
                    </div>
                    <!-- //BANNER -->
                    <!-- BANNER -->
                    <div class="col-lg-3 col-md-3">
                        <a class="banner nobord margbot40" href="javascript:void(0);">
                            <img src="{{ url('images/tovar') }}/banner5.jpg" alt=""/></a>
                    </div>
                    <!-- //BANNER -->
                </div>
                <!-- //BANNER WRAPPER -->
            </div>
            <!-- //ROW -->

        </div>
        <!-- //CONTAINER -->
    </section>
    <!-- //TOVAR SECTION -->


    <!-- NEW ARRIVALS -->
    <section class="new_arrivals padbot50">

        <!-- CONTAINER -->
        <div class="container">
            <h2>@lang('site.arrivals')</h2>

            <!-- JCAROUSEL -->
            <div class="jcarousel-wrapper">

                <!-- NAVIGATION -->
                <div class="jCarousel_pagination">
                    <a href="javascript:void(0);"
                       class="jcarousel-control-prev">
                        <i class="fa fa-angle-left"></i></a>
                    <a href="javascript:void(0);"
                       class="jcarousel-control-next">
                        <i class="fa fa-angle-right"></i></a>
                </div>
                <!-- //NAVIGATION -->

                <div class="jcarousel" data-appear-top-offset='-100'
                     data-animated='fadeInUp'>
                    <ul>
                        @foreach($latest as $row)
                            <li>
                                <!-- TOVAR -->
                                <div class="tovar_item_new">
                                    <div class="tovar_img">
                                        <img src="{{ url('images/products') }}/{{$row->a_img}}" alt=""/>
                                        <a class="open-project tovar_view"
                                           href="{{ url('/') }}/{{$row->category->cat}}/{{$row->slug}}/{{$row->id}}">
                                            @lang('site.quick view')</a>
                                    </div>
                                    <div class="tovar_description clearfix">
                                        <a class="tovar_title"
                                           href="{{ url('/') }}/{{$row->category->cat}}/{{$row->slug}}/{{$row->id}}">{{$row->name}}</a>

                                    </div>
                                </div>
                                <!-- //TOVAR -->
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- //JCAROUSEL -->
        </div>
        <!-- //CONTAINER -->
    </section>
    <!-- //NEW ARRIVALS -->

    <!-- BRANDS -->
    <section class="brands_carousel">

        <!-- CONTAINER -->
        <div class="container">
            <h2>@lang('site.brands')</h2>
            <!-- JCAROUSEL -->
            <div class="jcarousel-wrapper">

                <!-- NAVIGATION -->
                <div class="jCarousel_pagination">
                    <a href="javascript:void(0);" class="jcarousel-control-prev">
                        <i class="fa fa-angle-left"></i></a>
                    <a href="javascript:void(0);" class="jcarousel-control-next">
                        <i class="fa fa-angle-right"></i></a>
                </div>
                <!-- //NAVIGATION -->

                <div class="jcarousel" data-appear-top-offset='-100'
                     data-animated='fadeInUp'>
                    <ul>
                        <?php $i = 1;?>
                        @foreach ($brands as $row)
                            <li>
                                <a><img src="{{ url('/') }}/images/brands/{{$i++}}.jpg" alt=""/></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- //JCAROUSEL -->
        </div>
        <!-- //CONTAINER -->
    </section>
    <!-- //BRANDS -->

    <hr class="container">

    @include('frontend/services')

    <hr class="container">
@endsection