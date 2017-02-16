<div class="form-group">
    <a href="{{ url('backend/articles')}}" class="btn btn-primary">Back</a>
</div>
<div class="form-group">
    {!! Form::label('Slug', 'Slug:') !!}
    {!! Form::text('slug',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Image') !!}
    @if($product->a_img)
        <a class="thumbnail">
            <img class="img-responsive" src="{{asset('images/products/'.$product->a_img)}}"
                 height="45" width="35" alt="{{$product->a_img}}">
        </a>
    @endif
    {!! Form::file('a_img', null) !!}
    {!! Form::hidden('old_img', $product->a_img) !!}
</div>
<?php $sizes_array = $product->size->pluck("size_id")->all();
$brands = $product->brands->pluck('brand', 'brand_id');
?>
<div class="form-group">
    {!! Form::label('Brand', 'Brand:') !!}
    {!! Form::select('brand_id', $brands, null, ['id' => 'brand_id','class'=>'form-control'])!!}
</div>
<div class="form-group">
    @foreach ($checkbox as $s)
        {!! Form::label($s->size,$s->size) !!}
        {!! Form::checkbox( 'size[]',$s->size_id, in_array($s->size_id, $sizes_array),['id' => $s['size_id'],'class' => 'md-check'])!!}
    @endforeach
</div>
<?php $sizes_array = $product->category->pluck("cat_id")->all();
$category = $product->category->pluck('cat', 'cat_id');
?>
<div class="form-group">
    {!! Form::label('Category', 'Category:') !!}
    {!! Form::select('cat_id', $category, null, ['id' => 'cat_id','class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('Quantity', 'Quantity:') !!}
    {!! Form::text('quantity',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::text('price',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>