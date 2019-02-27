@extends('admin.admin')


@section('content')

<h1><strong>Create Post</strong></h1>

    {!! Form::open(['method'=>'post','action'=>'AdminPostsController@store','file'=>true,'enctype' => "multipart/form-data"]) !!}
    {{csrf_field()}}

    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form::select('category_id',array(''=>'options'),null,['class'=>'form-control']) !!}
    </div>

        {!! Form::label('photo_id','File') !!}
        {!! Form::file('photo_id') !!}

    <div class="form-group">
        {!! Form::label('body','Description') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post',['class'=>'btn btn-info','required'=>'required']) !!}
    </div>

    {!! Form::close() !!}

    <div class="row">
        @include('includes.form_error')
    </div>



@stop