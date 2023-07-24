@extends('layouts.plantilla')

@section('content')
    
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

