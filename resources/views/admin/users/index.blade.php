@extends('admin.admin')

@section('content')

    <h1>Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Role ID</th>
            <th scope="col">Role Name</th>
            <th scope="col">password</th>
            <th scope="col">is_active</th>
        </tr>
        </thead>
        <tbody>
        @if($user)

            @foreach($user as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role_id}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->is_active == 1 ? 'yes':'no'}}</td>
        </tr>
            @endforeach

        @endif

        </tbody>
    </table>

@stop