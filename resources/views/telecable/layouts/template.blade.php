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
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <!--para el icono Del formulario de ayuda-->

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

    {{-- icono de correo para abrir el formulario de ayuda --}}
    <div class="helpform">
        <ul>
            <li><a href="" data-toggle="modal" data-target="#exampleModalCenter" class="icon-mail4 img-responsive" ></a></li>
        </ul>
    </div>
    {{-- fin de icono de correo --}}

    {{--formulario de ayuda --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">¿En que podemos ayudarte?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- este es el contenido de el formulario --}}
                    <form>
                        <div class="form-group">
                            <div class="form-row">
                                <!-- para colocar nombre y numero-->
                                <div class="col">
                                    <label for="nombre">*Nombre </label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                                </div>
                                <div class="col">
                                    <label for="telefono">Numero Telefonico </label>
                                    <input type="text" class="form-control" id="telefono"
                                        placeholder="Numero Telefonico">
                                </div>
                            </div><br><!-- fin para colocar nombre y numero-->
                            <label for="exampleInputEmail1">*Correo Electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Correo Electronico">

                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">*Mensaje:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        {{-- mensaje --}}
                        <small class="form-text text-muted"> Todos los campos marcados son Obligatorios, Su informacion
                            no
                            sera conpartida.</small>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    {{-- fin de formulario de ayda --}}
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
