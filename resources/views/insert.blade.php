@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Adauga inregistrari</div>

                <div class="panel-body">
                {{ Form::open(array('action' => 'Mycontrol@store')) }}
                {{ Form::text('nume', 'Chuck') }} </br>
                {{ Form::text('email', 'email@email.me') }}
                {{ Form::submit('Save') }}
                {{ Form::reset('Clear form') }}
                {{ Form::close() }} 



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
