<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <!-- Enlace a tus archivos de estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/formularios.css') }}">
</head>
<body>
    <h1>crear usuario</h1>
    <div class="users-form">
    <form action="{{ route('users.store') }}" method="post">
        @csrf
            
            <input type="text" name="nombres" placeholder="nombres">
        
            <input type="text" name="apellidos" placeholder=apellidos>
            
            <input type="text" name="edad" placeholder="edad">

            <input type="text" name="telefono" placeholder="telefono">
        
            <input type="text" name="email" placeholder="email">
            
            <input type="password" name="contraseña" placeholder="contrseña">

        <!-- Campo para seleccionar el rol -->
        <select name="rol_id" class="users-form">
            @foreach($rols as $rol)
                <option value="{{ $rol->id }}">{{ $rol->id }}  {{ $rol->nombre }}</option>
            @endforeach
        </select>
        
        <select name="abastecimiento_id" class="users-form">
            @foreach($abastecimientos as $abastecimiento)
                <option value="{{ $abastecimiento->id }}">{{ $abastecimiento->id }} {{ $abastecimiento->nombre }}</option>
            @endforeach
        </select>
        
        <input type="submit" value="enviar formulario">
    </div>
    </form>
</body>
</html>
