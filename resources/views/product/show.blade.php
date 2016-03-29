@extends('layout/template')
@section('content')
    <style type="text/css">
        ul li {
            display: inline-block;
            float: left;
        }
    </style>
    <h1>Show Products</h1>
    <form class="form-horizontal">
        <ul>
            <label for="image" class="col-sm-2 control-label">Front Image</label>
            <li>
                <img src="{{asset('images/products/'.$product->a_img)}}" height="120" width="90" class="img-rounded">
            </li>
        </ul>
        <ul>
            <label for="image" class="col-sm-2 control-label">Side Image</label>
            <li>
                <img src="{{asset('images/products/'.$product->b_img)}}" height="120" width="90" class="img-rounded">
            </li>
        </ul>
        <ul>
            <label for="image" class="col-sm-2 control-label">Left Image</label>
            <li>
                <img src="{{asset('images/products/'.$product->c_img)}}" height="120" width="90" class="img-rounded">
            </li>
        </ul>
        <div class="form-group">
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
                <input type="text" class="form-control" placeholder={{$product->slug}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Name</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder={{$product->name}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Description</label>

            <div class="col-sm-10">
                <textarea class="form-control" placeholder="{{$product->description}}" rows="7"
                          id="comment" readonly></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Brand</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder={{$product->brands->brand}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Size</label>

            <div class="col-sm-10">
                <input type="text" class="form-control"
                       placeholder={{implode(",", $product->size->lists("size")->all())}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Category</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder={{$product->cat_id}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Quantity</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder={{$product->quantity}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Price</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder={{$product->price}} readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('products')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop