@extends('layout.template')
@section('content')
    <h1>Create Product</h1>
    {!! Form::open(['url' => 'products']) !!}
    <div class="form-group">
        {!! Form::label('ID', 'ID:') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Slug', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Name', 'Author:') !!}
        {!! Form::text('author',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Description', 'Publisher:') !!}
        {!! Form::text('publisher',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image') !!}
        {!! Form::file('image', null) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Brand', 'Brand:') !!}
        {!! Form::text('brand',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Category', 'Category:') !!}
        {!! Form::text('category',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Quantity', 'Quantity:') !!}
        {!! Form::text('quantity',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Price', 'Price:') !!}
        {!! Form::text('Price',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop