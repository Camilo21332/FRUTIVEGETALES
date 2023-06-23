@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('administradores.store')}}"method="post">@csrf  <label>
        Nombre 
        <br>
        <input type="text" name="ADMInombre">
    </label>
    <br>
    <label>
            Apellido
            <br>
            <input type="text" name="ADMIapellidos">
        </label>
       
    <br><br>
    <button type="submit">Enviar Formulario:</button> </form> 
    
</body>
</html>