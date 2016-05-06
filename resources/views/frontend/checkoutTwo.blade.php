@extends('frontend.master')
@section('content')
        <!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- PAGE HEADER -->
<section class="page_header">

    <!-- CONTAINER -->
    <div class="container border0 margbot0">
        <h3 class="pull-left"><b>Checkout</b></h3>

        <div class="pull-right">
            <a href="{{ url('cart') }}">Back shopping bag<i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <!-- //CONTAINER -->
</section><!-- //PAGE HEADER -->


<!-- CHECKOUT PAGE -->
<section class="checkout_page">

    <!-- CONTAINER -->
    <div class="container">

        <!-- CHECKOUT BLOCK -->
        <div class="checkout_block">
            <ul class="checkout_nav">
                <li class="done_step2">1. Shipping Address</li>
                <li class="done_step">2. Review Order</li>
                <li class="last">3. Place Order</li>
            </ul>
        </div>
        <!-- //CHECKOUT BLOCK -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-9 col-md-9 padbot60">
                <div class="checkout_confirm_orded clearfix">
                    <div class="checkout_confirm_orded_bordright clearfix">
                        <div class="billing_information">
                            <p class="checkout_title margbot10">Billing information</p>

                            <div class="billing_information_content margbot40">
                                <span>{{$customer['name']}}</span>
                                <span>{{$customer['adress']}}</span>
                                <span>{{$customer['city']}}</span>
                                <span>{{$customer['country']}}</span>
                                <span>{{$customer['email']}}</span>
                            </div>
                            <p class="checkout_title margbot10">Shipping adress</p>

                            <div class="billing_information_content margbot40">
                                <span>{{$customer['name']}}</span>
                                <span>{{$customer['adress']}}</span>
                                <span>{{$customer['city']}}</span>
                                <span>{{$customer['country']}}</span>
                                <span>{{$customer['email']}}</span>
                            </div>
                        </div>
                        <div class="payment_delivery">
                            <p class="checkout_title margbot10">Payment and delivery</p>

                            <p><span>Payment:</span></p>
                            <img src="{{ url('images') }}/{{$payments->img}}" alt=""/>

                            <p><span>Delivery:</span></p>
                            <img src="{{ url('images') }}/{{$shippings->img}}" alt=""/>
                        </div>
                    </div>
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
                                            x{!! Helper::currency($item->price) !!}&nbsp{!! Helper::label() !!}</span>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 padbot60">

                <!-- BAG TOTALS -->
                <div class="sidepanel widget_bag_totals your_order_block">
                    <h3>Your Order</h3>
                    <table class="bag_total">
                        <tr class="shipping clearfix">
                            <th>Products</th>
                            <td>{!! Helper::currency($grand_total) !!}&nbsp{!! Helper::label() !!}</td>
                        </tr>
                        <tr class="shipping clearfix">
                            <th>SHIPPING RATE</th>
                            <td>{!! Helper::currency($shippings->rate) !!}&nbsp{!! Helper::label() !!}</td>
                        </tr>
                        <tr class="shipping clearfix">
                            <th>+ 20% VAT applicable</th>
                            <?php $vat_total = $grand_total * $vat;?>
                            <td>{!! Helper::currency($vat_total) !!}&nbsp{!! Helper::label() !!}</td>
                        </tr>
                        <tr class="total clearfix">
                            <th>Total</th>
                            <?php
                            $shipping_rate = $shippings->rate;
                            $grand_total = $grand_total + $shipping_rate + $vat_total;
                            ?>
                            <td>{!! Helper::currency($grand_total) !!}&nbsp{!! Helper::label() !!}</td>
                        </tr>
                    </table>
                    <a class="btn active" href="">Place Order</a>
                    <a class="btn inactive" href="">Go to previous
                        step</a>
                </div>
                <!-- //REGISTRATION FORM -->
            </div>
            <!-- //SIDEBAR -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section><!-- //CHECKOUT PAGE -->
@endsection