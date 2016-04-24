<div class="form-group">
    <a href="{{ url('backend/users')}}" class="btn btn-primary">Back</a>
</div>
<div class="form-group">
    {!! Form::label('Name', 'Name') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Slug', 'Slug') !!}
    {!! Form::text('slug',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Description', 'Description') !!}
    {!! Form::text('description',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Level', 'Level') !!}
    {!! Form::text('level',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>