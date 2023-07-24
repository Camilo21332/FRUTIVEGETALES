@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> venta carrito<span class=""></span></th>
            
     
        </tr>
    </thead>
    @foreach ($venta as $venta)
    <tbody>
        <tr>
            <td>{{$venta->id}} </td>
            <td>{{$venta->VENTcarrito_compra}}</td>
            
         
            <td>
             <a href="{{route('ventas.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>




@endsection