@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('compras.store')}}"method="post">@csrf  <label>
        Nombre 
        <br>
        <input type="text" name="qr">
    </label>
    <br>
    <label>
            cantida
            <br>
            <input type="text" name="cantida">
        </label>
        <br>

        <label>
            Selecciona un Usuario
            <br>
            <select name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->nombres }}</option>
                @endforeach
            </select>
        </label>
        <br>
    
        <label>
            Selecciona un Carrito de Compras
            <br>
            <select name="carrito_compra_id">
                @foreach ($carritos as $carrito)
                    <option value="{{ $carrito->id }}">{{ $carrito->cantida_productos }}</option>
                @endforeach
            </select>
        </label>
        <br><br>
      
    <br><br>
    <button type="submit">Enviar Formulario:</button> </form> 
    
</body>
</html>