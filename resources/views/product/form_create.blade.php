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
    {!! Form::file('a_img', null) !!}
</div>
<div class="form-group">
    {!! Form::label('Brand', 'Brand:') !!}
    {!! Form::select('brand_id', $brands, null, ['id' => 'brand_id','class'=>'form-control'])!!}
</div>
<div class="form-group">
    @foreach ($checkbox as $s)
        {!! Form::label($s->size_id,$s->size_id) !!}
        {!! Form::checkbox( 'size[]',$s->size_id, null,['id' => $s['size_id'],'class' => 'md-check'])!!}
    @endforeach
</div>
<div class="form-group">
    {!! Form::label('Category', 'Category:') !!}
    {!! Form::text('cat_id',null,['class'=>'form-control']) !!}
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>