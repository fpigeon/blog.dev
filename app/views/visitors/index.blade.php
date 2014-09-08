@extends('layouts.master')
@section('topscript')
    <!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
@stop

@section('content')
<div class="container">
    <!-- Vistiors -->
    <div class="col-md-8">
        <!-- blog content -->
        <div class="">
            <h1>All Vistors</h1>
             <!-- display all posts -->
            @foreach ($visitors as $visitor)
                <h2>{{ link_to_action('VisitorController@show', $visitor->first_name, array($visitor->id) ) }} </h2>
                <h3>{{$visitor->last_name}}</h3>
                <h3>{{$visitor->email}}</h3>
                <h3>{{$visitor->phone_number}}</h3>
                <h3>{{$visitor->budget}}</h3>
                <hr>
            @endforeach

            <!-- pagination -->
            {{ $visitors->links() }}
            </div>

        </div>
    </div>
@stop