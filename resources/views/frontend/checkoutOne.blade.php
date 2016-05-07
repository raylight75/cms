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
                <li class="done_step">1. Shipping Address</li>
                <li class="active_step">2. Review Order</li>
                <li class="last">3. Place Order</li>
            </ul>
            {!! Form::open(['url' => 'checkout/store','class'=>'checkout_form clearfix']) !!}
            <div class="checkout_form_input country">
                <label>Country <span class="color_red">*</span></label>
                <select name="country" class="basic">
                    @foreach ($countries as $c)
                        <option>{{$c->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="checkout_form_input sity">
                <label>Sity <span class="color_red">*</span></label>
                <input type="text" name="city" value="" placeholder=""/>
            </div>

            <div class="checkout_form_input last postcode">
                <label>Postcode <span class="color_red">*</span></label>
                <input type="text" name="postcode" value="" placeholder=""/>
            </div>

            <div class="checkout_form_input2 adress">
                <label>Street Adress 1 <span class="color_red">*</span></label>
                <input type="text" name="adress" value="" placeholder=""/>
            </div>

            <hr class="clear">

            <div class="checkout_form_input first_name">
                <label>First Name <span class="color_red">*</span></label>
                <input type="text" name="name" value="{{Auth::user()->name}}" placeholder="" readonly/>
            </div>

            <div class="checkout_form_input phone">
                <label>Phone <span class="color_red">*</span></label>
                <input type="text" name="phone" value="" placeholder=""/>
            </div>

            <div class="checkout_form_input last E-mail">
                <label>e-mail <span class="color_red">*</span></label>
                <input type="text" name="email" value="{{Auth::user()->email}}" placeholder="" readonly/>
            </div>

            <div class="clear"></div>

            <div class="checkout_delivery clearfix">
                <p class="checkout_title">SELECT SHIPPING METHOD</p>
                <ul>
                    @foreach ($shippings as $s)
                        <li>
                            <input id="ridio{{$s->id}}" type="radio" name="delivery" value="{{$s->id}}" hidden/>
                            <label for="ridio{{$s->id}}">{{$s->method}}
                                <img src="{{ url('images') }}/{{$s->img}}" alt=""/></label>
                        </li>
                    @endforeach
                </ul>
                <div class="checkout_delivery_note"><i class="fa fa-exclamation-circle"></i>Express delivery options
                    are available for in-stock items only.
                </div>
                <p></p>
            </div>
            <div class="checkout_payment clearfix">
                <div class="payment_method padbot70">
                    <p class="checkout_title">Select Payment Method</p>
                    <ul class="clearfix">
                        @foreach ($payments as $p)
                            <li>
                                <input id="radio{{$p->id}}" type="radio" name="payment" value="{{$p->id}}" hidden/>
                                <label for="radio{{$p->id}}">{{$p->method}}
                                    <img src="{{ url('images') }}/{{$p->img}}" alt=""/></label>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @include('errors.error_layout')
            @include('messages.flash_message')
            <div class="checkout_form_note">All fields marked with (<span class="color_red">*</span>) are required
            </div>
            <input type="submit" value="Continue">
            {!! Form::close() !!}
        </div>
        <!-- //CHECKOUT BLOCK -->
    </div>
    <!-- //CONTAINER -->
</section><!-- //CHECKOUT PAGE -->
@endsection