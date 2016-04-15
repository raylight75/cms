<header>

    <!-- TOP INFO -->
    <div class="top_info">

        <!-- CONTAINER -->
        <div class="container clearfix">
            <ul class="secondary_menu">
                @if  (Auth::check() && Auth::user()->is('admin'))
                    <li><a href="{{ url('backend') }}"><?= _('Admin Panel')?></a></li>
                    <li><a href="{{ url('auth/logout') }}"><?= _('Logout')?></a></li>
                @elseif(Auth::check() && Auth::user()->is('user'))
                    <li><a href=""><?= _('User Panel')?></a></li>
                    <li><a href="{{ url('auth/logout') }}"><?= _('Logout')?></a></li>
                @else
                    <li><a href=""><?= _('my account')?></a></li>
                    <li><a href=""><?= _('Register')?></a></li>

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
                        <p><?= _('shopping bag')?></p><span>{{$rows}}</span></a>
                    <div class="cart">
                        <ul class="cart-items">
                            <li class="clearfix"><span class="cart_item_price">
									<?= _('To add products to your shopping cart click on "Add to Bag" Button')?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                @else
                        <!-- //SHOPPING BAG -->
                <!-- SHOPPING BAG -->
                <div class="shopping_bag">
                    <a class="shopping_bag_btn" href="javascript:void(0);"><i class="fa fa-shopping-cart"></i>
                        <p><?= _('shopping bag')?></p>
                        <span>{{$rows}}</span></a>
                    <div class="cart">
                        @foreach ( $cart as $item )
                            <ul class="cart-items">
                                <li class="clearfix">
                                    <img class="cart_item_product"
                                         src="{{ url('images/products') }}/{{$item->options->img}}" alt=""/>
                                    <a href="{{ url('shopping') }}" class="cart_item_title">{{$item->name}}</a>
										<span class="cart_item_price">{{$item->qty}}
                                            x{!! Helper::currency($item->price) !!}&nbsp{!! Helper::label() !!}</span>
                                </li>
                            </ul>
                        @endforeach
                        <div class="cart_total">
                            <div class="clearfix">
										<span class="cart_subtotal"><?= _('bag subtotal:')?>
                                            <b>{!! Helper::currency($grand_total) !!}&nbsp{!! Helper::label() !!}</b></span>
                            </div>
                            <a class="btn active"
                               href="{{ url('shopping') }}/checkout1"><?= _('Checkout')?></a>
                        </div>
                    </div>
                </div>
                @endif
                        <!-- //SHOPPING BAG -->
                @endif
                        <!-- MENU -->
                <ul class="navmenu center">
                    <li class="sub-menu first"><a href="{{ url('cms') }}"><?= _('Home')?></a>
                        <!-- MEGA MENU -->
                        <ul class="mega_menu megamenu_col1 clearfix">
                            <li class="col">
                                <ol>
                                    <li class="active"><a href="index.html"><?= _('Home slider')?></a></li>
                                </ol>
                            </li>
                        </ul>
                    </li>
                    <!-- //MEGA MENU -->
                    <!-- MEGA MENU-->
                    @foreach($menu as $row)
                        <li class="sub-menu"><a><?= _($row['name'])?></a>
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
                        <li class=" sub-menu"><a href="{{ url('blog') }}"><?= _('Blog')?></a>
                            <ul class="mega_menu megamenu_col1 clearfix">
                                <li class="col">
                                    <ol>
                                        <li><a href="{{ url('blog') }}"><?= _('Blog')?></a></li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                        <!-- //MEGA MENU -->
                        <li class="last sale_menu"><a href="{{ url('eshop') }}"><?= _('Sale')?></a></li>
                        <li class="normal menu"><a href="{{ url('contacts') }}"><?= _('Contacts')?></a>
                        <li class="normal menu"><a href="{{ url('aboutus') }}"><?= _('About Us')?></a>
                        <li class="normal menu"><a href="{{ url('login') }}"><?= _('Login')?></a>
                </ul>
                <!-- //MENU -->
        </div>
        <!-- //CONTAINER -->
    </div>
    <!-- //MENU BLOCK -->
</header>