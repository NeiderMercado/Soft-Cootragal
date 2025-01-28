<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SOFT-COOTRAGAL</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="css/style-barra.css">
        <script src="resources\js\js-barra-navegacion-lateral.js"></script>

        <!-- Liobreria de Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Fuente de BOOSTRAP 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">



        <style>


                #div-logo{
                    align: left;

                    color: red;
                    border-color: red;
                   
                }

                #logo{
                    height: 100%;
                    width: 50%;
                    margin-left: 5%;
                    margin-top: -1%;
                }

                #div_botones{
                    text-align: center;
                }

                #btn-login{
                    margin-left: 8%
                }

                #mynavbar{
                    margin-left: 35%

                }

                #toggler-responsive{
                    margin-left: 73%;
                    margin-top: -15%;

                }



                #div_presentacion{
                    position: absolute;
                    margin-top: 19%;
                    margin-left: 5%;
                    color: white;
                }



                #txt_subtitulo{
                    color: white;
                    font-size: 30px;
                    margin-top: -10px;
                }


                #img-portada{
                    width: 102%;
                    height: 100%;
                    margin-left: center;
                }




            @media (max-width: 600px) { 

                #img-portada{
                    width: 450%;
                    height: 100%;
                    margin-left: -250%;
                    opacity: 0.8;
                }
                #contenedor-texto-1{
                    background-color: ;
                    margin-top: -90%;
                    margin-left: 5%;
                    width: auto;
                } 

                #txt_titulo{
                    font-size: 10vw;
                    color: white;
                    font-family: cooper hewitt heavy;
                    font-weight: 900; 
                   
                }

                #contenedor-texto-3{
                    background-color: ;
                    margin-top: -30%;
                    margin-left: -95%;
                                        
                }

                #logo-potada-text{
                    width: 25%;
                    margin-top: -70%;
                    margin-left: 60%;
                    

                }
                #contenedor-texto-2 { 
                    font-size: 1vw; /* Ajusta el tamaño del texto para pantallas pequeñas */ 
                } 
            } 
            @media (min-width: 601px) and (max-width: 1200px) { 
                #contenedor-texto-1{
                    background-color: ;
                    margin-top: -50%;
                    margin-left: -20%;
                    width: auto;
                } 

                #txt_titulo{
                    font-size: 4vw;
                    color: white;
                    font-family: cooper hewitt heavy;
                    font-weight: 900; 
                   
                }

                #contenedor-texto-3{
                    background-color: ;
                    margin-top: -30%;
                    margin-left: -95%;
                                        
                }

                #logo-potada-text{
                    width: 15%;
                    margin-left: 23%;
                    margin-top: -3%;

                }

                #contenedor-texto-2 { 
                    font-size: 1vw; /* Ajusta el tamaño del texto para pantallas medianas */ 
                } 
            } 


            @media (min-width: 1201px) { 
                #contenedor-texto-1{
                    background-color: ;
                    margin-top: -50%;
                    margin-left: -20%;
                    width: auto;
                } 

                #txt_titulo{
                    font-size: 4vw;
                    color: white;
                    font-family: cooper hewitt heavy;
                    font-weight: 900; 
                   
                }

                #contenedor-texto-2 { 
                    font-size: 2vw; /* Ajusta el tamaño del texto para pantallas grandes */ 
                    background-color: ;
                    margin-left: -20%;

                }
                
                #contenedor-texto-3{
                    background-color: ;
                    margin-top: -30%;
                    margin-left: -95%;
                                        
                }

                #logo-potada-text{
                    width: 15%;
                    margin-left: 23%;
                    margin-top: -3%;

                }
            }


                
        </style>
    </head>
    <body class="antialiased">              

        
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="nav-link" href="javascript:void(0)"><img id="logo" src="img\logo-coogal-2.2.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" id="toggler-responsive">
            <span class="navbar-toggler-icon"></span>
            Menú
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li>
                
                </li> 
                <li>
                <a class="nav-link" href="javascript:void(0)"></a>
                </li>
                <li>
                <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Servicios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">¿Quienes somos?</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Contacto</a>
                </li>
           
            <form class="d-flex">
            @if (Route::has('login'))

                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-secondary font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Panel de inicio</a>
                @else
                
                <li>
                    <a id="btn-login" href="{{ route('login') }}" class="btn btn-primary font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ingresar</a>
                </li>
                    @if (Route::has('register'))
                <!--  
                <a id="btn-registro" href="{{ route('register') }}" class="btn btn-success ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registro</a>-->
                    @endif
                @endauth
                </ul>
                @endif
            </form>
            </div>
        </div>
        </nav>
        <br><br><br>

  <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            
            <div class="carousel-item active" id="carusel">
             <img id="img-portada" class="" src="\img\banner-bienvenida-pal-2.png"> 
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">

                            <div class="text-align-left" id="contenedor-texto-1">

                                    <h1 id="txt_titulo" class="h1">COOTRAGAL</h1>

                            </div>

                            <div class="text-align-left" id="contenedor-texto-2">

                                    <h3 id="txt_subtitulo" class="h2">Cooperativa De Transportadores De Galapa.</h3>
                            </div>

                            <div class="text-align-left" id="contenedor-texto-3">
                                    <img id="logo-potada-text" src="\img\logo-coogal-2.0.png" alt="">
       
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="public\img\banner-bienvenida-pal.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites. 
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->
     


                     
    </body>
</html>
