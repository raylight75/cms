@extends('frontend.master')
@section('content')
    <!-- BREADCRUMBS -->
    <section class="breadcrumb parallax margbot30"></section>
    <!-- //BREADCRUMBS -->

    <!-- PAGE HEADER -->

    <section class="page_header">
        <!-- CONTAINER -->
        <div class="container border0 margbot0">
            <h3 class="pull-left"><b>Alert For Demo Payment</b></h3>

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

            <!-- ROW -->
            <div class="row">
                <div class="col-lg-9 col-md-9 padbot60">
                    <div class="checkout_confirm_orded clearfix">
                        <div class="checkout_confirm_orded_bordright clearfix">
                            <div class="checkout_confirm_orded_bordright clearfix">
                                <div class="payment_delivery">
                                    <h2 class="pull-left"><b>Read Carefully</b></h2>
                                    <p class="checkout_title margbot10">Payment and Info</p>
                                </div>
                            </div>
                        </div>
                        <div class="checkout_confirm_orded_products">
                            <h3 class="pull-left" style="color:red;">
                                If you click make DEMO PAYMENT BUTTON you will be redirect to Paypal
                                for making DEMO PAYMENT. You need Paypal Sandbox test accounts
                                for personal and busines payments.
                                No personal info will be collected.
                                Use test Credentials from your PayPal Sandbox to make payment.
                                To learn how to use Sandbox, checkout out PAYPAL SANDBOX
                            </h3>
                            <a target="_blank" href="https://developer.paypal.com/docs/classic/lifecycle/ug_sandbox">
                                <h3>Testing Guide</h3></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 padbot60">
                    <div class="sidepanel widget_bag_totals your_order_block">
                        <h3>Demo Payment</h3>
                        <a class="btn active" href="{{ url('payment/checkout') }}">Make Demo Payment</a>
                        <a class="btn inactive" href="{{ url(URL::previous()) }}">Go to previous step</a>
                    </div>
                </div>
                <!-- //SIDEBAR -->
            </div>
            <!-- //ROW -->
        </div>
        <!-- //CONTAINER -->
    </section><!-- //CHECKOUT PAGE -->
@endsection