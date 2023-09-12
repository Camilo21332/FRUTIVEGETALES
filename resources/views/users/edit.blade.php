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
    <div class="users-form">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('put')
    
            <h3>Editar datos</h3>
        
            <input type="text" name="nombres"placeholder="nombre" value="{{ $user->nombres }}" autofocus>
      
    
            <input type="text" name="apellidos" placeholder="apellidos" value="{{ $user->apellidos }}" autofocus>
     
            
            <input type="text" name="edad" placeholder="edad" value="{{ $user->edad }}" autofocus>
     
    
            <input type="text" name="telefono" placeholder="telefono" value="{{ $user->telefono }}" autofocus>
       
            
            <input type="text" name="email" placeholder="email" value="{{ $user->email }}" autofocus>
       
            <input type="password" name="contraseña"placeholder="contraseña" value="{{ $user->contraseña }}" autofocus>
  
   

            <select name="rol_id"  class="users-form" autofocus>
                @foreach($rols as $rol)
                    <option value="{{ $rol->id }}" {{ $user->rol_id == $rol->id ? 'selected' : '' }}>
                        {{ $rol->id }}  {{ $rol->nombre }}
                    </option>
                @endforeach
            </select>
     
            <select name="abastecimiento_id" class="users-form" autofocus>
                @foreach($abastecimientos as $abastecimiento)
                    <option value="{{ $abastecimiento->id }}" {{ $user->abastecimiento_id == $abastecimiento->id ? 'selected' : '' }}>
                        {{ $abastecimiento->id }} {{ $abastecimiento->nombre }}
                    </option>
                @endforeach
            </select>
            <input type="submit" value="actualizar formulario">
    </div>
    </form> 
</body>
</html>


