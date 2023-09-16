
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $producto->nombres }}</title>
    <link rel="stylesheet" href="{{ asset('css/detalle.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>{{ $producto->nombres }}</h1>
            <img class="product-image" src="{{ asset('storage/productos/' . $producto->imagen) }}" alt="{{ $producto->nombres }}">
            <p class="product-price">Precio: ${{ $producto->precio }}</p>
            <p class="product-description">{{ $producto->descripcion }}</p>

            <a href="{{ route('index') }}" class="btn btn-primary">Volver al Índice</a>
        </div>   
                </div>
            </div>
        </div>
    </div>
</body>
</html>

