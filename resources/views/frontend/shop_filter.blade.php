<!-- SHOP FILTER -->
<div class="sidepanel widget_sizes">
    <h3>@lang('site.by cats')</h3>

    <form class="login_form" name="pr_cat" id="categories" role="form"
          method="GET" action="{{ url('filter/products/'.$cats[$parent]['id'].'') }}">

        @foreach($cats[$parent]['sub_cat'] as $row)
            <input type="checkbox" id="{{$row['name']}}" name="categ[]" value="{{$row['id']}}"
                    {{ (in_array($row['id'],$category))?'checked="checked"':''}} />
            <label for="{{$row['name']}}">
                <li><a>{{$row['name']}}</a></li>
            </label>
        @endforeach

        <div class="sidepanel widget_brands">

            @include('frontend.sorting')

        </div>

        <div class="sidepanel widget_sized">

            <h3>@lang('site.by size')</h3>
            @foreach($properties['size'] as $row)
                <input type="checkbox" id="{{$row->size}}"
                <a class="size{{$row->size}}" name="size[]" value="{{$row->size_id}}"
                        {{(in_array($row->size_id, $size)) ? 'checked="checked"' : ''}}/>
                <label for="{{$row->size}}">
                    <li><a>{{$row->size}}</a></li>
                    @if($row->sizeCount)
                        <span>({{$row->sizeCount->aggregate}})</span>
                    @else
                        <span>Out of Stock</span>
                    @endif
                </label>
            @endforeach
        </div>

        <div class="sidepanel widget_color">

            <h3>@lang('site.by color')</h3>
            @foreach($properties['color'] as $row)
                <input type="checkbox" id="{{$row->color}}"
                <a class="color{{$row->color_id}}"
                   name="color[]" value="{{$row->color_id}}"
                        {{(in_array($row->color_id, $color)) ? 'checked="checked"' : ''}}/>
                <label for="{{$row->color}}">
                    <li><a class="color{{$row->color_id}}"></a></li>
                     @if($row->colorCount)
                        {{$row->color}}<span>({{$row->colorCount->aggregate}})</span></label>
                     @else
                         <span>Out of Stock</span>
                     @endif
                <style>
                    .widget_color li a.color{{$row->color_id}}
					           {
                        background-color: {{$row->web}}

                    }
                </style>
            @endforeach
        </div>

        <div class="sidepanel widget_brands">

            <h3>@lang('site.by brands')</h3>
            @foreach($properties['brand'] as $row)
                <input type="checkbox" id="{{$row->brand}}" name="brand[]" value="{{$row->brand_id}}"
                        {{(in_array($row->brand_id, $brand)) ? 'checked="checked"' : ''}}/>
                <label for="{{$row->brand}}">{{$row->brand}}
                    @if($row->brandCount)
                        <span>({{$row->brandCount->aggregate}})</span>
                    @else
                        <span>Out of Stock</span>
                    @endif
                </label>
            @endforeach
        </div>
        <input type="submit" value="Submit" class="submit">
    </form>
</div>
<!-- //SHOP FILTER -->