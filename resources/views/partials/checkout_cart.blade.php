<div class="checkout_confirm_orded_products">
    <p class="checkout_title">Products</p>
    @foreach ( $cart as $item )
        <ul class="cart-items">
            <li class="clearfix">
                <img class="cart_item_product"
                     src="{{ url('images/products') }}/{{$item->options->img}}" alt=""/>
                <a href=""
                   class="cart_item_title">{{$item->name}}</a>
                <span class="cart_item_price">
										{{$item->qty}}
                    x{!! Helper::price($item->price) !!}&nbsp{!! $currency !!}</span>
            </li>
        </ul>
    @endforeach
    @include('errors.error_layout')
    @include('messages.flash_message')
</div>