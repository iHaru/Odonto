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

        <!-- Styles -->
        <style>
            .fa {
                margin: 2px;
                width: 30px;
                padding: 5px;
                font-size: 20px;
                text-align: center;
                text-decoration: none;
            }
            .fa-facebook {
                background: #3B5998;
                color: white;
            }

            .fa-twitter {
                background: #55ACEE;
                color: white;
            }

            .fa-instagram {
                background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
                background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
                background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
                color: white;
            }

            .icon-form {
                margin: 0;
            }

            .carousel .item {
              height: 300px;
            }

            .item img {
                position: absolute;
                top: 0;
                left: 0;
                min-height: 300px;
            }

            .carousel-content {
              position: absolute;
              bottom: 5%;
              left: 5%;
              z-index: 20;
              color: white;
              text-shadow: 0 1px 2px rgba(0,0,0,.6);
            }

            .img01 {
                background-color: rgba(66, 211, 195, 0.3);
                top: 0;
                color: black;
                bottom: unset;
                border-radius: 15%;
            }

            .img02 {
                background-color: rgba(66, 211, 195, 0.3);
                right: 0;
                bottom: 0;
                color: black;
                left: unset;
            }

            .img03 {

            }
        </style>
    </head>
    <body>
        <header>
            <div class="container-fluid" style="background-color:aliceblue">
                <div id="carouselHeader" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{!! asset('img/img_01.jpeg') !!}" class="d-block w-100 img-fluid item" alt="...">
                            <div class="carousel-content img01" style="background-color: rgba(66, 211, 195, 0.3);">
                                <p style="margin-bottom: 0">
                                    <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 3915-3124</span>
                                </p>
                                <p style="margin-bottom: 0">
                                    <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 97588-0526</span>
                                </p>
                                <button type="button" class="btn btn-info" style="margin: 5px">Agende um horário</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{!! asset('img/img_02.jpeg') !!}" class="d-block w-100 img-fluid item" alt="...">
                            <div class="carousel-content img02" style="background-color: rgba(66, 211, 195, 0.3);">
                                <p style="margin-bottom: 0">
                                    <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 3915-3124</span>
                                </p>
                                <p style="margin-bottom: 0">
                                    <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 97588-0526</span>
                                </p>
                                <button type="button" class="btn btn-info" style="margin: 5px">Agende um horário</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{!! asset('img/img_03.jpg') !!}" class="d-block w-100 img-fluid item" alt="...">
                            <div class="carousel-content img03" style="background-color: rgba(66, 211, 195, 0.3);">
                                <p style="margin-bottom: 0">
                                    <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 3915-3124</span>
                                </p>
                                <p style="margin-bottom: 0">
                                    <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 97588-0526</span>
                                </p>
                                <button type="button" class="btn btn-info" style="margin: 5px">Agende um horário</button>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselHeader" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselHeader" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                {{-- <div class="container" style="width:80%">
                    <div class="container" style="height:200px; width:80%; padding:5px" align="center">
                        <img src="{!! asset('img/header.jpeg') !!}" alt="Logo dentista" width="200px">
                        <button type="button" class="btn btn-info" style="margin: 5px">Agende um horário</button>
                    </div>

                    <div align="center">
                        <p>
                            <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 3915-3124</span>
                        </p>
                    </div>

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
                    <br>
                </div>
            </div> --}}
            <hr style="border:2px solid orange; margin:0px">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços</a>
                            <ol style="list-style-type:disc">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Limpeza</a>
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link" href="#">Restauração</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Cirurgia</a>
                                </li>
                            </ol>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>

