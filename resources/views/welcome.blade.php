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

                #img-portada{
                    width: 100%;
                    height: 60%;

                }

                #div_presentacion{
                    position: absolute;
                    margin-top: 19%;
                    margin-left: 5%;
                    color: white;
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
            <div id="div_presentacion">
                
                <h1 id="txt_titulo">COOTRAGAL</h1>
                <h2 id="txt_titulo">Cooperativa De Transportadores De Galapa</h2>
                <h5>43 años al servicio de la comunidad, CRECIENDO JUNTOS</h5>

            </div>
               <img id="img-portada" src="img\portada-empresa-slider.png" alt="">

                     
    </body>
</html>