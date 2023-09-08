@extends('layouts.plantilla')

@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>user_id</th>
            <th>Productos</th>
            <th>Tiempo de Reclamo</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->user_id}}</td>
            <td>{{$producto->nombres}}</td>
            <td>{{$producto->tiempo_reclamo}}</td>
            <td>
                @if ($producto->imagen)
                    <img src="{{ asset('storage/product/' . $producto->imagen) }}" alt="Imagen del producto">
                @else
                    No hay imagen
                @endif
            </td>
            <td>
                <a href="{{ route('productos.create') }}">Agregar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
