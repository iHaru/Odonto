@extends('layout.site')

@section('titulo', 'Odonto')
@section('conteudo')
    <div class="container">

        <div id="carouselHeader" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{!! asset('img/img_01.jpeg') !!}" class="d-block w-100 img-fluid item img-thumbnail" alt="...">
                    <div class="carousel-content img01" style="background-color: rgba(66, 211, 195, 0.3);">
                        <p style="margin-bottom: 0">
                            <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 3915-3124</span>
                        </p>
                        <p style="margin-bottom: 0">
                            <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 97588-0526</span>
                        </p>
                        <a href="/contato">
                            <button type="button" class="btn btn-info" style="margin: 5px">AGENDE UM HORÁRIO</button>
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{!! asset('img/img_02.jpeg') !!}" class="d-block w-100 img-fluid item img-thumbnail" alt="...">
                    <div class="carousel-content img02" style="background-color: rgba(66, 211, 195, 0.3);">
                        <p style="margin-bottom: 0">
                            <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 3915-3124</span>
                        </p>
                        <p style="margin-bottom: 0">
                            <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 97588-0526</span>
                        </p>
                        <a href="/contato">
                            <button type="button" class="btn btn-info" style="margin: 5px">AGENDE UM HORÁRIO</button>
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{!! asset('img/img_03.jpg') !!}" class="d-block w-100 img-fluid item img-thumbnail" alt="...">
                    <div class="carousel-content img03" style="background-color: rgba(66, 211, 195, 0.3);">
                        <p style="margin-bottom: 0">
                            <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 3915-3124</span>
                        </p>
                        <p style="margin-bottom: 0">
                            <i class="fa fa-phone"></i><span style="font-size: 20px">(11) 97588-0526</span>
                        </p>
                        <a href="/contato">
                            <button type="button" class="btn btn-info" style="margin: 5px">AGENDE UM HORÁRIO</button>
                        </a>
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

        <br><br>

        <div class="card bg-info">
            <div class="card-header text-uppercase text-white"><h4><b>Equipe</b></h4></div>
            <div class="card-body">
                <div class="card-deck">
                    <div class="card">
                        <img src="{!! asset('img/img_01.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed rhoncus lectus. Nunc ac tellus nec orci efficitur consequat vitae at ligula. Ut blandit velit sed urna aliquam, ut mollis magna eleifend. Mauris ac iaculis nibh. Etiam et feugiat erat. Praesent sed tellus gravida, vulputate enim posuere, finibus leo. Duis nisl ex, mattis ut sem vel, dignissim ullamcorper nibh. Nullam posuere dignissim orci, sed malesuada odio finibus sed.
                            </p>
                        </div>
                    </div>
                    <div class="w-100 d-none d-md-block d-lg-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>
                    <div class="w-100 d-none d-sm-block d-md-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>
                    <div class="card">
                        <img src="{!! asset('img/img_02.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Curabitur placerat auctor felis id tempus. Donec ullamcorper sit amet augue non varius. Sed at ante nisl. Aenean in tellus ut ligula feugiat vestibulum. Duis a malesuada lacus. Sed tristique posuere libero quis viverra. Proin eleifend eros ac consectetur viverra. Sed congue leo augue, vitae ornare sapien tincidunt sit amet. Praesent non metus arcu. Cras pretium justo eu libero suscipit rutrum.
                            </p>
                        </div>
                    </div>
                    <div class="w-100 d-none d-sm-block d-md-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>
                    <div class="card">
                        <img src="{!! asset('img/img_03.jpg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Vivamus vel ante orci. Duis hendrerit mi non semper euismod. Aenean eget mi nulla. Proin condimentum ante est, ac fermentum justo eleifend ut. Pellentesque massa mauris, molestie vel tincidunt a, commodo vitae nisi. Suspendisse ornare nulla in dui dictum, in imperdiet elit tristique. Nullam suscipit rutrum metus id eleifend. Ut vitae diam odio. Etiam tristique velit quis neque consequat venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis auctor imperdiet venenatis. Nullam ut aliquam eros. Nunc felis neque, consectetur non diam ut, pellentesque fringilla enim. Nullam egestas nulla at pulvinar tincidunt.
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <a href="/clinica">
                        <button type="button" class="btn btn-primary" style="margin: 5px">Conheça nossa clínica</button>
                    </a>
                </div>
            </div>
        </div>

        <br>

        <div class="card bg-info">
            <div class="card-header text-uppercase text-white"><h4>Nossos <b>serviços</b></h4></div>
            <div class="card-body">
                <div class="card-title">
                    <h5 style="font-size: 15px;" class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed rhoncus lectus. Nunc ac tellus nec orci efficitur consequat vitae at ligula. Ut blandit velit sed urna aliquam, ut mollis magna eleifend. Mauris ac iaculis nibh. Etiam et feugiat erat. Praesent sed tellus gravida, vulputate enim posuere, finibus leo. Duis nisl ex, mattis ut sem vel, dignissim ullamcorper nibh. Nullam posuere dignissim orci, sed malesuada odio finibus sed.</h5>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <img src="{!! asset('img/img_01.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Limpeza</h5>
                        </div>
                    </div>
                    <div class="w-100 d-none d-sm-block d-md-block d-lg-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>
                    <div class="card">
                        <img src="{!! asset('img/img_02.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Restauração</h5>
                        </div>
                    </div>
                    <div class="w-100 d-none d-sm-block d-md-block d-lg-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>
                    <div class="card">
                        <img src="{!! asset('img/img_03.jpg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cirurgia</h5>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <a href="/servicos"><button type="button" class="btn btn-primary">Conheça nossos serviços</button></a>
                </div>
            </div>
        </div>

        <br>

        <h4 class="text-uppercase"><b>Galeria</b></h4>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{!! asset('img/img_01.jpeg') !!}" class="d-block w-100 img-fluid item img-thumbnail" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{!! asset('img/img_02.jpeg') !!}" class="d-block w-100 img-fluid item img-thumbnail" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{!! asset('img/img_03.jpg') !!}" class="d-block w-100 img-fluid item img-thumbnail" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <div class="row justify-content-center">
            <a href="/galeria">
                <button type="button" class="btn btn-primary">Ver todas as fotos</button>
            </a>
        </div>

        <br>
    </div>

    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-6">
                @include('layout.extends._form')
            </div>
            <div class="col-md-6" style="margin-top: 5px">
                @include('layout.extends._maps')
            </div>
        </div>
    </div>
    <br>
@endsection
