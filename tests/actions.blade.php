

@if (in_array("show", $actions))
    <a class="" title="@lang('rapyd::rapyd.show')" href="{!! $uri !!}?show={!! $id !!}"><span class="fa fa-eye"> </span></a>
@endif
@if (in_array("modify", $actions))
    <a class="" title="@lang('rapyd::rapyd.modify')" href="{!! $uri !!}?modify={!! $id !!}"><span class="fa fa-pencil-square-o"> </span></a>
@endif
@if (in_array("delete", $actions))
    <a class="text-danger" title="@lang('rapyd::rapyd.delete')" href="{!! $uri !!}?delete={!! $id !!}"><span class="fa fa-times"> </span></a>
@endif
