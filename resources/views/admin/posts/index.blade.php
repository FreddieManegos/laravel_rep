@extends('admin.admin')

@section('content')
    <h1 class="text-center">Posts</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Picture</th>
            <th scope="col">User ID</th>
            <th scope="col">Category ID</th>
            <th scope="col">Photo ID</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Date Created</th>
            <th scope="col">Date Updated</th>
        </tr>
    @foreach($post as $post)
        <tr>
            <th>{{$post->id}}</th>
            <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category_id}}</td>
            <td>{{$post->photo_id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
        </tr>
        @endforeach
        </thead>
        <tbody>
@stop
