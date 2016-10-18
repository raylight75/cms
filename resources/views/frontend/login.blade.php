@extends('frontend.master')
@section('content')
    <!-- MY ACCOUNT PAGE -->
    <section class="my_account parallax">

        <!-- CONTAINER -->
        <div class="container">

            <div class="my_account_block clearfix">
                <div class="login">
                    <h2>Log IN</h2>

                    <form class="login_form" id="loginform" role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        EMAIL:<br>
                        <input type="email" name="email" value="{{ old('email') }}">

                        PASSWORD:<br>
                        <input type="password" name="password">

                        <div class="clearfix">
                            <div class="pull-left">
                                <input type="checkbox" name="remember"><label for="remember"> Remember Me </label>
                            </div>
                            <div class="pull-right">
                                <a class="forgot_pass" href="{{ url('/password/email') }}">Forgot password?</a>
                            </div>
                        </div>
                        <div class="center">
                            <input type="submit" value="Login">
                        </div>
                    </form>
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
                    <div class="center">
                        <a class="btn active" href="">create
                            new account</a>
                    </div>
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