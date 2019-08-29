@extends('layout.site')

@section('titulo', 'Odonto')
@section('conteudo')
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
