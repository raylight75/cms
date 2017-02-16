<!-- ROW -->
<div class="row shop_block" id="ajaxproducts">
    <!-- TOVAR1 -->
    @foreach($products as $row)
        <div
                class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
            <div class="tovar_item clearfix">
                <div class="tovar_img">
                    <div class="tovar_img_wrapper">
                        <img class="img" src="{{ url('images/products') }}/{{$row->a_img}}" alt=""/>
                        <img class="img_h fancybox fancybox.ajax" href="{{ url('frame') }}/{{$row->product_id}}"
                             src="{{ url('images/products') }}/{{$row->a_img}}" alt=""/>
                    </div>
                    <div class="tovar_item_btns">
                        <a class="open-project tovar_view"
                           href="{{ url('/') }}/{{$row->category->cat}}/{{$row->slug}}/{{$row->product_id}}">
                            <span><?= _('product')?></span> <?= _(' view')?>
                        </a>
                        @if (Auth::check() && Auth::user()->hasRole('user'))
                            <a class="add_bag"
                               href="{{ url('/') }}/{{$row->category->cat}}/{{$row->slug}}/{{$row->product_id}}">
                                <i class="fa fa-shopping-cart"></i></a>
                        @else
                            <a class="add_bag" href="{{ url('user') }}">
                                <i class="fa fa-shopping-cart"></i></a>
                        @endif
                    </div>
                </div>
                <div class="tovar_description clearfix">
                    <a class="tovar_title"
                       href="{{ url('/') }}/{{$row->category->cat}}/{{$row->slug}}/{{$row->product_id}}">{{$row->name}}</a>
                    <span class="tovar_price">{!! Helper::currency($row->price) !!}&nbsp{!! Helper::label() !!}</span>
                </div>
                <div class="tovar_content">{{$row->description}}</div>
            </div>
        </div>
        @endforeach
                <!-- //TOVAR1 -->
        <div class="clearfix">
            <!-- PAGINATION -->
            {!! $products->appends(Input::except('page'))->render() !!}
                    <!-- //PAGINATION -->
        </div>
        <hr>
</div>
<!-- //ROW -->