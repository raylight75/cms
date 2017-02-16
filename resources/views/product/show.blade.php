@extends('backend.tblTemplate')
@section('body')
    <div class="form-group">
        {!! Form::label('Slug', 'Slug:') !!}
        {!! Form::text('slug',$product->slug,['class'=>'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',$product->name,['class'=>'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Description', 'Description:') !!}
        {!! Form::textarea('description',$product->description,['class'=>'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image') !!}
        <a class="thumbnail">
            <img class="img-responsive" src="{{asset('images/products/'.$product->a_img)}}"
                 height="45" width="35" alt="{{$product->a_img}}">
        </a>
    </div>
    <div class="form-group">
        {!! Form::label('Brand', 'Brand:') !!}
        {!! Form::text('brand',$product->brands->brand,['class'=>'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Size', 'Size:') !!}
        {!! Form::text('size',implode(",",$product->size->pluck("size")->all()),
                      ['class'=>'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Category', 'Category:') !!}
        {!! Form::text('cat_id',$product->category->cat,['class'=>'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Quantity', 'Quantity:') !!}
        {!! Form::text('quantity',$product->quantity,['class'=>'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Price', 'Price:') !!}
        {!! Form::text('price',$product->price,['class'=>'form-control', 'readonly' => 'true']) !!}
    </div>
    <div class="form-group">
        <a href="{{ url('backend/articles')}}" class="btn btn-primary">Back</a>
    </div>
    </form>
@stop