@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th>  id <span class=""></span></th>
            <th>  user_id <span class=""></span></th>
            <th>  nombre_chat<span class=""></span></th>
            
     
        </tr>
    </thead>
    @foreach ($mensaje as $mensaje)
    <tbody>
        <tr>
            <td>{{$mensaje->id}} </td>
            <td>{{$mensaje->user_id}}</td>
            <td>{{$mensaje->nombre_chat}}</td>
            
         
            <td>
             <a href="{{route('mensajes.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>




@endsection