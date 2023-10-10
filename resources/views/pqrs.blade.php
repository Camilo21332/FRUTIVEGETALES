<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>frutivegetal</title>
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
     <link href="{{ asset('css/inicio2.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio3.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio4.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-1 mb-1">
        <div class="row align-items-center">
            <!-- Logotipo  -->
            <div class="col">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logoofi2.png') }}" alt="Logo de Frutivegetal" width="200"> 
                </a>
            </div>
 <!-- buscador -->
            <div class="col">
                <form class="form-inline">
                    <div class="input-group search-input">
                        <input class="form-control border-0" type="search" placeholder="Buscar" aria-label="Buscar">
                        <div class="input-group-append search-icon-container">
                            <span class="input-group-text border-0 search-icon"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col"></div>

            <!-- Botón de inicio de sesión -->
            <div class="col-auto">
                <a class="btn btn-iniciar-sesion" href="{{ route('login') }}">Iniciar Sesión</a>
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-success-light ">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-custom">
                    <li class="nav-item">
                        <a class="nav-link" href="#">PQRS</a>
                    </li>
<!--  menú desplegable -->
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorías
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                            <a class="dropdown-item" href="#">Orgánicos</a>
                            <a class="dropdown-item" href="#">Inorgánicos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Compras
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                            <a class="dropdown-item" href="#">carrito de Compras</a>
                         
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contactenos</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<br>

<div class="container-fluid">
    <div class="row">
        <!-- Columna izquierda con la imagen -->
        <div class="col-lg-6 p-0">
            <img src="{{ asset('img/verduras.jpg') }}" alt="Imagen" class="img-fluid">
        </div>
        <!-- Columna derecha con el formulario -->
        <div class="col-lg-6 bg-light">
            <div class="container py-5">
                <h1>Formulario de PQRS</h1>
                <form action="procesar_pqrs.php" method="post">
                    <label for="tipo">Tipo de PQRS:</label>
                  
                    <select id="tipo" name="tipo">
                        <option value="peticion">Petición</option>
                        <option value="queja">Queja</option>
                        <option value="reclamo">Reclamo</option>
                        <option value="sugerencia">Sugerencia</option>
                    </select><br>
                    <label for="mensaje">Mensaje:</label><br>
                    <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea><br>
                    <input type="submit" value="Enviar PQRS">
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


  
</body>
</html>