@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
@stop
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <ul>
        <li>
            <span class="bold">Name:</span> {{$visitor->first_name}} {{$visitor->last_name}}
        </li>
        <li>
            <span class="bold">Email:</span> {{$visitor->email}}
        </li>
        <li>
            <span class="bold">Phone:</span> {{$visitor->phone_number}}
        </li>
        <li>
            <span class="bold">Street:</span> {{$visitor->street}}
        </li>
        <li>
            <span class="bold">City:</span> {{$visitor->city}}
        </li>
        <li>
            <span class="bold">State:</span> {{$visitor->state}}
        </li>
        <li>
            <span class="bold">Zip:</span> {{$visitor->zip}}
        </li>
        <li>
            <span class="bold">Found Us:</span> {{$visitor->find}}
        </li>
        <li>
            <span class="bold">Budget:</span> ${{$visitor->budget}}
        </li>
    </ul>
    <div class="col-sm-offset-1">
        <a href="{{{ action('VisitorController@index') }}}"><button type="button" class="btn btn-primary btn-large"><span class="glyphicon glyphicon-chevron-left"></span>Return</button></a>
    </div>

</div>

@stop