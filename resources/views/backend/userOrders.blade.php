@extends('backend/tblTemplate')
@section('title',$title)
@section('body')
<div class="card-body">
    @if(isset($edit))
    {!! $edit !!}
    @else
    {!! $grid !!}
    @endif
</div>
@endsection