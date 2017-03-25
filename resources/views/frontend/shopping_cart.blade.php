@extends('frontend.master')
@section('content')
        <!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->

<!-- PAGE HEADER -->
<section class="page_header">

    <!-- CONTAINER -->
    <div class="container">
        <h3 class="pull-left">
            <b><?= _('Shopping Bag')?></b>
        </h3>

        <div class="pull-right">
            <a href="{{ url('cms') }}"><?= _('Back to shop')?><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <!-- //CONTAINER -->
</section>
<!-- //PAGE HEADER -->
<!-- SHOPPING BAG BLOCK -->
<section class="shopping_bag_block">

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row">

            <!-- CART TABLE -->
            <script type="text/javascript">
                function clear_cart() {
                    var result = confirm('Are you sure want to clear all products?');

                    if (result) {
                        window.location = "{{ url('cart/delete') }}";
                    } else {
                        return false;
                    }
                }
            </script>
            <div class="col-lg-9 col-md-9 padbot40">
                <div id="heading">
                    <h2 align="center"><?= _('Products on Your Shopping Bag')?></h2>

                    <h3 align="center"><font color="red">
                            <?php //echo $this->session->flashdata('message');?></font></h3>
                </div>
                <div id="text">
                    @if ($cart->first() == '')
                        <h3 class="pull-left">
                            <b><?= _('To add products to your shopping cart click on "Add to Bag" Button')?></b>
                        </h3>
                    @endif
                </div>
                <table class="shop_table">
                    @if ($cart)
                        <thead>
                        <tr>
                            <th class="product-thumbnail"></th>
                            <th class="product-name">ID</th>
                            <th class="product-name">Name</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Amount</th>
                            <th class="product-remove">Cancel Product</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;?>
                        <?php //dd($cart) ?>
                        @foreach ( $cart as $item )
                            <tr class="cart_item">
                                <td class="product-thumbnail">
                                    <a href="{{ url('images/products') }}/{{$item->options->img}}">
                                        <img src="{{ url('images/products') }}/{{$item->options->img}}"
                                             width="100px" alt=""/></a></td>
                                <td>{{$i++}}</td>
                                <td class="product-name">
                                    <a href="{{ url('/') }}/{{$item->name}}/{{$item->id}}">{{$item->name}}</a>
                                    <ul class="variation">
                                        <li class="variation-Color"><?= _('Color:')?>
                                            <span>{{$item->options->color}}</span>
                                        </li>
                                        <li class="variation-Size"><?= _('Size:')?>
                                            <span>{{$item->options->size}}</span>
                                        </li>
                                        <li class="variation-Size"><?= _('DISCOUNT CODE:')?>
                                            <span>{{$item->options->discount}}</span></li>
                                    </ul>
                                </td>
                                <td class="product-price">
                                    {!! Helper::price($item->price) !!}&nbsp{!! $currency !!}
                                </td>
                                <td>
                                    {!! Form::open(['url' => 'cart/update', 'method' => 'put']) !!}
                                    {!! Form::hidden('qty['.$item->id.'][rowId]', $item->rowId) !!}
                                    {!! Form::text('qty['.$item->id.'][qty]',$item->qty,
                                        ['size' => '1','style' => 'text-align: center','maxlength' => '3']) !!}
                                </td>
                                <td class="product-subtotal">
                                    {!! Helper::price($item->subtotal) !!}&nbsp{!! $currency !!}
                                </td>
                                <td class="product-remove">
                                    <a href="{{ url('cart/remove') }}/{{$item->rowId}}">
                                        <span><?= _('Delete')?></span><i>X</i></a>
                                </td>
                                @endforeach
                                @endif
                            </tr>
                        </tbody>
                </table>
            </div>
            <!-- //CART TABLE -->

            <!-- SIDEBAR -->
            <div id="sidebar" class="col-lg-3 col-md-3 padbot50">

                <!-- BAG TOTALS -->
                <div class="sidepanel widget_bag_totals">
                    <h3><?= _('BAG TOTALS')?></h3>
                    <table class="bag_total">
                        <tr class="shipping clearfix">
                            <th><?= _('SHIPPING')?></th>
                            <td><?= _('Not Calculated')?></td>
                        </tr>
                        <tr class="total clearfix">
                            <th><?= _('Total')?></th>
                            @if ($cart)
                                <td>{!! Helper::price($grand_total) !!}&nbsp{!! $currency !!}</td>
                            @endif
                        </tr>
                    </table>
                    <input type="button" class="btn active" value="Clear Cart" onclick="clear_cart()">
                    {!! Form::submit('Update Cart', ['class' => 'btn inactive']) !!}
                    {!! Form::close() !!}
                    <a class="btn active" href="{{ url('checkout/shipping') }}"><?= _('Check out')?></a> <a
                            class="btn inactive" href="{{ url('cms') }}"><?= _('Continue shopping')?></a>
                </div>
                <!-- //REGISTRATION FORM -->
            </div>
            <!-- //SIDEBAR -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>
<!-- //SHOPPING BAG BLOCK -->
@endsection