@extends('admin.admin')

@section('content')

    <h1>Create Users</h1>
    {{--{{csrf_field()}}--}}


    {!! Form::open(['method'=>'post','action'=>'AdminUserController@store']) !!}
    {{csrf_field()}}

    <div class="form-group">
    {!! Form::label('name','Name') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::label('email','Email') !!}
    {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('isactive','Active') !!}
        {!! Form::select('isactive', ['Yes' => 'Yes', 'No' => 'No'], null, ['class'=>'form-control','placeholder' => 'Choose']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role','Role') !!}
        {!! Form::select('role', ['Administrator' => 'Administrator', 'Subscriber' => 'Subscriber', 'Author' => 'Author'], null, ['class'=>'form-control','placeholder' => 'Choose'])!!}
    </div>

    <div class="form-group">
    {!! Form::label('password','Password') !!}
    {!! Form::text('password',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::submit('Edit Post',['class'=>'btn btn-info']) !!}
    {!! Form::close() !!}
    </div>

    {!! Form::open(['method'=>'post','action'=>'AdminUserController@store']) !!}
    {{csrf_field()}}

    {!! Form::close() !!}
@stop
