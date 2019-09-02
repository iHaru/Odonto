@extends('layout.site')

@section('titulo', 'Odonto')
@section('conteudo')
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-uppercase text-white">conheça nosso trabalho</h3>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus ante sit amet erat auctor, in blandit massa laoreet. Mauris ac nunc lobortis, laoreet quam a, tincidunt odio. Aenean lobortis tellus nulla, gravida tristique ipsum aliquam in. Proin vel velit ac eros rutrum varius. In dapibus pretium cursus. Nam porta risus neque, ac consequat erat consectetur in. Duis maximus odio eu hendrerit varius. Aenean dignissim ex sit amet mi posuere, eget aliquam purus sollicitudin. Duis sed nisi orci. Pellentesque vitae est ac lectus mattis tempus finibus a justo. Quisque convallis nibh vitae felis fringilla, vel ultrices ipsum cursus.
            </h5>
        </div>

        <!--MOBILE-->
        <div class="d-block d-sm-none">
            <div class="row">
                <div class="col-6">
                    <a data-fancybox="gallery" href="{!! asset('img/img_02.jpeg') !!}">
                        <img src="{!! asset('img/img_02_2.jpeg') !!}" class="img-fluid img-thumbnail">
                    </a>

                    <a data-fancybox="gallery" href="{!! asset('img/header.jpeg') !!}">
                        <img src="{!! asset('img/header_2.jpeg') !!}" class="img-fluid img-thumbnail">
                    </a>

                    <a data-fancybox="gallery" href="{!! asset('img/img_03.jpg') !!}">
                        <img src="{!! asset('img/img_03_2.jpg') !!}" class="img-fluid img-thumbnail">
                    </a>

                    <a data-fancybox="gallery" href="{!! asset('img/header.jpeg') !!}">
                        <img src="{!! asset('img/header_2.jpeg') !!}" class="img-fluid img-thumbnail">
                    </a>

                    <a data-fancybox="gallery" href="{!! asset('img/img_02.jpeg') !!}">
                        <img src="{!! asset('img/img_02_2.jpeg') !!}" class="img-fluid img-thumbnail">
                    </a>
                </div>

                <div class="col-6">
                    <a data-fancybox="gallery" href="{!! asset('img/img_01.jpeg') !!}">
                        <img src="{!! asset('img/img_01_2.jpeg') !!}" class="img-fluid img-thumbnail">
                    </a>

                    <a data-fancybox="gallery" href="{!! asset('img/img_03.jpg') !!}">
                        <img src="{!! asset('img/img_03_2.jpg') !!}" class="img-fluid img-thumbnail">
                    </a>

                    <a data-fancybox="gallery" href="{!! asset('img/header.jpeg') !!}">
                        <img src="{!! asset('img/header_2.jpeg') !!}" class="img-fluid img-thumbnail">
                    </a>

                    <a data-fancybox="gallery" href="{!! asset('img/img_03.jpg') !!}">
                        <img src="{!! asset('img/img_03_2.jpg') !!}" class="img-fluid img-thumbnail">
                    </a>

                    <a data-fancybox="gallery" href="{!! asset('img/img_01.jpeg') !!}">
                        <img src="{!! asset('img/img_01_2.jpeg') !!}" class="img-fluid img-thumbnail">
                    </a>
                </div>
            </div>
        </div>

        <!--DESKTOP-->

        <div class="d-none d-sm-block">
            <a data-fancybox="gallery" href="{!! asset('img/img_01.jpeg') !!}">
                <img src="{!! asset('img/img_01_2.jpeg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/img_02.jpeg') !!}">
                <img src="{!! asset('img/img_02_2.jpeg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/header.jpeg') !!}">
                <img src="{!! asset('img/header_2.jpeg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/img_02.jpeg') !!}">
                <img src="{!! asset('img/img_02_2.jpeg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/img_01.jpeg') !!}">
                <img src="{!! asset('img/img_01_2.jpeg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/img_03.jpg') !!}">
                <img src="{!! asset('img/img_03_2.jpg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/img_03.jpg') !!}">
                <img src="{!! asset('img/img_03_2.jpg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/header.jpeg') !!}">
                <img src="{!! asset('img/header_2.jpeg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/img_02.jpeg') !!}">
                <img src="{!! asset('img/img_02_2.jpeg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/header.jpeg') !!}">
                <img src="{!! asset('img/header_2.jpeg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/img_03.jpg') !!}">
                <img src="{!! asset('img/img_03_2.jpg') !!}" class="img-fluid img-thumbnail">
            </a>

            <a data-fancybox="gallery" href="{!! asset('img/img_01.jpeg') !!}">
                <img src="{!! asset('img/img_01_2.jpeg') !!}" class="img-fluid img-thumbnail">
            </a>
        </div>

{{--         <div class="row">
            <div class="col-sm-3">
                <a data-fancybox="gallery" href="{!! asset('img/img_01.jpeg') !!}">
                    <img src="{!! asset('img/img_01_2.jpeg') !!}" class="img-fluid img-thumbnail">
                </a>
                <hr>
                <a data-fancybox="gallery" href="{!! asset('img/img_02.jpeg') !!}">
                    <img src="{!! asset('img/img_02_2.jpeg') !!}" class="img-fluid img-thumbnail">
                </a>
                <hr>
                <a data-fancybox="gallery" href="{!! asset('img/header.jpeg') !!}">
                    <img src="{!! asset('img/header_2.jpeg') !!}" class="img-fluid img-thumbnail">
                </a>
            </div>

            <div class="col-sm-3">
                <a data-fancybox="gallery" href="{!! asset('img/img_02.jpeg') !!}">
                    <img src="{!! asset('img/img_02_2.jpeg') !!}" class="img-fluid img-thumbnail">
                </a>
                <hr>
                <a data-fancybox="gallery" href="{!! asset('img/img_01.jpeg') !!}">
                    <img src="{!! asset('img/img_01_2.jpeg') !!}" class="img-fluid img-thumbnail">
                </a>
                <hr>
                <a data-fancybox="gallery" href="{!! asset('img/img_03.jpg') !!}">
                    <img src="{!! asset('img/img_03_2.jpg') !!}" class="img-fluid img-thumbnail">
                </a>
            </div>

            <div class="col-sm-3">
                <a data-fancybox="gallery" href="{!! asset('img/img_03.jpg') !!}">
                    <img src="{!! asset('img/img_03_2.jpg') !!}" class="img-fluid img-thumbnail">
                </a>
                <hr>
                <a data-fancybox="gallery" href="{!! asset('img/header.jpeg') !!}">
                    <img src="{!! asset('img/header_2.jpeg') !!}" class="img-fluid img-thumbnail">
                </a>
                <hr>
                <a data-fancybox="gallery" href="{!! asset('img/img_02.jpeg') !!}">
                    <img src="{!! asset('img/img_02_2.jpeg') !!}" class="img-fluid img-thumbnail">
                </a>
            </div>

            <div class="col-sm-3">
                <a data-fancybox="gallery" href="{!! asset('img/header.jpeg') !!}">
                    <img src="{!! asset('img/header_2.jpeg') !!}" class="img-fluid img-thumbnail">
                </a>
                <hr>
                <a data-fancybox="gallery" href="{!! asset('img/img_03.jpg') !!}">
                    <img src="{!! asset('img/img_03_2.jpg') !!}" class="img-fluid img-thumbnail">
                </a>
                <hr>
                <a data-fancybox="gallery" href="{!! asset('img/img_01.jpeg') !!}">
                    <img src="{!! asset('img/img_01_2.jpeg') !!}" class="img-fluid img-thumbnail">
                </a>
            </div>

        </div> --}}
    </div>
    <br>
@endsection
