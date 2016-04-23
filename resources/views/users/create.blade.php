@extends('backend/tblTemplate')
@section('body')
    @include('messages/flash_message')
    <h1>Create User</h1>
    {!! Form::open(['url' => 'backend/users']) !!}
    @include('users/form_create')
    {!! Form::close() !!}
    @include('errors/error_layout')
@stop