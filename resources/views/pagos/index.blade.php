@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> id <span class=""></span></th>
            <th> user_id <span class=""></span></th>
            <th> nombre <span class=""></span></th>
            
     
        </tr>
    </thead>
    @foreach ($pago as $pago)
    <tbody>
        <tr>
            <td>{{$pago->id}} </td>
            <td>{{$pago->user_id}}</td>
            <td>{{$pago->facturas}}</td>
            
         
            <td>
             <a href="{{route('pagos.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>