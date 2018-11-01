<!-- TOVAR -->
@foreach($products as $row)
    <div
            class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
        <div class="tovar_item">
            <div class="tovar_img">
                <div class="tovar_img_wrapper">
                    <img class="img" src="{{ url('images/products') }}/{{$row->a_img}}" alt=""/>
                    <img class="img_h fancybox fancybox.ajax" href="{{ url('frame') }}/{{$row->id}}"
                         src="{{ url('images/products') }}/{{$row->b_img}}" alt=""/>
                </div>
                <div class="tovar_item_btns">
                    <a class="open-project tovar_view"
                       href="{{ url('/') }}/{{$row->category->cat}}/{{$row->slug}}/{{$row->id}}">
                        <span>@lang('site.product')</span> @lang('site.view')</a>
                    @user
                    <a class="add_bag"
                       href="{{ url('/') }}/{{$row->category->cat}}/{{$row->slug}}/{{$row->id}}">
                        <i class="fa fa-shopping-cart"></i></a>
                    @enduser
                    @guest
                        <a class="add_bag" href="{{ url('login') }}"><i class="fa fa-shopping-cart"></i></a>
                    @endguest
                    @admin
                        <a class="add_bag" href="{{ url('backend/products') }}"><i class="fa fa-pencil-square-o"></i></a>
                    @endadmin
                </div>
            </div>
            <div class="tovar_description clearfix">
                <a class="tovar_title"
                   href="{{ url('/') }}/{{$row->category->cat}}/{{$row->slug}}/{{$row->id}}">{{$row->name}}</a>
                <span class="tovar_price">{!! Helper::price($row->price) !!}&nbsp{!! $currency !!}</span>
            </div>
        </div>
    </div>
@endforeach
<!-- //TOVAR -->