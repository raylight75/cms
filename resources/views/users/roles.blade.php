@extends('backend.tblTemplate')
@section('title',$title)
@section('body')
    <h3>Create Role</h3>
    @include('messages.flash_message')
    {!! Form::open(['url' => 'backend/roles']) !!}
    @include('users.roles_create')
    {!! Form::close() !!}
    @include('errors.error_layout')
@stop