<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('abastecimientos.store') }}"method="post">@csrf <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        
        ubicacion:
        <br>
        <input type="text" name="ubicacion">
    </label>
    <br>

    horario de atencion:
    <br>
    <input type="text" name="horario_atencion">
</label>
<br>

        <br><br>
        <button type="submit">Enviar Formulario:</button>
    </form>

</body>

</html>
