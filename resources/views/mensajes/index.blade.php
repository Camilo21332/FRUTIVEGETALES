@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> nombre <span class=""></span></th>
            
     
        </tr>
    </thead>
    @foreach ($mensaje as $mensaje)
    <tbody>
        <tr>
            <td>{{$mensaje->id}} </td>
            <td>{{$mensaje->MENnombre_chat}}</td>
            
         
            <td>
             <a href="{{route('mensajes.create')}}"><p class="status delivered">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>




@endsection