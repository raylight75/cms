@extends('backend/tblTemplate')
@section('title',$title)
@section('body')
    <div class="card-body">
        @if(isset($edit))
            {!! $edit !!}
        @else
            {!! $filter !!}
            {!! $grid !!}
        @endif
    </div>
@endsection