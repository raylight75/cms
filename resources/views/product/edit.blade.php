@extends('layout.template')
@section('content')
    @include('messages/flash_message')
    <h1>Update Products</h1>
    {!! Form::model($product,['method' => 'PATCH','route'=>['products.update',$product->id],'files'=> true]) !!}
    @include('product/form')
    {!! Form::close() !!}
    @include('errors/error_layout')
@stop