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
                <li class="done_step2">2. Review Order</li>
                <li class="done_step">3. Place Order</li>
            </ul>
        </div>
        <!-- //CHECKOUT BLOCK -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-9 col-md-9 padbot60">
                <div class="checkout_confirm_orded clearfix">
                    <div class="checkout_confirm_orded_bordright clearfix">
                    </div>

                    <div class="checkout_confirm_orded_products">
                        @include('errors.error_layout')
                        @include('messages.flash_message')
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 padbot60">
                <a class="btn inactive" href="{{ url('cms') }}">Continue Shopping</a>
            </div>
            <!-- //REGISTRATION FORM -->
        </div>
        <!-- //SIDEBAR -->
    </div>
    <!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //CHECKOUT PAGE -->
@endsection