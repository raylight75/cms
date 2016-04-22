{!! Form::open(['method'=>'GET','url'=>$url])  !!}
<div>
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="title">
        {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
    </span>
</div>
{!! Form::close() !!}