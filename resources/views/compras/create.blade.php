@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('compras.store')}}"method="post">@csrf  <label>
        Nombre 
        <br>
        <input type="text" name="COMPqr">
    </label>
    <br>
    <label>
            cantida
            <br>
            <input type="text" name="COMPcantida">
        </label>
        <br>
        <label>
                carrito
                <br>
                <input type="text" name="COMPcarrito_compra">
            </label>
    <br><br>
    <button type="submit">Enviar Formulario:</button> </form> 
    
</body>
</html>