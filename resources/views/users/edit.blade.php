@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
 <form action="{{route('users.update' , $user->id)}}"method="post">
        @csrf
        @method('put')
          <label>
        <h3>editar datos </h3>
        Nombre 
        <br>
        <input type="text" name="nombres" value="{{ $user->nombres}}" autofocus>
    </label>
    <br>
    <label>
        <br> 
            Apellido
            <br>
            <input type="text" name="apellidos" value="{{ $user->apellidos}}" autofocus  >
        </label>
           <br><br>
           <label>
            edad
            <br>
            <input type="text" name="edad" value="{{ $user->edad}}" autofocus>
        </label>
           <br><br>
           <label>
            telefono
            <br>
            <input type="text" name="telefono" value="{{ $user->telefono}}" autofocus>
        </label>
           <br><br>
           <label>
            email
            <br>
            <input type="text" name="email" value="{{ $user->email}}" autofocus>
        </label>
           <br><br>
        <label>
         contraseña
         <br>
         <input type="text" name="contraseña" value="{{ $user->contraseña}}" autofocus>
     </label>
     <br><br>
     <label>
          <!-- Selector para el rol -->
          <label>
            Rol
            <br>
            <select name="rol_id">
                @foreach($rols as $rol)
                    <option value="{{ $rol->id }}" {{ $user->rol_id == $rol->id ? 'selected' : '' }}>
                        {{ $rol->id }}  {{ $rol->nombre }}
                    </option>
                @endforeach
            </select>
        </label>
        <br><br>

        <!-- Selector para el abastecimiento -->
        <label>
            Abastecimiento
            <br>
            <select name="abastecimiento_id">
                @foreach($abastecimientos as $abastecimiento)
                    <option value="{{ $abastecimiento->id }}" {{ $user->abastecimiento_id == $abastecimiento->id ? 'selected' : '' }}>
                        {{ $abastecimiento->id }} {{ $abastecimiento->nombre }}
                    </option>
                @endforeach
            </select>
        </label>
        <br><br>

    <button type="submit">actualizar</button> </form> 
    
</body>
</html>

