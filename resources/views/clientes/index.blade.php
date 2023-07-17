@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> nombres <span class="icon-arrow"></span></th>
            <th> apellidos<span class="icon-arrow"></span></th>
            <th> edad<span class="icon-arrow"></span></th>
            <th>email <span class="icon-arrow"></span></th>
            <th>contraseña <span class="icon-arrow"></span></th>
        </tr>
    </thead>
    @foreach ($cliente as $cliente)
    <tbody>
        <tr>
            <td>{{$cliente->id}} </td>
            <td>{{$cliente->CLIEnombres}}</td>
            <td>{{$cliente->CLIEapellidos}}</td>
            <td>{{$cliente->CLIEedad}}</td>
            <td>{{$cliente->CLIEemail}}</td>
            <td>{{$cliente->CLIEcontraseña}}</td>
            <td>
             <a href="{{route('clientes.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>




@endsection