@extends('layouts.master');
@section('topscript')
<!-- Custom styles for this template -->
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
@stop
@section('content')
<div class="container">
    <br />
    <div class="row">
        <div class="col-sm-12">
            <h1>Let's Create Something Together</h1>
            <h4>Request a Quote</h4>
            <hr />
            <div class="row">
                <div class="col-sm-12">
                    {{ Form::open(array('action' => 'VisitorController@store', 'role' => 'form') )}}
                        <div class="row">
                            <div class="col-sm-12" >
                                <div class="well">
                                <h2> Contact Info </h2>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) }}
                                                {{ $errors->first('first_name', '<span class="help-block">:message</span>')}}
                                            </div>
                                            <div class="col-sm-6">
                                                {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
                                                {{ $errors->first('last_name', '<span class="help-block">:message</span>')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                                        {{ $errors->first('email', '<span class="help-block">:message</span>')}}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::text('phone_number', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) }}
                                        {{ $errors->first('phone_number', '<span class="help-block">:message</span>')}}
                                    </div>

                                    <h2>Address</h2>
                                    <div class="form-group">
                                        {{ Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Street Address']) }}
                                        {{ $errors->first('street', '<span class="help-block">:message</span>')}}
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::text('apt_num', null, ['class' => 'form-control', 'placeholder' => 'Apartment Number #']) }}
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            {{ Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'City']) }}
                                            {{ $errors->first('city', '<span class="help-block">:message</span>')}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control" name="state" id="state">
                                                    @if (isset($visitor))
                                                        {{$visitor->state}}
                                                        <option value="{{ $visitor->state }}">Choose State</option>
                                                    @else
                                                        <option value="">Choose State</option>
                                                    @endif
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA">California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="DC">District of Columbia</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY">Wyoming</option>
                                                </select>
                                                {{ $errors->first('state', '<span class="help-block">:message</span>')}}
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Zipcode']) }}
                                                {{ $errors->first('zip', '<span class="help-block">:message</span>')}}
                                            </div>
                                        </div>
                                    </div>
                                    <h2>Project Description</h2>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                {{ Form::textarea('find', null, ['class' => 'form-control', 'placeholder' => 'Please include how you found us.']) }}
                                                {{ $errors->first('find', '<span class="help-block">:message</span>')}}
                                            </div>
                                    </div>
                                    </div>
                                    <h2>Budget</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{ Form::text('budget', null, ['class' => 'form-control', 'placeholder' => '$1000']) }}
                                                {{ $errors->first('budget', '<span class="help-block">:message</span>')}}
                                            </div>
                                    </div>
                                    </div>
                                    <h2>Only Humans</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {{Form::captcha()}}
                                            </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">

                                            {{ Form::submit('Send It', ['class' => 'margin-save btn btn-primary btn-lg']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
    @include('includes.footer')
@stop

@section('bottomscript')
@if (isset($visitor))
<!-- if form has validation issues, state will be sticky -->
<script>
   var state = '{{ $visitor->state }}';
   $("select option[value='" + state + "']").attr("selected","selected");
</script>
@endif

@stop
