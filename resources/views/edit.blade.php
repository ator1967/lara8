@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editeaza inregistrari</div>
 {{ Form::model($pers, array('route' => array('Mycontrol.update', $pers->id), 'method' => 'PUT')) }}


                <div class="panel-body">
                {{ Form::open(array('action' => 'Mycontrol@update')) }}
                <div class="form-group row">
                {{ Form::text('nume', 'Nume') }} </br>
                </div>
                <div class="form-group row">
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