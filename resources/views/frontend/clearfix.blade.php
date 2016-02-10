<!-- CLEARFIX -->
<div class="clearfix padbot40">
    <div class="tovar_view_fotos clearfix">
        <div id="slider2" class="flexslider">
            <ul class="slides">
                <li><a><img src="{{ url('images/products') }}/{{$item->a_img}}" alt=""/></a></li>
                <li><a><img src="{{ url('images/products') }}/{{$item->b_img}}" alt=""/></a></li>
                <li><a><img src="{{ url('images/products') }}/{{$item->c_img}}" alt=""/></a></li>
            </ul>
        </div>
        <div id="carousel2" class="flexslider">
            <ul class="slides">
                <li><a href="javascript:void(0);">
                        <img src="{{ url('images/products') }}/{{$item->a_img}}" alt=""/></a></li>
                <li><a href="javascript:void(0);">
                        <img src="{{ url('images/products') }}/{{$item->b_img}}" alt=""/></a></li>
                <li><a href="javascript:void(0);">
                        <img src="{{ url('images/products') }}/{{$item->c_img}}" alt=""/></a></li>
            </ul>
        </div>
    </div>

    <div class="tovar_view_description">
        <div class="tovar_view_title">{{$item->name}}</div>
        <div class="tovar_article">88-305-676</div>
        <div class="clearfix tovar_brend_price">
            <div class="pull-left tovar_brend">{{$item->brand}}</div>
            <div class="pull-right tovar_view_price">
                {!! Helper::currency($item->price) !!}&nbsp{!! Helper::label() !!}
            </div>
        </div>
        <div class="tovar_color_select">
            <p><?= _('Available color')?></p>
            @foreach($item->color as $c)
                <a class="color{{$c->colour_id}}"></a>
            @endforeach
        </div>
        <div class="tovar_size_select">
            <div class="clearfix">
                <p class="pull-left"><?= _('Available SIZE')?></p>
                <span><?= _('Size & Fit')?></span>
            </div>
            @foreach($item->size as $s)
                <a class="sizeXXXL">{{$s->size_id}}</a>
            @endforeach
        </div>
        <div class="tovar_view_btn">
            {!! Form::open(['url' => 'products']) !!}
            <div class="tovar_color_select">
                <input type="text" name="discount" value="DISC CODE" id=""
                       maxlength="7" size="50" style="width: 24%"
                       onFocus="if (this.value == 'DISC CODE') this.value = '';"
                       onBlur="if (this.value == '') this.value = 'DISC CODE';"/>
            </div>
            <select name="color" class="basic">
                <option value=""><?= _('COLOR')?></option>
                @foreach($item->color as $c)
                    <option value="{{$c->colour_id}}">{{$c->colour_id}}</option>
                @endforeach
            </select>
            <select name="size" class="basic">
                <option value=""><?= _('SIZE')?></option>
                @foreach($item->size as $s)
                    <option value="{{$s->size_id}}">{{$s->size_id}}</option>
                @endforeach
            </select>
            <input type="text" name="qty" value="QTY" id=""
                   maxlength="3" size="50" style="width: 20%"
                   onFocus="if (this.value == 'QTY') this.value = '';"
                   onBlur="if (this.value == '') this.value = 'QTY';"/>

            <div class="tovar_view_btn">
                @if (!Auth::check())
                    <a class="add_bag" href="{{ url('user') }}">
                        <i class="fa fa-shopping-cart"></i><?= _('Add to bag')?></a>
                @else
                    {!! Form::hidden('id', $item->product_id) !!}
                    {!! Form::hidden('name', $item->name) !!}
                    {!! Form::hidden('price', $item->price) !!}
                    {!! Form::hidden('img', $item->a_img) !!}
                    {!! Form::submit('Add to bag', ['class' => 'add_bag']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
        <div class="tovar_shared clearfix">
            <p><?= _('Share item with friends')?></p>
            <ul>
                <li><a class="facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                <li><a class="linkedin" href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="google-plus" href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="tumblr" href="javascript:void(0);"><i class="fa fa-tumblr"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //CLEARFIX -->