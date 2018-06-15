<div class="container clearfix">
    <ul class="secondary_menu">
        @admin
            <li><a href="{{ url('backend/admin') }}">@lang('site.admin panel')</a></li>
            @include('frontend.logout')
        @endadmin
        @user
            <li><a href="{{ url('backend/user') }}">@lang('site.user panel')</a></li>
            @include('frontend.logout')
        @enduser
        @guest
            <li><a href="">@lang('site.my account')</a></li>
            <li><a href="{{ url('auth/register') }}">@lang('site.register')</a></li>
        @endguest
    </ul>
</div>