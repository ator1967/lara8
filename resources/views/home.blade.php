@extends('layouts.app')


@section('content')

<div class="well body-hight">
@if (Session::has('mesaj'))
 <span>{{ Session::get('mesaj') }} </span>
 @endif

<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nume</th>
                <th>Email</th>
                <th></th>
                <th></th>
           </tr>
        </thead>

        <tbody>
            @foreach ($persoane as $pers)
            <tr>
                <td class="col-md-4">{{ $pers->nume }}</td>
                <td class="col-md-4">{{ $pers->email }}</td>
        <td class="col-md-2"><center><a href = "{{ URL::to('Persoane/'.$pers->id.'/edit') }}"
         class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit&nbsp;&nbsp;</a></center></td>
                
        <td class="col-md-2"><center><a href = "{{ action('Mycontrol@delete', $pers->id) }}"
         class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></center></td>      
        </tr>
        @endforeach

        </tbody>

     </table>
</div>
 </div>    
     
</div>
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<center>
{!! $persoane->total() !!}
{!! $persoane->appends(['sort' => 'nume'])->links() !!}
</center>
</div>
</div>

@stop