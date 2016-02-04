@extends('layouts.app')


@section('content')

<div class="well body-hight">

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nume</th>
                <th>Email</th>
           </tr>
        </thead>

        <tbody>
            @foreach ($persoane as $pers)
            <tr>
                <td>{{ $pers->nume }}</td>
                <td>{{ $pers->email }}</td>
        <td><center><a href = "{{ URL::to('Persoane/'.$pers->id.'/edit') }}"
         class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit&nbsp;&nbsp;</a></center></td>
                
        <td><center><a href = "{{ action('Mycontrol@delete', $pers->id) }}"
         class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></center></td>      
        </tr>
        @endforeach

        </tbody>

     </table>
     
</div>

@stop