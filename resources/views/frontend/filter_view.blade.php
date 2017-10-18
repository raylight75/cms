@extends('frontend.master')
@section('content')
    <!-- BREADCRUMBS -->
    <section
            class="breadcrumb {{$cats[$parent]['name']}} parallax margbot30">
        <style>
            .breadcrumb.{{$cats[$parent]['name']}}
  {
                margin: 0;
                padding: 179px 0 81px;
                border-radius: 0;
                border: 0;
                background-color: inherit;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .breadcrumb.{{$cats[$parent]['name']}}
  {
                background-image: url({{ url('images/categories') }}/{{$cats[$parent]['banner']}});
            }
        </style>
        <!-- CONTAINER -->
        <div class="container">
            <h2>{{$cats[$parent]['name']}}</h2>
        </div>
        <!-- //CONTAINER -->
    </section>
    <!-- //BREADCRUMBS -->

    <section class="shop">
        <div class="container">
            @include('frontend/search', ['url'=>'/items/search/'.$cats[$parent]['id'].''])
        </div>
    </section>

    <!-- SHOP BLOCK -->
    <section class="shop">

        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">

                <!-- SIDEBAR -->
                <div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">
                    @include('frontend/shop_filter')
                </div>
                <!-- //SIDEBAR -->

                <!-- SHOP PRODUCTS -->
                <div class="col-lg-9 col-sm-9 padbot20">

                    <!-- SHOP BANNER -->
                    @if (Input::exists('categ'))
                        <div class="banner_block margbot15">
                            <a class="banner nobord">
                                <img src="{{ url('images/categories') }}/{{$banner->f_img}}" alt=""/></a>
                        </div>
                        <!-- //SHOP BANNER -->

                    @else
                    <!-- SHOP BANNER -->
                        <div class="banner_block margbot15">
                            <a class="banner nobord" href="javascript:void(0);">
                                <img src="{{ url('images/categories') }}/{{$cats[$parent]['name']}}.jpg" alt=""/></a>
                        </div>
                    @endif
                <!-- //SHOP BANNER -->

                    <!-- SORTING TOVAR PANEL -->
                    <div class="sorting_options clearfix">
                        <div class="count_tovar_items">
                            <p>@lang('site.products')</p>
                            <span>Items</span>
                        </div>
                        <!-- //COUNT TOVAR ITEMS -->

                        <!-- PRODUC SIZE -->
                        <div id="toggle-sizes">
                            <a class="view_box active" href="javascript:void(0);">
                                <i class="fa fa-th-large"></i></a>
                            <a class="view_full" href="javascript:void(0);">
                                <i class="fa fa-th-list"></i></a>
                        </div>
                        <!-- //PRODUC SIZE -->
                    </div>
                    <!-- //SORTING TOVAR PANEL -->

                    <div class="padbot60 services_section_description">
                        <p>Gluten-free quinoa selfies carles, kogi gentrify retro marfa
                            viral.</p>
                        <p>We empower WordPress developers with design-driven themes and a
                            classy experience their clients will just love</p>
                        <span>Gluten-free quinoa selfies carles, kogi gentrify retro marfa
						viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh
						synth blue bottle iphone.
                    </span>
                    </div>
                    <!-- Live Search Form -->
                    <!--<input type="text" name="search_text" id="search_text" placeholder="Live Search" class="form-control"/> -->
                    <!-- //Live Search Form -->
                    @include('frontend/product_container')
                </div>
                <!-- //SHOP PRODUCTS -->
            </div>
            <!-- //ROW -->
        </div>
        <!-- //CONTAINER -->
    </section>
@section('script')
    <script type="text/javascript">
        var route = '{{ url('items/search') }}/{{$cats[$parent]['id']}}';
        var autoRoute = '{{ url('search/autocomplete') }}';
        //Live Search AJAX
        $(document).ready(function () {
            $('#search_text').keyup(function () {
                var txt = $(this).val();
                if (txt != '') {
                    $.ajax({
                        url: route,
                        method: "get",
                        data: {search: txt},
                        dataType: "json",
                        success: function (data) {
                            $('#ajaxproducts').html(data);
                        }
                    });
                }
                else {
                    $('#ajaxproducts').html('');
                }
            });
        });
        //End Live Search
        //Autocomplete
        $(autoComplete);
        function autoComplete() {
            $("#search_auto").autocomplete({
                source: autoRoute,
                minLength: 3,
                position: { my: "left top", at: "center"},
            });
        }
        //End Autocomplete
    </script>
@endsection
<!-- //SHOP -->
@endsection