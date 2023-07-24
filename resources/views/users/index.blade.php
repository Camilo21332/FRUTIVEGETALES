@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> nombres <span class=""></span></th>
            <th> apellidos<span class=""></span></th>
            <th> edad<span class=""></span></th>
            <th> telefono<span class=""></span></th>
            <th> email<span class=""></span></th>
            <th> contraseña<span class=""></span></th>
     
        </tr>
    </thead>
    @foreach ($user as $user)
    <tbody>
        <tr>
            <td>{{$user->id}} </td>
            <td>{{$user->USUnombres}}</td>
            <td>{{$user->USUapellidos}}</td>
            <td>{{$user->USUedad}}</td>
            <td>{{$user->USUtelefono}}</td>
            <td>{{$user->USUemail}}</td>
            <td>{{$user->USUcontraseña}}</td>
         
            <td>
             <a href="{{route('users.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>




@endsection