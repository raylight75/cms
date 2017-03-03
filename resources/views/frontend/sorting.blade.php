<h3>@lang('site.by price')</h3>
@if  (Request::input('price')=='asc')
    <h4><b><a style="color:#5fba7d" href="#" id="priceasc">Ascending</a></b></h4>
@else
    <h4><a href="#" id="priceasc">Ascending</a></h4>
@endif
@if  (Request::input('price')=='desc')
    <h4><b><a style="color:#5fba7d" href="#" id="pricedesc">Descending</a></b></h4>
@else
    <h4><a href="#" id="pricedesc">Descending</a></h4>
@endif

<h3>@lang('site.by name')</h3>

@if  (Request::input('name')=='asc')
    <h4><b><a style="color:#5fba7d" href="#" id="nameasc">Ascending</a></b></h4>
@else
    <h4><a href="#" id="nameasc">Ascending</a></h4>
@endif
@if  (Request::input('name')=='desc')
    <h4><b><a style="color:#5fba7d" href="#" id="namedesc">Descending</a></b></h4>
@else
    <h4><a href="#" id="namedesc">Descending</a></h4>
@endif