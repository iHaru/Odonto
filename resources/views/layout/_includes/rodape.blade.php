        <hr style="border:2px solid orange; margin:0">
        <footer>
            <div class="container-fluid" style="background-color: black;">
                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <h4 style="color: white" class="text-uppercase">Horários</h4>

                        <table class="table" style="color: white">
                          <tbody>
                            <tr>
                              <th scope="row"><i class="fa fa-clock-o"></i></th>
                              <td>Segunda</td>
                              <td>8:00 - 19:00</td>
                            </tr>
                            <tr>
                              <th scope="row"><i class="fa fa-clock-o"></i></th>
                              <td>Terça</td>
                              <td>8:00 - 19:00</td>
                            </tr>
                            <tr>
                              <th scope="row"><i class="fa fa-clock-o"></i></th>
                              <td>Quarta</td>
                              <td>8:00 - 19:00</td>
                            </tr>
                            <tr>
                              <th scope="row"><i class="fa fa-clock-o"></i></th>
                              <td>Quinta</td>
                              <td>8:00 - 19:00</td>
                            </tr>
                            <tr>
                              <th scope="row"><i class="fa fa-clock-o"></i></th>
                              <td>Sexta</td>
                              <td>8:00 - 20:00</td>
                            </tr>
                            <tr>
                              <th scope="row"><i class="fa fa-clock-o"></i></th>
                              <td>Sábado</td>
                              <td>8:00 - 14:00</td>
                            </tr>
                            <tr>
                              <th scope="row"><i class="fa fa-clock-o"></i></th>
                              <td>Domingo</td>
                              <td>FECHADO</td>
                            </tr>

                          </tbody>
                        </table>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <h4 style="color: white" class="text-uppercase">Teste</h4>
                        <p style="color: white">Suspendisse potenti. Maecenas porta scelerisque est non auctor. Aliquam erat volutpat.
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                            Sed ullamcorper magna quam, a eleifend ex venenatis id.
                            Quisque rhoncus, ipsum id eleifend rutrum, orci lacus consectetur est, vitae mollis erat risus eget odio.
                            Nullam et ante faucibus, tincidunt metus et, mollis diam. Ut volutpat neque vel pharetra mollis.
                            Cras bibendum eget ipsum ullamcorper accumsan.
                            Morbi sagittis sodales velit, eu aliquet lorem cursus convallis. Ut rutrum in urna eget tempus.
                            Etiam est lectus, venenatis ut vehicula tristique, commodo eget odio.
                            Duis pretium purus elit, nec aliquet eros rhoncus a. In hac habitasse platea dictumst.
                            Pellentesque vitae nibh vitae nisi convallis ultrices. In hac habitasse platea dictumst.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <br>
                        <h4 style="color: white" class="text-uppercase">Contato</h4>
                        <p style="color: white">Venha conhecer o nosso trabalho e realize uma avaliação do seu sorriso!</p>

                        <div align="center">
                            <p style="color: white; margin-bottom: 5px">
                                <i class="fa fa-phone"></i>(11) 9999-9999
                            </p>
                            <p style="color: white; margin-bottom: 5px">
                                <i class="fa fa-phone"></i>(11) 9999-9999
                            </p>
                            <p style="color: white; margin-bottom: 5px">
                                <i class="fa fa-phone"></i>(11) 99999-9999
                            </p>
                            <p style="color: white; margin-bottom: 5px">
                                <i class="fa fa-envelope-o"></i>luciana.mmc@hotmail.com
                            </p>
                            <p style="color: white; margin-bottom: 5px">
                                <i class="fa fa-map-marker"></i>Av. Dr Sylvio de Campos, 12 - Perus, SP
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
                    </div>
                </div>

                <br><br>

                <div align="center">
                    <p style="color: white; margin-bottom: 0">&#169; Odontosaúde All rights Reserved</p>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

        <script type="text/javascript">
            $.fancybox.defaults.infobar = false;
            $.fancybox.defaults.smallBtn = true;

            $(window).on("load", function() {
                $(".loader").fadeOut("slow");

                var navbrand = $('.navbar-brand');
                var navbar = $('.navbar');

                $(window).scroll(function () {
                    if ($('.navbar').width() >= 768) {
                        if ($(document).scrollTop() != 0) {
                            TweenMax.to(navbrand, 0.3, {autoAlpha: 0});
                            TweenMax.to(navbar, 0.6, {height: "50px"});
                        } else {
                            TweenMax.to(navbrand, 0.6, {autoAlpha: 1});
                            TweenMax.to(navbar, 0.3, {height: "70px"});
                        }
                    }
                });
            });
        </script>
    </body>
</html>
