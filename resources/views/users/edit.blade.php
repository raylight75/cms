@extends('backend.tblTemplate')
@section('title',$title)
@section('body')
    @include('messages.flash_message')
    <h3>Edit User</h3>
    {!! Form::model($user,['method' => 'PATCH','route'=>['users.update',$user->id]]) !!}
    @include('users.form_edit')
    {!! Form::close() !!}
    @include('errors.error_layout')
@stop