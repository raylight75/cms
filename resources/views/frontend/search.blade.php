{!! Form::open(['method'=>'GET','url'=>$url,'class'=>'navbar-form navbar-left'])  !!}
<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        {!! Form::submit('Search', ['class' => 'btn btn-default']) !!}
    </span>
</div>
{!! Form::close() !!}