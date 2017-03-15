<div class="container clearfix">
    <ul class="secondary_menu">
        @if  (Auth::check() && Auth::user()->hasRole('admin'))
            <li><a href="{{ url('backend/admin') }}">@lang('site.admin panel')</a></li>
            @include('frontend.logout')
        @elseif(Auth::check() && Auth::user()->hasRole('user'))
            <li><a href="{{ url('backend/user') }}">@lang('site.user panel')</a></li>
            @include('frontend.logout')
        @else
            <li><a href="">@lang('site.my account')</a></li>
            <li><a href="{{ url('auth/register') }}">@lang('site.register')</a></li>

        @endif
    </ul>
</div>