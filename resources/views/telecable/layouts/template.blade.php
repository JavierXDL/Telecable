<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--favicon-->
    <!--styles-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,500;1,300&display=swap');
        /*para la caberzera*/
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap');
        /* Roboto mino para letras mas grandes */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap');
        /*para texto normal*/

    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    {{-- link de tipografia --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Poppins:ital,wght@1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">


</head>

<body>
    <!--header-->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">

        <a class="navbar-brand mr-5" href="{{ url('/') }} ">
            <h1>Telecable Bacalar</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link ml-2" href="#">
                    <h3>Cobertura</h3>
                </a>
                <a class="nav-item nav-link ml-2" href="#">
                    <h3>Sobre Nosotros</h3>
                </a>
                <a class="nav-item nav-link ml-2" href="#">
                    <h3>Sucursales</h3>
                </a>
                <a class="nav-item nav-link ml-2" href="#">
                    <h3>Reportar Fallo</h3>
                </a>
                <a class="nav-item nav-link ml-2" href="{{ url('listaCanales/') }} ">
                    <h3>Canales</h3>
                </a>
                <a class="nav-item nav-link ml-2" href="#">
                    <h3>Ayuda</h3>
                </a>

            </div>
        </div>
        <div class="nav justify-content-end navbar-nav ">
            <a class="navbar-brand" href="tel:+52983 834 2507">
                <h3>Llámanos al</h3>
                <h2> 983 834 2507</h2>
            </a>
        </div>
    </nav>
    <!--headerEnd-->

    <!--nav-->

    <!--content-->
    @yield('content')
    <!--contentEnd-->

    <!--footer-->
    <footer style="
                    margin-top: 3rem;">
        <!-- Copyright -->
        <div class="pie-pagina">
            <a href="#">
                <img class="pie-img" src="{{ asset('assets/img/facebook.png') }}">
            </a>
            <p class="derechos"> © 2021 Copyright: Telecable Bacalar S.A de C.V | Todos los derechos
                reservados |
                Avisos legales | Cláusulas de contratación </p>
        </div>
    </footer>
    <!--End footer-->
    <!--script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!--CDN Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="
                    stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!--CDN BootstrapEnd-->
</body>

</html>
