@extends('rapyd::demo.demo')

@section('title','DataGrid')

@section('body')

    <h1>Articles</h1>
    <p>
        {!! $filter !!}
        {!! $grid !!}       
    </p>
@stop
