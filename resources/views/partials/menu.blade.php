<!-- MENU -->
<ul class="navmenu center">
    <li class="normal menu"><a href="{{ url('cms') }}">@lang('site.home')</a>
        <!-- MEGA MENU -->
    </li>
    <!-- //MEGA MENU -->
    <!-- MEGA MENU-->
    @foreach($menu as $parent)
        <li class="sub-menu"><a>{{$parent->cat}}</a>
            <ul class="mega_menu megamenu_col1 clearfix">
                <li class="col">
                    @foreach($parent->children as $child)
                        <ol>
                            <li>
                                <a href="{{ url('') }}/{{$parent->cat}}/{{$child->cat}}/{{$child->parent_id}}?categ[]={{$child->cat_id}}">
                                    {{$child->cat}}</a>
                            </li>
                        </ol>
                    @endforeach
                </li>
            </ul>
        </li>
    @endforeach
<!-- //MEGA MENU -->
    <!-- MEGA MENU -->
    <li class=" normal menu"><a href="{{ url('blog') }}">@lang('site.blog')</a></li>
    <!-- //MEGA MENU -->
    <li class="last sale_menu"><a href="{{ url('eshop') }}">@lang('site.sale')</a></li>
    <li class="normal menu"><a href="{{ url('contacts') }}">@lang('site.contacts')</a>
    <li class="normal menu"><a href="{{ url('aboutus') }}">@lang('site.about us')</a>
    <li class="normal menu"><a href="{{ url('login') }}">@lang('site.login')</a>
    <li class="sub-menu"><a>{!! $currency !!}</a>
        <ul class="mega_menu megamenu_col1 clearfix">
            <li class="col">
                @foreach($currencies as $row)
                    <ol>
                        <li><a href="{{ url('currency') }}/{{$row->name}}">
                                {{$row->name}}</a></li>
                    </ol>
                @endforeach
            </li>
        </ul>
    </li>
    <li class="sub-menu"><a>{{$locale}}</a>
        <ul class="mega_menu megamenu_col1 clearfix">
            <li class="col">
                <ol><li><a href="{{ url('locale') }}/en">en</a></li></ol>
                <ol><li><a href="{{ url('locale') }}/bg">bg</a></li></ol>
            </li>
        </ul>
    </li>
</ul>
<!-- //MENU -->