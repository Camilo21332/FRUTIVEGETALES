@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('clientes.store')}}"method="post">@csrf  <label>
        Nombre 
        <br>
        <input type="text" name="CLIEnombres">
    </label>
    <br>
    <label>
            apellidos
            <br>
            <input type="text" name="CLIEapellidos">
        </label>
        <br>
        <label>
                edad
                <br>
                <input type="text" name="CLIEedad">
            </label>
            <br>
            <label>
                    email
                    <br>
                    <input type="text" name="CLIEemail">
                </label>
                <br>
                <label>
                        contraseña
                        <br>
                        <input type="text" name="CLIEcontraseña">
                    </label>
    <br><br>

    
              
   
</body>
</html>