@extends('layouts.plantilla')

@section('content')


<table>
    <div class="usuario-table">
        <table>
    <thead>
        <tr>
            <th> id <span class=""></span></th>
            <th> rol_id<span class=""></span></th>
            <th> abastecimiento_id <span class=""></span></th>
            <th> nombres <span class=""></span></th>
            <th> apellidos<span class=""></span></th>
            <th> edad<span class=""></span></th>
            <th> telefono<span class=""></span></th>
            <th> email<span class=""></span></th>
            <th> contraseña<span class=""></span></th>
     
        </tr>
    </thead>
</div>
    @foreach ($user as $user)
    <tbody>
        <tr>
            <td>{{$user->id}} </td>
            <td>{{$user->rol_id}}</td>
            <td>{{$user->abastecimiento_id}}</td>
            <td>{{$user->nombres}}</td>
            <td>{{$user->apellidos}}</td>
            <td>{{$user->edad}}</td>
            <td>{{$user->telefono}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->contraseña}}</td>
         
            <td>
             <a href="{{route('users.create') }}"><p class="usuario-table--agregar">Agregar </p></a>
             <a href="{{route('users.edit' ,$user->id) }}"><p class="usuario-table--agregar">editar </p></a>
            </td>
        
    </tbody>
    @endforeach</td>
</table>


@endsection