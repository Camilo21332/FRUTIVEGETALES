@extends('layouts.plantilla')

@section('content')
    
<h1>Crear curso </h1>
<form action="{{route('pagos.store')}}" method="POST">

    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="PAGOfactura">
    </label>
    <br>
  
    <br><br>
    <button type="submit">Enviar formulario:</button>

</form>