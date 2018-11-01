@extends('frontend.master')
@section('content')
@include('frontend/sliders')

        <!-- TOVAR SECTION -->
<section class="tovar_section">

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">

            <!-- TOVAR WRAPPER -->
            <div class="tovar_wrapper" data-appear-top-offset='-100'
                 data-animated='fadeInUp'>

                <!-- TOVAR -->
                <div ng-app="myApp" ng-controller="productCtrl">
                    <h2>@lang('site.featured')</h2>
                    <h3 >Type a letter:</h3>
                    <p><input type="text" class="form-control" ng-model="products"></p>

                    <!-- BANNER -->
                    <div class="col-lg-3 col-md-3 col-xs-6 col-ss-12">
                        <a class="banner type3 margbot40" href="javascript:void(0);">
                            <img src="{{ url('images/tovar') }}/banner3.jpg" alt=""/></a>
                    </div>
                    <!-- //BANNER -->

                    {{-- PAGINATION <div dir-paginate="row in items | filter:products | orderBy:orderProp | limitTo:latest | itemsPerPage:3"--}}
                    <div ng-repeat="row in items | filter:products | orderBy:orderProp | limitTo:latest"
                    {{-- | toArray : false --}}
                    {{-- LOAD MORE limitTo:paginationLimit --}}
                         class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
                        <div class="tovar_item">
                            <div class="tovar_img">
                                <div class="tovar_img_wrapper" style="height: 370px;">
                                    <img class="img" src="{{ url('images/products') }}/@{{row.a_img}}" alt=""/>
                                    <img class="img_h fancybox fancybox.ajax" href="{{ url('frame') }}/@{{row.product_id}}"
                                         src="{{ url('images/products') }}/@{{row.b_img}}" alt=""/>
                                </div>
                                <div class="tovar_item_btns">
                                    <a class="open-project tovar_view"
                                       href="{{ url() }}/@{{row.category.cat}}/@{{row.slug}}/@{{row.product_id}}">
                                        <span>@lang('site.product')</span> @lang('site.view')</a>
                                    <a class="add_bag" href="{{ url('login') }}"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="tovar_description clearfix">
                                <a class="tovar_title"
                                   href="{{ url() }}/@{{row.category.cat}}/@{{row.slug}}/@{{row.product_id}}">@{{row.name}}</a>
                            </div>
                        </div>
                    </div>
                    {{-- LOAD MORE <div class="col-lg-9 col-md-9">
                    <button ng-click="loadMore()"  type="submit" class="btn btn-default">LOAD MORE</button><p></p>
                        </div>--}}
                    {{-- PAGINATION <dir-pagination-controls
                            max-size="3"
                            direction-links="true"
                            boundary-links="true" >
                    </dir-pagination-controls>--}}
                </div>
                            <!-- //TOVAR -->

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
                                       href="{{ url() }}/{{$row->category->cat}}/{{$row->slug}}/{{$row->id}}">
                                        <?= _('quick view')?></a>
                                </div>
                                <div class="tovar_description clearfix">
                                    <a class="tovar_title"
                                       href="{{ url() }}/{{$row->category->cat}}/{{$row->slug}}/{{$row->id}}">{{$row->name}}</a>

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
                        <li><a href="{{ url() }}/brand/{{$row->brand}}/{{$row->brand_id}}">
                                <img src="{{ url() }}/images/brands/{{$i++}}.jpg" alt=""/></a>
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