@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> Productos </th>
            <th> Tiempo De Reclamo</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    @foreach ($productos as $producto)
    <tbody>
        <tr>
            <td>{{$producto->id}} </td>
            <td>{{$producto->PRODUCTnombres}}</td>
            <td>{{$producto->PRODUCTtiempo_reclamo}}</td>
            <td>
                <a href="{{route('productos.create')}}"><p>Agregar </p></a>
               </td>
        </tr>
        

    </tbody>
    @endforeach</td>
</table>




@endsection