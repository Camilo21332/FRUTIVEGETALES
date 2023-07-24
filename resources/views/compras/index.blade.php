@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> pqr <span class=""></span></th>
            <th> cantidad <span class=""></span></th>
            <th> carrito_compra <span class=""></span></th>
            
     
        </tr>
    </thead>
    @foreach ($compra as $compra)
    <tbody>
        <tr>
            <td>{{$compra->id}} </td>
            <td>{{$compra->COMPqr}}</td>
            <td>{{$compra->COMPcantida}}</td>
            <td>{{$compra->COMPcarrito_compra}}</td>
         
            <td>
             <a href="{{route('compras.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>




@endsection