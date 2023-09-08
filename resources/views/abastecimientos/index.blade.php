@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Horario de Atención</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($abastecimientos as $abastecimiento)
        <tr>
            <td>{{$abastecimiento->id}}</td> 
            <td>{{$abastecimiento->nombre}}</td>
            <td>{{$abastecimiento->ubicacion}}</td>
            <td>{{$abastecimiento->horario_atencion}}</td>
            <td>
                <a href="{{route('abastecimientos.create')}}">
                    <p class="status delivered">Agregar</p>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
