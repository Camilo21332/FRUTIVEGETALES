@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> id<span class=""></span></th>
            <th> user_id<span class=""></span></th>
            <th> producto_id<span class=""></span></th>
            <th> cantidad productos<span class=""></span></th>
            
     
        </tr>
    </thead>
    @foreach (  $carrito_compra as $car)
    <tbody>
        <tr>
            <td>{{$car->id}} </td>
            <td>{{$car->user_id}}</td>
            <td>{{$car->producto_id}}</td>
            <td>{{$car->cantida_productos}}</td>
            
         
            <td>
             <a href="{{route('cars.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>