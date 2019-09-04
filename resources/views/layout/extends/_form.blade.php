<div class="col-md-12 col-9">
    <h4>ENTRE EM <b>CONTATO</b></h4>
</div>
<hr width="60%" style="margin-left: 0px; border-color:orange; margin:0 0 0 10px" class="entrecontato">
<br>
<form action="{{ route('enviaremail') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text fa fa-user icon-form" id="basic-addon1"></span>
            </div>
            <input name="nome" type="text" class="form-control radius" placeholder="Seu nome" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text fa fa-envelope icon-form" id="basic-addon1"></span>
            </div>
            <input name="email" type="email" class="form-control radius" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text fa fa-phone icon-form" id="basic-addon1"></span>
            </div>
            <input name="telefone" type="text" class="form-control radius" placeholder="Telefone" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
            <div class="input-group-prepend" style="text-align: center">
                <span class="input-group-text fa fa-comment icon-form" style="display: inline-flex"></span>
            </div>
            <textarea name="mensagem" class="form-control radius" aria-label="With textarea" placeholder="Sua mensagem"></textarea>
        </div>
    </div>

    <div class="row justify-content-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
<br>
