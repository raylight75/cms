@extends('layout.template')
@section('content')
    @include('messages/flash_message')
    <h1>Create Product</h1>
    {!! Form::open(['url' => 'products', 'files'=> true]) !!}
    @include('product/form')
    {!! Form::close() !!}
    @include('errors/error_layout')
@stop