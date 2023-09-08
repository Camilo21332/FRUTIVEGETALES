@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('rols.store')}}"method="post">@csrf  <label>
        Nombre 
        <br>
        <input type="text" name="nombre">
    </label>
    <br>
    
    <br><br>
    <button type="submit">Enviar Formulario:</button> </form> 
    
</body>
</html>