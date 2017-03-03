<header>

    <!-- TOP INFO -->
    <div class="top_info">

        <!-- CONTAINER -->
        <div class="container clearfix">
            <ul class="secondary_menu">
                @if  (Auth::check() && Auth::user()->hasRole('admin'))
                    <li><a href="{{ url('backend/admin') }}">@lang('site.admin panel')</a></li>
                    @include('frontend.logout')
                @elseif(Auth::check() && Auth::user()->hasRole('user'))
                    <li><a href="{{ url('backend/user') }}">@lang('site.user panel')</a></li>
                    @include('frontend.logout')
                @else
                    <li><a href="">@lang('site.my account')</a></li>
                    <li><a href="{{ url('auth/register') }}">@lang('site.register')</a></li>

                @endif
            </ul>
        </div>
        <!-- //CONTAINER -->
    </div>
    <!-- TOP INFO -->


    <!-- MENU BLOCK -->
    <div class="menu_block">

        <!-- CONTAINER -->
        <div class="container clearfix">
            @if (!Auth::check())
            @else
                    <!-- SHOPPING BAG -->
            @if ($cart->first() == '')
                <div class="shopping_bag">
                    <a class="shopping_bag_btn" href="javascript:void(0);"><i class="fa fa-shopping-cart"></i>

                        <p>@lang('site.shopping bag')</p><span>{{$rows}}</span></a>

                    <div class="cart">
                        <ul class="cart-items">
                            <li class="clearfix"><span class="cart_item_price">@lang('site.shopping bag message')</span>
                            </li>
                        </ul>
                    </div>
                </div>
                @else
                        <!-- //SHOPPING BAG -->
                <!-- SHOPPING BAG -->
                <div class="shopping_bag">
                    <a class="shopping_bag_btn" href="javascript:void(0);"><i class="fa fa-shopping-cart"></i>

                        <p>@lang('site.shopping bag')</p>
                        <span>{{$rows}}</span></a>

                    <div class="cart">
                        @foreach ( $cart as $item )
                            <ul class="cart-items">
                                <li class="clearfix">
                                    <img class="cart_item_product"
                                         src="{{ url('images/products') }}/{{$item->options->img}}" alt=""/>
                                    <a href="{{ url('cart') }}" class="cart_item_title">{{$item->name}}</a>
										<span class="cart_item_price">{{$item->qty}}
                                            x{!! Helper::currency($item->price) !!}&nbsp{!! Helper::label() !!}</span>
                                </li>
                            </ul>
                        @endforeach
                        <div class="cart_total">
                            <div class="clearfix">
										<span class="cart_subtotal">@lang('site.bag subtotal')
                                            <b>{!! Helper::currency($grand_total) !!}
                                                &nbsp{!! Helper::label() !!}</b></span>
                            </div>
                            <a class="btn active"
                               href="{{ url('checkout/shipping') }}">@lang('site.checkout')</a>
                        </div>
                    </div>
                </div>
                @endif
                        <!-- //SHOPPING BAG -->
                @endif
                        <!-- MENU -->
                <ul class="navmenu center">
                    <li class="normal menu"><a href="{{ url('cms') }}">@lang('site.home')</a>
                        <!-- MEGA MENU -->
                    </li>
                    <!-- //MEGA MENU -->
                    <!-- MEGA MENU-->
                    @foreach($menu as $row)
                        <li class="sub-menu"><a>{{$row['name']}}</a>
                            <ul class="mega_menu megamenu_col1 clearfix">
                                <li class="col">
                                    @foreach($row['sub_cat'] as $item)
                                        <ol>
                                            <li>
                                                <a href="{{ url('') }}/{{$row['name']}}/{{$item['name']}}/{{$item['parent_id']}}?categ[]={{$item['id']}}">
                                                    {{$item['name']}}</a>
                                            </li>
                                        </ol>
                                    @endforeach
                                </li>
                            </ul>
                        </li>
                        @endforeach
                                <!-- //MEGA MENU -->
                        <!-- MEGA MENU -->
                        <li class=" normal menu"><a href="{{ url('blog') }}">@lang('site.blog')</a></li>
                        <!-- //MEGA MENU -->
                        <li class="last sale_menu"><a href="{{ url('eshop') }}">@lang('site.sale')</a></li>
                        <li class="normal menu"><a href="{{ url('contacts') }}">@lang('site.contacts')</a>
                        <li class="normal menu"><a href="{{ url('aboutus') }}">@lang('site.about us')</a>
                        <li class="normal menu"><a href="{{ url('login') }}">@lang('site.login')</a>
                        <li class="sub-menu"><a>{!! Helper::label() !!}</a>
                            <ul class="mega_menu megamenu_col1 clearfix">
                                <li class="col">
                                    @foreach($currencies as $row)
                                        <ol>
                                            <li><a href="{{ url('currency') }}/{{$row->name}}">
                                                    {{$row->name}}</a></li>
                                        </ol>
                                    @endforeach
                                </li>
                            </ul>
                        </li>
                    <li class="sub-menu"><a>@lang('site.lng')</a>
                        <ul class="mega_menu megamenu_col1 clearfix">
                            <li class="col">
                                    <ol><li><a href="{{ url('lg') }}/en">en</a></li></ol>
                                    <ol><li><a href="{{ url('lg') }}/bg">bg</a></li></ol>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- //MENU -->
        </div>
        <!-- //CONTAINER -->
    </div>
    <!-- //MENU BLOCK -->
</header>