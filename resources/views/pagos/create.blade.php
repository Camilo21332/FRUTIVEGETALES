@extends('layouts.plantilla')

@section('content')
    
    <h1>Pago</h1>

<form action="{{ route('pagos.store') }}" method="POST">

    @csrf
  <label>
   pago
    <br>
    <br>
    <input type="text" name="facturas">
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
<button type="submit">Enviar formulario</button>
</form>

@endsection

