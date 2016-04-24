@extends('backend.tblTemplate')
@section('body')
    <h3>Create Product</h3>
    @include('messages.flash_message')
    {!! Form::open(['url' => 'backend/articles', 'files'=> true]) !!}
    @include('product.form_create')
    {!! Form::close() !!}
    @include('errors.error_layout')
@stop