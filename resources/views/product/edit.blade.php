@extends('backend.tblTemplate')
@section('body')
    <h3>Edit Product</h3>
    @include('messages/flash_message')
    {!! Form::model($product,['method' => 'PATCH','route'=>['backend.articles.update',$product->product_id],'files'=> true]) !!}
    @include('product.form_edit')
    {!! Form::close() !!}
    @include('errors.error_layout')
@stop