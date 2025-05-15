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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Fuente de BOOSTRAP 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">


        <!-- Links de estilos -->
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">


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

        <div class="container-fluid d-flex justify-content-center align-items-center" id="container-inicio">

            <img id="img-logo-1" src="img/logos-botones/5.png" class="" alt="Imagen-portada-empresa">
  
        
        <!--inicio de animacion portada -->
        

        <svg class="editorial"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 "
            preserveAspectRatio="none">
            <defs>
            <path id="gentle-wave"
            d="M-160 44c30 0 
                68-18 88-18s
                68 18 88 18 
                68-18 188-18 
                68 18 188 18
                v44h-352z" />
            </defs>
        <g class="parallax1">
        <use xlink:href="#gentle-wave" x="50" y="3" fill="#857566"/> 
        </g>
            <g class="parallax2">
        <use xlink:href="#gentle-wave" x="50" y="0" fill="#bcbcc4"/> amarilo
            </g>
            <g class="parallax3">
        <use xlink:href="#gentle-wave" x="50" y="9" fill="#fffefe"/> AZUL
        </g>
            <g class="parallax4">
        <use xlink:href="#gentle-wave" x="50" y="56" fill="#dddddd"/>  morado
        </g>
        </svg>

        <!--fin de animacion portada -->

        </div>


    <div id="container_1" class="mx-auto col-md-8 col-lg-6 order-lg-last">

            <div class="text-align-left" id="contenedor-texto-1">

                <h1 id="txt_titulo" class="h1">COOTRAGAL</h1>

            </div>

            <div class="text-align-left" id="contenedor-texto-2">

                <h3 id="txt_subtitulo" class="h2">Cooperativa De Transportadores De Galapa.</h3>
            </div>


    </div>
   

    <div class="container text-center mt-4" id="container-operaciones">
     <div class="row g-4">
             <div class="col-6 col-md-6 col-lg-3">
                <button class="btn w-100 p-2 d-flex flex-column align-items-center" id="btn-operaciones">
                    <h4>¿Quiénes somos?</h4>
                    <img src="img/logos-botones/1.gif" class="img-fluid" id="img-logo-operaciones" alt="Logo 1">
                    <div class="btn btn-secondary mt-2">Ver más</div>
                </button>
            </div>


            <div class="col-6 col-md-6 col-lg-3">
                <button class="btn w-100 p-2 d-flex flex-column align-items-center" id="btn-operaciones">
                    <h4>La Cooperativa</h4>
                    <img src="img/logos-botones/2.gif" class="img-fluid"  id="img-logo-operaciones" alt="La Cooperativa">
                    <div class="btn btn-secondary mt-2">Ver más</div>
                </button>
            </div>

            <div class="col-6 col-md-6 col-lg-3">
                <button class="btn w-100 p-2 d-flex flex-column align-items-center" id="btn-operaciones">
                    <h4>Operaciones</h4>
                    <img src="img/logos-botones/3.gif" class="img-fluid" id="img-logo-operaciones" alt="Operaciones">
                    <div class="btn btn-secondary mt-2">Ver más</div>
                </button>
            </div>

            <div class="col-6 col-md-6 col-lg-3">
                <button class="btn w-100 p-2 d-flex flex-column align-items-center" id="btn-operaciones">
                    <h4>Contrato</h4>
                    <img src="img/logos-botones/4.gif" class="img-fluid"  id="img-logo-operaciones" alt="Contrato">
                    <div class="btn btn-secondary mt-2">Ver más</div>
                </button>
            </div>
        </div>
    </div>


<!-- ARREGLO DE DIV -->
<div class="container-fluid" id="container-servicios-1">
    <div class="container text-center py-5" id="container-servicios">
        <div class="row">
            <div class="col-md-6">
                <div class="container" id="txt-servicios">
                    <h2 class="fw-bold">Servicios</h2>
                    <p class="lead">
                        Nuestra empresa cuenta con una gama de servicios diseñados para ofrecer un transporte público de 
                        calidad y confiable. Nos enfocamos en garantizar la puntualidad, la seguridad y la comodidad de 
                        nuestros usuarios en todo momento. Además, estamos comprometidos con la innovación y la mejora 
                        continua, utilizando tecnologías avanzadas y vehículos modernos para asegurar que cada viaje sea 
                        una experiencia positiva.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="row justify-content-center gap-1 mt-3" id="row-btn-servicios">
                    <!-- Servicio 1 -->
                    <div class="col-3 col-sm-4 col-md-6 col-lg-3">
                        <button class="btn w-100 p-2 d-flex flex-column align-items-center" id="btn-servicios">
                            <img src="img/logos-botones/6.png" id="img-logo-servicios" class="img-fluid" alt="Viajes Expreso">
                            <h5>Viajes Expreso</h5>
                            <div class="btn btn-secondary mt-2">Ver más</div>
                        </button>
                    </div>
                    <!-- Servicio 2 -->
                    <div class="col-3 col-sm-4 col-md-6 col-lg-3">
                        <button class="btn w-100 p-2 d-flex flex-column align-items-center" id="btn-servicios">
                            <img src="img/logos-botones/7.png" id="img-logo-servicios" class="img-fluid" alt="Rutas activas">
                            <h5>Rutas activas</h5>
                            <div class="btn btn-secondary mt-2">Ver más</div>
                        </button>
                    </div>
                    <!-- Servicio 3 -->
                    <div class="col-3 col-sm-4 col-md-6 col-lg-3">
                        <button class="btn w-100 p-2 d-flex flex-column align-items-center" id="btn-servicios">
                            <img src="img/logos-botones/8.png" id="img-logo-servicios" class="img-fluid" alt="Estación de servicio">
                            <h5>Estación de servicio</h5>
                            <div class="btn btn-secondary mt-2">Ver más</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  

    <!-- DIV CARRUSEL START -->

<div class="container-fluid">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- Carousel content -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner/3.jpg" id="img-carrusel-1" class="img-fluid" alt="">
                <div class="text-center p-4" id="carrusel-comentario-gerente">
                    <h4>"Contamos con un equipo de conductores altamente capacitados, comprometidos con su seguridad y 
                        bienestar. Asegurando un transporte confiable, cómodo y seguro para ustedes. ¡Gracias por confiar en nosotros!"</h4>
                    <h5><strong>Amin Nazzer. Gerente.</strong></h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/banner/4.jpg" id="img-carrusel-2" class="img-fluid" alt="">
                <div class="text-center p-4" id="carrusel-comentario-conductor-1">
                    <h4>"Con más de 13 años al volante, puedo afirmar que ofrecemos un servicio de transporte seguro 
                        y confiable, siempre comprometidos con la excelencia."</h4>
                    <h5><strong>Félix Gutiérrez, Conductor.</strong></h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/banner/5.jpg" id="img-carrusel-2" class="img-fluid" alt="">
                <div class="text-center p-4" id="carrusel-comentario-conductor-1">
                    <h4>"Gracias al respaldo de la cooperativa, he podido crecer como conductor y mejorar 
                        constantemente para brindar el mejor servicio a nuestros pasajeros. Mi 
                        compromiso es garantizar un viaje seguro, cómodo y confiable para quienes confían 
                        en nosotros."</h4>
                    <h5><strong>Robinson Jr. Ojeda. Conductor.</strong></h5>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</div>


        <!-- DIV CARRUSEL END -->

        <!-- INICIO CONTACTENOS-->

<br>
        <div class="" id="container-contacto">
        </div>
             <!-- INICIO DIV CONTACTENOS-->

                <div class="" id="div-contactenos">
                        <h1 id="">Contáctenos</h1>
                    </div>

                <div id="contenedor-informacion">
                    <div class="" id="div-direccion">
                        <h3 id="">Dirección</h3> 
                        <br>           
                        <h6>Calle 6 N° 22 - 09</h6>
                        <h6>Galapa - Atlantico</h6>
                    </div>

                    <div class="" id="div-telefono">
                        <h3>Teléfono</h3>
                        <br>    
                        <h6>(605)3177980</h6>
                        <h6>cootragal_1980@hotmail.com</h6>
                    </div>

                    <div class="" id="div-horario">
                        <h3>Horario de atención al cliente</h3>
                        <br>    
                        <h6>Lunes - Vie 08:00 am - 03:00 pm</h6>
                        <h6>Sabado 08:30 am - 11:30 am</h6>
                    </div>

                </div>

                    <!-- FIN DIV CONTACTENOS-->
            
                <br>
                <br>


            <div id="maps">
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                    var setting = {"query":"COOTRAGAL, Calle 6, Galapa, Atlántico, Colombia","width":916,"height":417,"satellite":false,"zoom":19,"placeId":"ChIJX4gU7sfV9Y4RcU4SOaSh8As","cid":"0xbf0a1a439124e71","coords":[10.9042314,-74.8828245],"cityUrl":"/colombia/barranquilla-15076","cityAnchorText":"Map of Barranquilla (Atlantico), Atlántico, Colombia","lang":"es-es","queryString":"COOTRAGAL, Calle 6, Galapa, Atlántico, Colombia","centerCoord":[10.9042314,-74.8828245],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1206601"};
                    var d = document;
                    var s = d.createElement('script');
                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=1206601';
                    s.async = true;
                    s.onload = function (e) {
                    window.OneMap.initMap(setting)
                    };
                    var to = d.getElementsByTagName('script')[0];
                    to.parentNode.insertBefore(s, to);
                })();</script></div>
            </div>
            <br>

            
       <!-- FIN CONTACTENOS-->

       
    </body>
</html>
