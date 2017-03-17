<header>

    <!-- TOP INFO -->
    <div class="top_info">

        <!-- CONTAINER -->
    @include('partials/user_menu')
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
                                <li class="clearfix"><span
                                            class="cart_item_price">@lang('site.shopping bag message')</span>
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
                                            x{!! Helper::price($item->price) !!}&nbsp{!! $currency !!}</span>
                                    </li>
                                </ul>
                            @endforeach
                            <div class="cart_total">
                                <div class="clearfix">
										<span class="cart_subtotal">@lang('site.bag subtotal')
                                            <b>{!! Helper::price($grand_total) !!}
                                                &nbsp{!! $currency !!}</b></span>
                                </div>
                                <a class="btn active"
                                   href="{{ url('checkout/shipping') }}">@lang('site.checkout')</a>
                            </div>
                        </div>
                    </div>
                @endif
            <!-- //SHOPPING BAG -->
            @endif
            @include('partials/menu')
        </div>
        <!-- //CONTAINER -->
    </div>
    <!-- //MENU BLOCK -->
</header>