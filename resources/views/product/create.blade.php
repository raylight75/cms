@extends('backend/tblTemplate')
@section('body')
    <div class="card-body">
    @include('messages/flash_message')
    <h1>Create Product</h1>
    {!! Form::open(['url' => 'backend/articles', 'files'=> true]) !!}
    @include('product/form_create')
    {!! Form::close() !!}
    @include('errors/error_layout')
    </div>
@stop