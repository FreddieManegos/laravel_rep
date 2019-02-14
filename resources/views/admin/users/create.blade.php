@extends('admin.admin')

@section('content')

    <h1>Create Users</h1>
    {{--{{csrf_field()}}--}}


    {!! Form::open(['method'=>'post','action'=>'AdminUserController@store','file'=>true]) !!}
    {{csrf_field()}}

    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null,['class'=>'form-control','required'=>'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',null,['class'=>'form-control','required'=>'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id','Role') !!}
        {!! Form::select('role_id',$roles , null, ['class'=>'form-control','placeholder' => 'Choose','required'=>'required'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active','Status') !!}
        {!! Form::select('is_active', [1 => 'Active', 2 => 'Not Active'], null, ['class'=>'form-control','placeholder' => 'Choose','required'=>'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file','File') !!}
        {!! Form::file('file',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control','required'=>'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit Post',['class'=>'btn btn-info','required'=>'required']) !!}
        {!! Form::close() !!}
    </div>

    {!! Form::open(['method'=>'post','action'=>'AdminUserController@store']) !!}
    {{csrf_field()}}

    {!! Form::close() !!}


    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>
    @endif
@stop
