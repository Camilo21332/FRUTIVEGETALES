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
        <input type="text" name="USUnombres" value="{{ $user->USUnombres}}" autofocus>
    </label>
    <br>
    <label>
        <br> 
            Apellido
            <br>
            <input type="text" name="USUapellidos" value="{{ $user->USUapellidos}}" autofocus  >
        </label>
           <br><br>
           <label>
            edad
            <br>
            <input type="text" name="USUedad" value="{{ $user->USUedad}}" autofocus>
        </label>
           <br><br>
           <label>
            telefono
            <br>
            <input type="text" name="USUtelefono" value="{{ $user->USUtelefono}}" autofocus>
        </label>
           <br><br>
           <label>
            email
            <br>
            <input type="text" name="USUemail" value="{{ $user->USUemail}}" autofocus>
        </label>
           <br><br>
        <label>
         contraseña
         <br>
         <input type="text" name="USUcontraseña" value="{{ $user->USUcontraseña}}" autofocus>
     </label>
     <br><br>

    <button type="submit">actualizar</button> </form> 
    
</body>
</html>

