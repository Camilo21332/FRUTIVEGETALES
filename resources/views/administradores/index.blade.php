@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> nombres <span class=""></span></th>
            <th> apellidos<span class=""></span></th>
     
        </tr>
    </thead>
    @foreach ($administrador as $administrador)
    <tbody>
        <tr>
            <td>{{$administrador->id}} </td>
            <td>{{$administrador->ADMInombre}}</td>
            <td>{{$administrador->ADMIapellidos}}</td>
         
            <td>
             <a href="{{route('administradores.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>




@endsection