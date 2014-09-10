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

            <table class="table table-striped table-hover">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Budget</th>
                    <th>Action</th>
                </tr>
                @foreach ($visitors as $visitor)
                <tr>
                    <td>{{$visitor->first_name}}</td>

                    <td>{{$visitor->last_name}}</td>

                    <td>{{$visitor->email}}</td>

                    <td>{{$visitor->phone_number}}</td>

                    <td>${{number_format($visitor->budget)}}</td>

                    <td><a href="{{ action('VisitorController@show', $visitor->id)}}"><button class="btn btn-success btn-sm">Select</button></a></td>
                </tr>
                @endforeach
            </table>

            <!-- pagination -->
            {{ $visitors->links() }}
            </div>

        </div>
    </div>
@stop