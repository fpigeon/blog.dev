@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
@stop
@section('content')
<div class="container">
    <!-- flash error messages -->
    {{ $errors->first('email', '<span class="help-block">:message</span>') }}
    {{ $errors->first('password', '<span class="help-block">:message</span>') }}

    <h1><span class="glyphicon glyphicon-lock"></span>Please Log In</h1>
    {{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
    <!-- new post form  -->
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email') }}
    <br>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    <br>
    <!--{{ Form::submit('Login') }}-->
    <button class="btn btn-sm btn-primary" type="submit">Log in</button>
    {{ Form::close() }}
</div>
