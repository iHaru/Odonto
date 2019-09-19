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
                    <div class="card equipe" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer">
                        <img src="{!! asset('img/img_01.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Limpeza</h5>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Limpeza</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Lorem</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <h5>Ipsum</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="w-100 d-none d-sm-block d-md-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>

                    <div class="card equipe" data-toggle="modal" data-target="#exampleModal1" style="cursor: pointer">
                        <img src="{!! asset('img/img_02.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Restauração</h5>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Restauração</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Lorem</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <h5>Ipsum</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="w-100 d-none d-sm-block d-md-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>

                    <div class="card equipe" data-toggle="modal" data-target="#exampleModal2" style="cursor: pointer">
                        <img src="{!! asset('img/img_03.jpg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cirurgia</h5>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Cirurgia</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Lorem</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <h5>Ipsum</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="w-100 d-none d-sm-block d-xl-block d-lg-block d-md-block" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>

                    <div class="card equipe" data-toggle="modal" data-target="#exampleModal3" style="cursor: pointer">
                        <img src="{!! asset('img/img_01.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Limpeza</h5>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Limpeza</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Lorem</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <h5>Ipsum</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="w-100 d-none d-sm-block d-md-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>

                    <div class="card equipe" data-toggle="modal" data-target="#exampleModal4" style="cursor: pointer">
                        <img src="{!! asset('img/img_02.jpeg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Restauração</h5>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Restauração</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Lorem</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <h5>Ipsum</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="w-100 d-none d-sm-block d-md-none" style="margin-top: 5px; margin-bottom: 5px;"><!-- wrap every 5 on xl--></div>

                    <div class="card equipe" data-toggle="modal" data-target="#exampleModal5" style="cursor: pointer">
                        <img src="{!! asset('img/img_03.jpg') !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cirurgia</h5>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Cirurgia</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Lorem</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <h5>Ipsum</h5>
                                            <br>
                                            <p>Ut ac dui ac augue convallis aliquet et congue ligula. Aenean ligula mi, ullamcorper ut pharetra id, maximus sit amet nunc. Curabitur scelerisque sit amet mi id elementum. Aliquam erat volutpat. Vestibulum venenatis, justo ac dignissim iaculis, lectus tortor accumsan orci, vitae ullamcorper magna justo sed neque. Praesent vulputate risus sodales eros eleifend tristique. Aliquam vestibulum sit amet urna quis congue. Pellentesque sit amet lectus in quam pretium fringilla nec in elit. Aliquam gravida scelerisque erat quis sodales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                          </div>
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
