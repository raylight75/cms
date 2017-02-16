@extends('backend/tblTemplate')
@section('title',$title)
@section('body')
    @include('messages/flash_message')
    <a href="{{url('backend/users/create')}}" class="btn btn-success">Create User</a>
    <a href="{{url('backend/roles')}}" class="btn btn-success">Create Role</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Name</th>
            <th>Email
            <th>Roles</th>
            <th>Active</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email}}</td>
                <td>{{implode(",", $user->role->pluck("slug")->all())}}</td>
                <td>{{ $user->is_activated == 1 ? 'Yes' : 'No' }}</td>
                <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $user->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        <nav>
            {!! $users->appends(Input::except('page'))->render() !!}
        </nav>
    </div>
    <div class="row">
    </div>
@endsection