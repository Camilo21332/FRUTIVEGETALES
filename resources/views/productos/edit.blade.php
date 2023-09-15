<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="{{ asset('css/imagenproduc.css') }}">
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <label for="user_id">Usuario:</label>
        <select name="user_id" id="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $producto->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->id }} - {{ $user->nombres }}
                </option>
            @endforeach
        </select>
<br>
<br>
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" id="nombres" value="{{ $producto->nombres }}" autofocus>
<br>
<br>
        <label for="tiempo_reclamo">Tiempo de Reclamo:</label>
        <input type="text" name="tiempo_reclamo" id="tiempo_reclamo" value="{{ $producto->tiempo_reclamo }}" autofocus>
<br>
<br>

<br>
<br>
        <label for="precio">precio</label>
        <input type="number" name="precio" id="precio" value="{{ $producto->precio }}" autofocus>
<br>
<br>

        <label for="imagen_actual">Imagen Actual:</label>
        @if ($producto->imagen)
            <img src="{{ asset('storage/productos/' . $producto->imagen) }}" alt="Imagen actual del producto" class="imagen-producto">
        @else
            <p>No hay imagen</p>
        @endif
<br>
<br>
        <label for="nueva_imagen">Nueva Imagen (opcional):</label>
        <input type="file" name="nueva_imagen" id="nueva_imagen">
<br>
<br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
