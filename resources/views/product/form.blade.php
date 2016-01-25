<?php //$test = implode(",", $checkbox->size->lists("size_id")->all()); ?>
<?php echo '<pre>',print_r($checkbox['size']),'</pre>'; ?>
<?php echo '<pre>',print_r($sizes),'</pre>'; ?>
<?php echo '<pre>',print_r($list),'</pre>'; ?>

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
    <?php //echo '<pre>',print_r($sizes),'</pre>'; ?>
    @foreach ($checkbox['size'] as $s)
    {!! Form::label($s['size_id'],$s['size_id']) !!}
    {!! Form::checkbox( 'size[]',$s['size_id'], in_array( 2, $checkbox['size']),['id' => $s['size_id'],'class' => 'md-check'])!!}
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