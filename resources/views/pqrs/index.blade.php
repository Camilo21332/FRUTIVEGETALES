@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> id <span class=""></span></th>
            <th> user_id <span class=""></span></th>
            <th> motivo <span class=""></span></th>
            
     
        </tr>
    </thead>
    @foreach ($pqrs as $pqr)
    <tbody>
        <tr>
            <td>{{$pqr->id}} </td>
            <td>{{$pqr->user_id}}</td>
            <td>{{$pqr->motivo}}</td>
            
         
            <td>
             <a href="{{route('pagos.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>