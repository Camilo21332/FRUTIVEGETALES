@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('users.store')}}"method="post">@csrf  <label>
        Nombre 
        <br>
        <input type="text" name="nombres">
    </label>
    <br>
    <label>
        <br> 
            Apellido
            <br>
            <input type="text" name="apellidos">
        </label>
           <br><br>
           <label>
            edad
            <br>
            <input type="text" name="edad">
        </label>
           <br><br>
           <label>
            telefono
            <br>
            <input type="text" name="telefono">
        </label>
           <br><br>
           <label>
            email
            <br>
            <input type="text" name="email">
        </label>
           <br><br>
        <label>
         contraseña
         <br>
         <input type="text" name="contraseña">
     </label>
     <br><br>

        <!-- Campo para seleccionar el rol -->
    <label>
        Rol <br>
        <select name="rol_id">
            @foreach($rols as $rol)
                <option value="{{ $rol->id }}">{{ $rol->id }}  {{ $rol->nombre }}</option>
            @endforeach
        </select>
    </label>
    <br><br>

        <!-- Campo para seleccionar el abastecimiento -->
        <label>
            Abastecimiento <br>
            <select name="abastecimiento_id">
                @foreach($abastecimientos as $abastecimiento)
                    <option value="{{ $abastecimiento->id }}"> {{ $abastecimiento->id }} {{ $abastecimiento->nombre }}</option>
                @endforeach
            </select>
        </label>
        <br><br>


    <button type="submit">Enviar Formulario:</button> </form> 
    
</body>
</html>