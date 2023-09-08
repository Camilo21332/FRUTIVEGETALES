@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
             
            <th> id <span class=""></span></th>
            <th> user_id <span class=""></span></th>
            <th> carrito_compra_id <span class=""></span></th>
            <th> pqr <span class=""></span></th>
            <th> cantidad <span class=""></span></th>
       
            
     
        </tr>
    </thead>
    @foreach ($compra as $compra)
    <tbody>
        <tr>
            <td>{{$compra->id}} </td>
            <td>{{$compra->user_id}}</td>
            <td>{{$compra->carrito_compra_id}}</td>
            <td>{{$compra->Pqr}}</td>
            <td>{{$compra->cantida}}</td>
         
         
            <td>
             <a href="{{route('compras.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>




@endsection