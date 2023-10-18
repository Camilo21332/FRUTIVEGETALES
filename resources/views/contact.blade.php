<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contactenos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
     <link href="{{ asset('css/inicio2.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
     <link href="{{ asset('css/contac2.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio3.css') }}" rel="stylesheet">
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
            <div class="col-auto">
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-success-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-custom">
                   
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorías
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                            <a class="dropdown-item" href="{{route('inorganico')}}">Inorgánicos</a>
                            <a class="dropdown-item" href="{{route('organico')}}">Orgánicos</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pqrs.create')}}">PQRS</a>
                    </li>
                </ul>
                

            </div>
        </div>
    </nav>
    <br>
<body>
   <!-- Contact Start -->
   <div class="container-fluid">
    <div class="row">
        <!-- Imagen a la izquierda -->
        <div class="col-lg-5">
            <img src="{{ asset('img/verduras.jpg') }}" alt="Imagen de contacto" class="img-fluid">
        </div>
        <!-- Formulario a la derecha -->
        <div class="col-lg-7">
            <div class="contact-form bg-light p-5">
                <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"></span></h2>
                <h2 class="text-uppercase mx-xl-5 mb-4 custom-title">Déjanos tus datos</h2>
                <div id="success"></div>
                <form name="contactForm" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control " id="name" placeholder="Nombre" required="required" data-validation-required-message="Por favor, ingrese su nombre" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control " id="phone" placeholder="Teléfono" required="required" data-validation-required-message="Por favor, ingrese su teléfono" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="number" class="form-control " id="age" placeholder="Edad" required="required" data-validation-required-message="Por favor, ingrese su edad" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control " id="email" placeholder="Correo Electrónico" required="required" data-validation-required-message="Por favor, ingrese su correo electrónico" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control " rows="8" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Por favor, ingrese su mensaje"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

    <!-- Agrega tus scripts JavaScript si es necesario -->

</body>
</html>
<br>
<footer>
  
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="wave">
        <path fill="#35ea35" fill-opacity="1" d="M0,224L26.7,218.7C53.3,213,107,203,160,213.3C213.3,224,267,256,320,261.3C373.3,267,427,245,480,218.7C533.3,192,587,160,640,170.7C693.3,181,747,235,800,245.3C853.3,256,907,224,960,192C1013.3,160,1067,128,1120,128C1173.3,128,1227,160,1280,170.7C1333.3,181,1387,171,1413,165.3L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
        <image href="{{ asset('img/logoofi2.png') }}" x="20" y="80" width="300" height="90" />
        <text x="300" y="120" font-size="30" font-weight="bold" fill="#000"> Descárgate nuestra app</text>
        <a href="#" x="500" y="120" style="text-decoration: none;">
            <rect x="750" y="100" rx="10" ry="10" width="170" height="50" style="fill:#fcf8f8ea;" />
            <text x="830" y="130" font-size="20" fill="#060606" text-anchor="middle">Descargar ahora</text>
        </a>
    </svg>

    <div class="social-icons">
       
        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
        <a href="#" class="social-icon">
            <img src="{{ asset('img/twitter.jpg') }}" alt="Twitter" class="social-icon-img">
        </a>
        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
    </div>

   <!-- Agrega la imagen "playstore.png" al frente y en la misma línea de los iconos -->
   <img src="{{ asset('img/playstore.png') }}" alt="Play Store" class="playstore-icon">

   <!-- Línea divisoria -->
   <hr class="footer-divider">

   <!-- Enlaces de políticas y logo con versión en la misma línea -->
   <div class="footer-links">
       <a href="#">Política de Privacidad</a>
       <a href="#">Términos y Condiciones</a>
       <a href="#">Protección  Datos Personales</a>
       <img src="{{ asset('img/logoofi.png') }}" alt="Logo Versión" class="footer-logo">
       <span class="version">2023 frutivegetal</span>
    </div>

</footer>


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

</html>