<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
   

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

</div>
<div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
    <div class="col-lg-4">
        <a href="" class="text-decoration-none">
            <span class="h1 text-uppercase text-primary bg-dark px-2">fruti</span>
            <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">vegetal</span>
        </a>
    </div>
    <div class="col-lg-4 col-6 text-left">
        <form action="">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for products">
                <div class="input-group-append">
                    <span class="input-group-text bg-transparent text-primary">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
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
                <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
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










<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">inorganicos</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">

                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/papaya.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">1 libra</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$4.000</h5><h6 class="text-muted ml-2"><del>$4.000</del></h6>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/brocoli.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">lechuga</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$5000</h5><h6 class="text-muted ml-2"><del>$5000</del></h6>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/zanahoria.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">libra</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$10000</h5><h6 class="text-muted ml-2"><del>$10000</del></h6>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/zapote.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">ajos</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$1000</h5><h6 class="text-muted ml-2"><del>$1000</del></h6>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/pepino.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                       
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">libra</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$3000</h5><h6 class="text-muted ml-2"><del>$3000</del></h6>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/mango.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                  
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">libra</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$5000</h5><h6 class="text-muted ml-2"><del>$5000</del></h6>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/papas.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">libra</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$1000</h5><h6 class="text-muted ml-2"><del>$1000</del></h6>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/naranja-1.jpg" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                       
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">libras</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$8000</h5><h6 class="text-muted ml-2"><del>$8000</del></h6>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>