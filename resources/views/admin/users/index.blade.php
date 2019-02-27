@extends('admin.admin')

@section('content')

    <h1>Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role ID</th>
            <th scope="col">Role Name</th>
            <th scope="col">Password</th>
            <th scope="col">Active</th>
        </tr>
        </thead>
        <tbody>
        @if($user)

            @foreach($user as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            <td><a href="/admin/users/{{$user->id}}/edit">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role_id}}</td>
            <td>{{$user->role->name}}</td>
            {{--<td>{{$user->password}}</td>--}}
            <td>{{$user->is_active == 1 ? 'yes':'no'}}</td>
        </tr>
            @endforeach

        @endif

        </tbody>
    </table>

@stop