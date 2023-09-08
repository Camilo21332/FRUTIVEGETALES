<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('productos.store')}}"method="post" enctype="multipart/form-data">@csrf  <label>
        Nombre_Productos
        <br>
        <input type="text" name="nombres">
    </label>
    <br>
    <label>
        Tiempo de reclamo
        <br>
        <input type="text" name="tiempo_reclamo">
    </label>
    
    <br>
    <label>
        imagen
        <br>
        <input type="file" name="imagen">
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
    <br>
    <br><br>
    <button type="submit">Enviar Formulario:</button> </form> 

</body>
</html>