<div class="form-group">
    <a href="{{ url('backend/users')}}" class="btn btn-primary">Back</a>
</div>
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Email', 'Email') !!}
    {!! Form::email('email',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Password', 'Password') !!}
    {!! Form::password('password',['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Password Confirmation', 'Password Confirmation') !!}
    {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>