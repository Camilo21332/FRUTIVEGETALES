<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de PQRS</title>
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link  rel="stylesheet" href="{{asset('css/index.css')}}" >
</head>

<body>
  <!-- Topbar Start -->
  <!-- menu superior-->
  <div class="container-fluid">
      <div class="row bg-secondary py-1 px-xl-5">
          <div class="col-lg-6 d-none d-lg-block">
              <div class="d-inline-flex align-items-center h-100">
               
                  
              </div>
          </div>
     
          <!-- parte del nombre aplicacion-->
      </div>
      <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
          <div class="col-lg-4">
              <a href="" class="text-decoration-none">
                  <span class="h1 text-uppercase text-primary bg-dark px-2">fruti</span>
                  <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">vegetal</span>
              </a>
     
              </form>


              <!--nombre de la clase que da estilos a la aplicacion-->
          </div>
          <div class="col-lg-4 col-6 text-right">
          
          </div>
      </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid bg-dark mb-30">
      <div class="row px-xl-5">
          <div class="col-lg-3 d-none d-lg-block">
              <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                  <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                  <i class="fa fa-angle-down text-dark"></i>
              </a>
              <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                  <div class="navbar-nav w-100">
                      <div class="nav-item dropdown dropright">
             <!--categorias -->
                         
                      </div>
                      <a href="{{route('organico')}}" class="nav-item nav-link">organicos</a>
                      <a href="{{route('inorganico')}} " class="nav-item nav-link">inorganicos</a>
                   
                  </div>
              </nav>
          </div>
          <div class="col-lg-9">
              <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                  <a href="" class="text-decoration-none d-block d-lg-none">
                      <span class="h1 text-uppercase text-dark bg-light px-2">fruti</span>
                      <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">vegetal</span>
                  </a>
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                     <!--barra de opciones-->
                      <div class="navbar-nav mr-auto py-0">
                          <a href="{{route('index')}}" class="nav-item nav-link active">inicio</a>
                          <a href="{{route('pqrs')}}" class="nav-item nav-link">pqrs</a>
                         
                          <div class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">compras <i class="fa fa-angle-down mt-1"></i></a>
                              <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                  <a href="{{route('cart')}}" class="dropdown-item">carrito de compras</a>
                               
                              </div>
                          </div>

                          <a href="{{route('contact')}}" class="nav-item nav-link">Contactenos</a>

                       

                      </div>

                      
                      <!-- carrito y corazon -->
               
                      <!---->
                  </div>
              </nav>
          </div>
      </div>
  </div>

  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    h1 {
        text-align: center;
        color: #333;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    select, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
    }
    input[type="submit"] {
        background-color: #f6fc53;
        color: #060606;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        font-size: 18px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #ffff9f;
    }
</style>
</head>
<body>
 
    <h1>Formulario de PQRS</h1>
    <form action="{{ route('pqrs.store') }}" method="post">
        @csrf
    
        <label for="tipo">Tipo de PQRS:</label>
        <select id="tipo" name="tipo">
            <option value="peticion">Petición</option>
            <option value="queja">Queja</option>
            <option value="reclamo">Reclamo</option>
            <option value="sugerencia">Sugerencia</option>
        </select><br><br>
    
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="motivo" rows="4" cols="50" required></textarea><br><br>


        <select name="user_id">
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}"> {{ $usuario->id }} {{ $usuario->nombres }}</option>
            @endforeach
        </select>
    
        <input type="submit" value="Enviar PQRS">
    </form>
  
    

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