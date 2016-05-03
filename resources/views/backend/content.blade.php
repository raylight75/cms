@extends('backend/tblTemplate')
@section('title',$title)
@section('body')
    @if(isset($edit))
        {!! $edit !!}
    @elseif(isset($filter))
        {!! $filter !!}
        {!! $grid !!}
    @else
        {!! $grid !!}
    @endif
    @include('errors.error_layout')
@endsection