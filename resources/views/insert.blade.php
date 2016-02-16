@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Adauga inregistrari</div>
                @if (Session::has('mess'))
                    <span>{{ Session::get('mess') }} </span>
                @endif
                <div class="panel-body">
                {{ Form::open(['action' => 'Mycontrol@store']) }}
                <div class="form-group row">
                {{ Form::label("Nume ") }} 
                {{ Form::text('nume', '') }} </br>
                </div>
                <div class="form-group row">
                {{ Form::label("Email  ") }} 
                {{ Form::text('email', 'email@email.me') }} </br>
                </div>
                {{ Form::submit('Save') }}
                {{ Form::reset('Clear form') }}
                {{ Form::close() }} 



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
