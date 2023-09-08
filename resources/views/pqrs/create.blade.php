@extends('layouts.plantilla')

@section('content')
    

<form action="{{ route('pqrs.store') }}" method="POST">

    @csrf
  <label>
   motivo
    <br>
    <br>
    <input type="text" name="motivo">
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