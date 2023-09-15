<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de PQRS</title>
</head>
<body>
    <h1>Formulario de PQRS</h1>
    <form action="procesar_pqrs.php" method="post">
     
        <label for="tipo">Tipo de PQRS:</label>
        <select id="tipo" name="tipo">
            <option value="peticion">Petición</option>
            <option value="queja">Queja</option>
            <option value="reclamo">Reclamo</option>
            <option value="sugerencia">Sugerencia</option>
        </select><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Enviar PQRS">
    </form>
</body>
</html>