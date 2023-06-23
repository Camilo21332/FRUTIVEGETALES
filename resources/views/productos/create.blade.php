<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('productos.store')}}"method="post">@csrf  <label>
        Nombre_Productos
        <br>
        <input type="text" name="PRODUCTnombres">
    </label>
    <br>
    <label>
        Tiempo de reclamo
        <br>
        <input type="text" name="PRODUCTtiempo_reclamo">
    </label>
    
    <br><br>
    <button type="submit">Enviar Formulario:</button> </form> 

</body>
</html>