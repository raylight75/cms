@extends('backend/tblTemplate')
@section('title',$title)
@section('body')
        @if(isset($edit))
            {!! $edit !!}
        @else
            {!! $filter !!}
            {!! $grid !!}
        @endif
@endsection