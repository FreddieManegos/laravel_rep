@extends('admin.admin')

@section('content')

    <h1>Edit Users</h1>
    {{--{{csrf_field()}}--}}
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>
    @endif
    <div class="col-sm-3">

        <img src="/images/{{$user->photo->file}}" alt="" class="img-responsive img-rounded">

        {!! Form::open(['method'=>'Delete','action'=>['AdminUserController@destroy',$user->id]]) !!}
            <div class="input-group-text" id="btnGroupAddon">
                {!! Form::submit("Delete User",['class'=>'btn btn-danger']) !!}
            </div>
        {!! Form::close() !!}


    </div>


    <div class="col-sm-9">
        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUserController@update',$user->id],'file'=>true,'enctype' => "multipart/form-data"]) !!}
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
            {!! Form::label('role_id','Role') !!}
            {!! Form::select('role_id',$roles , null, ['class'=>'form-control','placeholder' => 'Choose'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active','Status') !!}
            {!! Form::select('is_active', [1 => 'Active', 2 => 'Not Active'], null, ['class'=>'form-control','placeholder' => 'Choose']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('file','File') !!}
            {!! Form::file('file',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Edit',['class'=>'btn btn-info']) !!}
            {!! Form::close() !!}
        </div>

        {!! Form::open(['method'=>'post','action'=>'AdminUserController@store']) !!}
        {{csrf_field()}}

        {!! Form::close() !!}

    </div>

@stop
