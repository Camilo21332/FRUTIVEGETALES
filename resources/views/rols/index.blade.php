@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th> id <span class=""></span></th>
            <th> nombre <span class=""></span></th>
            
     
        </tr>
    </thead>
    @foreach ($rols as $rol)
    <tbody>
        <tr>
            <td>{{$rol->id}} </td>
            <td>{{$rol->nombre}}</td>
            
         
            <td>
             <a href="{{route('rols.create')}}"><p class="">Agregar </p></a>
            </td>

    </tbody>
    @endforeach</td>
</table>




@endsection