@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('users.store')}}"method="post">@csrf  <label>
        Nombre 
        <br>
        <input type="text" name="USUnombres">
    </label>
    <br>
    <label>
        <br> 
            Apellido
            <br>
            <input type="text" name="USUapellidos">
        </label>
           <br><br>
           <label>
            edad
            <br>
            <input type="text" name="USUedad">
        </label>
           <br><br>
           <label>
            telefono
            <br>
            <input type="text" name="USUtelefono">
        </label>
           <br><br>
           <label>
            email
            <br>
            <input type="text" name="USUemail">
        </label>
           <br><br>
        <label>
         contraseña
         <br>
         <input type="text" name="USUcontraseña">
     </label>
     <br><br>

    <button type="submit">Enviar Formulario:</button> </form> 
    
</body>
</html>