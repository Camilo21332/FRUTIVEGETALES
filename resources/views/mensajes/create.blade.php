@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('mensajes.store')}}"method="post">@csrf  <label>
        Nombre 
        <br>
        <input type="text" name="MENnombre_chat">
    </label>
    <br>
    
    <br><br>
    <button type="submit">Enviar Formulario:</button> </form> 
    
</body>
</html>