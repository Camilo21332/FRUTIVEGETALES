<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/formularios.css') }}">
</head>
<body>
    <div class="users-form">
        <h1>crear producto</h1>
    <form action="{{route('productos.store')}}"method="post" enctype="multipart/form-data">@csrf 
      
        <input type="text" name="nombres" placeholder="nombres">
 
        <input type="text" name="tiempo_reclamo" placeholder="tiempo reclamo">

        <input type="file" name="imagen">
   
 
  
        <input type="number" name="precio" placeholder="precio">

        <select name="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}"> {{ $user->id }} {{ $user->nombres }}</option>
            @endforeach
        </select>
        <input type="submit" value="enviar formulario">
</div>
</form> 

</body>
</html>