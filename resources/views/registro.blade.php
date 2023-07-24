<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/registro.css')}}">
    <title>login y registro</title>


</head>
<body> 
<main>

<div class="contenedor__todo">
    <div class="caja__trasera">
        <div class="caja__trasera-login">
    <h3>¿ya tienes cuenta?</h3>
    <p>inicia sesion </p>
      <button id="btn_iniciar-sesion">iniciar sesion</button>
    </div>

     <div class="caja__trasera-register">
    <h3>¿aun no tienes cuenta?</h3>
<p>registrate para poder iniciar sesion</p>
<button id="btn__registrarse">registrarse</button>
    </div>
</div>


<div class="contenedor__login-register">
   <form action="" class="formulario__login">
<h2>iniciar sesion</h2>
    <input type="text" placeholder="correo electronico">
    <input type="password" placeholder="contraseña">
    <button href="../views/index.html">entrar</button>
    

 </form>

<form action="../views/registro.php" method="POST" class="formulario__register" >
<h2>registrarse</h2>
   <input type="text" placeholder="nombres" name="usuNombre">
   <input type="text" placeholder="apellidos" name="usuApellidos">
   <input type="text" placeholder="edad" name="usuEdad">
   <input type="text" placeholder="telefono" name="usuTelefono">
   <input type="email" placeholder="correo electronico" name="usuEmail">
   <input type="text" placeholder="contraseña" name="usuContraseña">

   <button>registrarse</button>

</form>

</div>

</div>


</main>
<script src="{{ asset('js/registro.js') }}"></script>
</body>
</html>