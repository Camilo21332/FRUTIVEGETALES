@extends('layouts.plantilla')

@section('content')
    
<form action="{{ route('cars.store') }}" method="POST">

    @csrf
  <label>
   cantida
    <br>
    <br>
    <input type="text" name="cantida_productos">
</label>
<br>
<label>
    Selecciona un Usuario
    <br>
    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{ $user->id }}"> {{ $user->id }} {{ $user->nombres }}</option>
        @endforeach
    </select>
</label>
 <br>
 <br>

 <label>
    Selecciona un Producto
    <br>
    <select name="producto_id">
        @foreach ($productos as $producto)
            <option value="{{ $producto->id }}">{{ $producto->nombres }}</option>
        @endforeach
    </select>
</label>
<br>

<button type="submit">Enviar formulario</button>
</form>

@endsection