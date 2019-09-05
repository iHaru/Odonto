@extends('layout.site')

@section('titulo', 'Odonto')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{!! asset('img/img_01_2.jpeg') !!}" width="100%" alt="" style="margin: 5px" class="img-fluid img-thumbnail">
                        <img src="{!! asset('img/img_03_2.jpg') !!}" width="100%" alt="" style="margin: 5px" class="img-fluid img-thumbnail">

                    </div>
                    <div class="col-sm-6">
                        <img src="{!! asset('img/img_02_2.jpeg') !!}" width="100%" alt="" style="margin: 5px" class="img-fluid img-thumbnail">
                        <img src="{!! asset('img/header_2.jpeg') !!}" width="100%" alt="" style="margin: 5px" class="img-fluid img-thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-uppercase">nossa <b>história</b></h4>
                <hr style="width: 60%; margin-left: 0px; border-color:orange; margin:0 0 0 10px">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ullamcorper, nisl quis dictum congue, dui diam gravida quam, a efficitur ipsum nisi non velit. Pellentesque vestibulum gravida ex, ac lobortis neque. Curabitur ut auctor massa. Pellentesque ipsum felis, ultricies et lorem ac, sollicitudin consequat justo. Fusce et auctor libero. Nullam lobortis erat quis sapien rutrum, elementum ullamcorper magna mollis. Pellentesque auctor dui a lorem lobortis, id cursus nibh iaculis. Proin sed orci risus. Cras mauris nunc, porta et mauris quis, aliquam rutrum nunc.
                </p>
            </div>
        </div>
        <br>

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
            </div>
        </div>
        <br>
    </div>
@endsection
