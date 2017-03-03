<li>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        @lang('site.logout')
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>