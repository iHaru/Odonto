<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    </head>
    <body>
        <header class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light navlight">
                <a class="navbar-brand" href="/" style="display: ''">
                    <img src="{!! asset('img/logo.png') !!}" width="180" height="60" class="d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/clinica">CLÍNICA</a>
                        </li>
                        <li class="nav-item">

                            <!-- MOBILE DEVICE -->

                            <a class="nav-link d-block d-sm-none" href="/servicos">SERVIÇOS</a>
                            <ol style="list-style-type:disc" class="d-block d-sm-none">
                                <li class="nav-item">
                                    <a class="nav-link" href="/servicos">LIMPEZA</a>
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link" href="/servicos">RESTAURAÇÃO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/servicos">CIRURGIA</a>
                                </li>
                            </ol>

                            <!-- DESKTOP -->

                            <a class="nav-link dropdown-toggle d-none d-sm-block" href="" id="dropdownServicos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVIÇOS
                            </a>
                            <div class="dropdown-menu navlight" aria-labelledby="dropdownServicos" style="left: auto">
                                <a class="dropdown-item" href="/servicos">LIMPEZA</a>
                                <a class="dropdown-item" href="/servicos">RESTAURAÇÃO</a>
                                <a class="dropdown-item" href="/servicos">CIRURGIA</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/galeria">GALERIA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contato">CONTATO</a>
                        </li>
                    </ul>

                    <div style="float:right">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a href="" class="nav-link fa fa-facebook"></a>
                            </li>

                            <li class="nav-item">
                                <a href="" class="nav-link fa fa-twitter"></a>
                            </li>

                            <li class="nav-item">
                                <a href="" class="nav-link fa fa-instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <hr style="border:2px solid orange; margin:0px">


        </header>

        <br>
