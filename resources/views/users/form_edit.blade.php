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
    {!! Form::label('Active', 'Active:') !!}
    {!! Form::text('is_activated',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Old Password', 'Old Password') !!}
    {!! Form::password('old_password',['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('New Password', 'New Password') !!}
    {!! Form::password('password',['class'=>'form-control']) !!}
</div>
<?php $roles_array = $user->role->pluck("id")->all();?>
<div class="form-group">
    @foreach ($roles as $r)
        {!! Form::label($r->name,$r->name) !!}
        {!! Form::checkbox( 'role[]',$r->id, in_array($r->id, $roles_array),['id' => $r['id'],'class' => 'md-check'])!!}
    @endforeach
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>