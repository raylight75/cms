@extends('backend.tblTemplate')
@section('body')
    <h3>Edit Product</h3>
    @include('messages/flash_message')
    {!! Form::model($product,['method' => 'PATCH','route'=>['articles.update',$product->id],'files'=> true]) !!}
    @include('product.form_edit')
    {!! Form::close() !!}
    @include('errors.error_layout')
@stop