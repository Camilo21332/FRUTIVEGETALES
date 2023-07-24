@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> nombre <span class=""></span></th>
            
     
        </tr>
    </thead>
    @foreach ($pago as $pago)
    <tbody>
        <tr>
            <td>{{$pago->id}} </td>
            <td>{{$pago->PAGOfactura}}</td>
            
         
            <td>
             <a href="{{route('pagos.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>