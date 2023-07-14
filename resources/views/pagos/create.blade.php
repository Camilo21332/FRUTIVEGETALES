@extends('layouts.plantilla')

@section('content')
    
<<<<<<< HEAD
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
=======
    <h1>Pago</h1>

<form action="{{ route('pagos.store') }}" method="POST">

    @csrf
  <label>
   pago
    <br>
    <input type="text" name="PAGOfactura">
</label>
 
<button type="submit">Enviar formulario</button>
</form>

@endsection
>>>>>>> 4ad822bd6eaad1d257b01676143c73faf668a99c
