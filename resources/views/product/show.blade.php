@extends('layout/template')
@section('content')
    <h1>Book Show</h1>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Front Image</label>
            <div class="col-sm-10">
                <img src="{{asset('images/products/'.$product->a_img)}}" height="180" width="150" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Side Image</label>
            <div class="col-sm-10">
                <img src="{{asset('images/products/'.$product->b_img)}}" height="180" width="150" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Left Image</label>
            <div class="col-sm-10">
                <img src="{{asset('images/products/'.$product->c_img)}}" height="180" width="150" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder={{$product->product_id}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder={{$product->slug}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="author" placeholder={{$product->name}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Brand</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisher" placeholder={{$product->brands->brand}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Category</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisher" placeholder={{$product->cat_id}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisher" placeholder={{$product->quantity}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisher" placeholder={{$product->price}} readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('products')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop