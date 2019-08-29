@extends('layout.site')

@section('titulo', 'Odonto')
@section('conteudo')
    <div class="container">
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

                    <div class="w-100 d-none d-sm-block d-md-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>

                    <div class="card">
                        <img src="{!! asset('img/img_02.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Restauração</h5>
                        </div>
                    </div>

                    <div class="w-100 d-none d-sm-block d-md-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>

                    <div class="card">
                        <img src="{!! asset('img/img_03.jpg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cirurgia</h5>
                        </div>
                    </div>

                    <div class="w-100 d-none d-sm-block d-xl-block d-lg-block d-md-block" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>

                    <div class="card">
                        <img src="{!! asset('img/img_01.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Limpeza</h5>
                        </div>
                    </div>

                    <div class="w-100 d-none d-sm-block d-md-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>

                    <div class="card">
                        <img src="{!! asset('img/img_02.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Restauração</h5>
                        </div>
                    </div>

                    <div class="w-100 d-none d-sm-block d-md-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>

                    <div class="card">
                        <img src="{!! asset('img/img_03.jpg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cirurgia</h5>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <a href="/contato"><button type="button" class="btn btn-primary">Agende uma consulta</button></a>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
