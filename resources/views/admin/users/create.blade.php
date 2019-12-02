@extends('layouts.admin')

@section('content')

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}


    <div class="form-group">

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('role_id', 'Role Id:') !!}
        {!! Form::select('role_id',[''=>'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(0=>'Not Active', 1=>'Active'), 0 , ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}

    </div>

    {{csrf_field()}}

    {!! Form::close() !!}

    @include('includes.form-errors')

@stop
