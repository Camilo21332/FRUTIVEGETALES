@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('mensajes.store')}}"method="post">@csrf  <label>
         nombre_chat
        <br>
        <input type="text" name="nombre_chat">
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
    <br><br>



    <br><br>
    <button type="submit">Enviar Formulario:</button> </form> 
    
</body>
</html>