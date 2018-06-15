@extends('frontend.master')
@section('content')
        <!-- WELCOME USER PAGE -->
<section class="my_account parallax">

    <!-- CONTAINER -->
    <div class="container">

        <div class="my_account_block clearfix">
            <div class="login">
                <h2>Welcome Back,{{$user}}!</h2>
                @include('messages/flash_message')
                <li>
                    @admin
                        <p>With button Admin Panel above you can visit area for Administrators.</p>
                    @else
                        <p>With button User Panel above you can visit area for our Customer.</p>
                    @endadmin
                </li>
            </div>
            <div class="new_customers">
                <h2>NEW CUSTOMERS</h2>

                <p>Register with EShop to test Ecommerce CMS, including:</p>
                <ul>
                    <li><p>Online Order Status</p></li>
                    <li><p>Test Admin Backend</p></li>
                    <li><p>Sign up to test Login Form and Registration</p></li>
                    <li><p>Place Test Orders</p></li>
                    <li><p>Quick and easy checkout Test</p></li>
                </ul>
            </div>
        </div>

        <div class="my_account_note center">
            HAVE A QUESTION? <b>1 800 888 02828</b>
        </div>
    </div>
    <!-- //CONTAINER -->
</section>
<!-- //MY ACCOUNT PAGE -->
@endsection