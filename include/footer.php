    
    <footer class="footer-main-coelho py-md-5 py-4">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row">
                <div class="col-lg-4 footer-grid-mkls">
                    <h3 class="mb-4">Um pouco Sobre Nós</h3>
                    <p>Lorem ipsum dolor sit amet, Cras blandit nibh ut pretium elementum. Duis bibendum convallis nunc a dictum. Quisque ac ipsum porta, ultrices metus sit amet, cursus nisl. Duis aliquet varius sem sit amet tempus. Curabitur vitae dui bibendum. </p>
                    <div class="row mt-4">
                        
                    </div>
                </div>
                <div class="col-lg-5 footer-grid-mkls">
                        <h3 class="text-capitalize mb-3">Conecte-se com nós na Rede Social</h3>
                        <p>
                            <a href="#" class="facebook-footer mr-2"><span class="fab mr-1 fa-facebook-f"></span> Facebook</a>
                            <a href="#" class="twitter-footer"><span class="fab mr-1 fa-twitter"></span> Twitter</a>
                        </p>
                        <br>
                        <h3 class="mb-4">Nosso Endereço</h3>
                        <address class="mb-0">
                            <p class="mb-2"><i class="fas fa-map-marker-alt"></i> Rua Cristiano Otoni, 1039 <br>Coelho, São Gonçalo - RJ</p>
                            <p><i class="fas mr-1 fa-phone"></i> +55 21 3817-7518</p>
                            <p><i class="far mr-1 fa-envelope-open"></i> <a href="mailto:info@example.com">sac@coelhognv.com.br</a></p>
                        </address>
                </div>
                <div class="col-lg-3 footer-grid-mkls">
                    <h3 class="mt-4 mb-4">Newsletter</h3>
                    <p class="mb-3">Quer receber todas nossas atualizações ? Preencha com seu e-mail abaixo e fique por dentro de tudo.</p>
                    <form action="#" method="post">
                        <input type="email" name="Email" placeholder="Digite seu E-mail..." required="">
                        <button class="btn1"><i class="far fa-paper-plane"></i></button>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright-coelho mt-md-5 mt-4 text-center">
            <p>© 2018 Coelho GNV . Todos os direitos Reservados | Desenvolvidor por <a href="#" target="_blank">Michael Silva</a></p>
        </div>
    </footer>

    <!--/Login-->
    <div class="modal fade" id="orcamento" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="row">
                    <div class="col-md-12">
                    <h3 class="modal-title" id="orcamento">Orçamento Online (Gnv)</h3>
                    <p>Para um atendimento mais completo e personalizado, por favor, selecione as opções abaixo e receba uma cotação por e-mail ou telefone. Nossa equipe terá o maior prazer em sanar todas suas dúvidas, referentes a instalação, prazos e forma de pagamento.</p>
                    </div>
                  </div>
               </div>
               <div class="modal-body">
                  <form class="form-horizontal" role="form" action="envios/orcamento.php" method="POST">
                     <h3>Dados Pessoais</h3>
                     <br>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome">Nome</label>
                        <div class="">
                           <input type="text" name="nome" class="form-control" placeholder="nome completo" minlength="10" required="">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="telefone">Telefone</label>
                        <div class="">
                           <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Telefone para contato" minlength="11" required="" maxlength="14">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="email">E-mail</label>
                        <div class="">
                           <input type="email" name="email" class="form-control" placeholder="E-mail para contato" required="">
                        </div>
                     </div>
                     <br>
                     <h3>Dados do Veículo</h3>
                     <p><strong>Selecione a marca, ano, modelo e potência do seu veículo</strong></p>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="marcaveiculo">Marca</label>
                        <div class="">
                           <select class="form-control" required="" name="marcaveiculo">
                              <option>Marca do Veículo</option>
                              <option value="audi">Audi</option>
                              <option value="Bentley">Bentley</option>
                              <option value="bmw">BMW</option>
                              <option value="Chery">Chery</option>
                              <option value="Chrysler">Chrysler</option>
                              <option value="Citroën">Citroën</option>
                              <option value="Dodge">Dodge</option>
                              <option value="Fiat">Fiat</option>
                              <option value="Ford">Ford</option>
                              <option value="Honda">Honda</option>
                              <option value="Hyundai">Hyundai</option>
                              <option value="Iveco">Iveco</option>
                              <option value="JAC">JAC</option>
                              <option value="Jeep">Jeep</option>
                              <option value="Kia">Kia</option>
                              <option value="Land Rover">Land Rover</option>
                              <option value="Mitsubishi">Mitsubishi</option>
                              <option value="Nissan">Nissan</option>
                              <option value="Peugeot">Peugeot</option>
                              <option value="Porsche">Porsche</option>
                              <option value="Renault">Renault</option>
                              <option value="Suzuki">Suzuki</option>
                              <option value="Toyota">Toyota</option>
                              <option value="Troller">Troller</option>
                              <option value="Volkswagen">Volkswagen</option>
                              <option value="Volvo">Volvo</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputEmail3">Ano</label>
                        <div class="">
                           <select class="form-control" required="" name="anoveiculo">
                              <option value="">Ano do Veículo</option>
                              <option value="2017">2019</option>
                              <option value="2017">2018</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                              <option value="2012">2012</option>
                              <option value="2011">2011</option>
                              <option value="2010">2010</option>
                              <option value="2009">2009</option>
                              <option value="2008">2008</option>
                              <option value="2007">2007</option>
                              <option value="2006">2006</option>
                              <option value="2005">2005</option>
                              <option value="2004">2004</option>
                              <option value="2003">2003</option>
                              <option value="2002">2002</option>
                              <option value="2001">2001</option>
                              <option value="2000">2000</option>
                              <option value="1999">1999</option>
                              <option value="1998">1998</option>
                              <option value="1997">1997</option>
                              <option value="1996">1996</option>
                              <option value="1995">1995</option>
                              <option value="1994">1994</option>
                              <option value="1993">1993</option>
                              <option value="1992">1992</option>
                              <option value="1991">1991</option>
                              <option value="1990">1990</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="potenciaveiculo">Potência</label>
                        <div class="">
                           <select class="form-control" required="" name="potenciaveiculo">
                              <option>Selecione a potência do seu veículo</option>
                              <option value="1.0">1.0</option>
                              <option value="1.3">1.3</option>
                              <option value="1.4">1.4</option>
                              <option value="1.5">1.5</option>
                              <option value="1.8">1.8</option>
                              <option value="2.0">2.0</option>
                              <option value="2.2">2.2</option>
                              <option value="2.3">2.3</option>
                              <option value="3.0">3.0</option>
                              <option value="3.5">3.5</option>
                              <option value="4.0">4.0</option>
                              <option value="4.1">4.1</option>
                              <option value="4.3">4.3</option>
                              <option value="superior 4.3">superior a 4.3</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="modelo">Modelo</label>
                        <div class="">
                           <input type="text" name="modelo" class="form-control" placeholder="Modelo do Veículo" minlength="4" required="">
                        </div>
                     </div>
                     <br>
                     <p><strong>Selecione o tamanho do cilindro que será utilizado na instalação</strong></p>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="cilindro">Cilindro</label>
                        <div class="">
                           <select class="form-control" name="cilindro">
                              <option value="">Escolha o tamanho do cilindro</option>
                              <option value="7 1/2m³">7 1/2m³</option>
                              <option value="10m³">10m³</option>
                              <option value="16m³">16m³</option>
                           </select>
                        </div>
                     </div>
                     <br>
                     <p><strong>Selecione local desejado da instalação do cilindro. (Caso não seja possível fazer a instalação no local desejado, nossos técnicos recomendarão o local mais seguro para instalar o cilindro)</strong></p>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="local">Local</label>
                        <div class="">
                           <select class="form-control" name="local">
                              <option value="">Escolha o local a ser instalado</option>
                              <option value="Porta-malas">Porta-malas</option>
                              <option value="Abaixo do porta-malas">Abaixo do porta-malas</option>
                              <option value="Caçamba">Caçamba</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label" for="mensagem">Mensagem</label>
                        <div class="">
                           <textarea class="form-control" rows="5" name="mensagem" placeholder="Deixa sua mensagem"></textarea>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                        Fechar
                        </button>
                        <input type="submit" name="enviar" value="Enviar Orçamento" class="btn btn-primary">
                     </div>
                  </form>
               </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/search.js"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function() {
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 0
                    }
                }
            })
        })
    </script>
    <script src="js/easing.js"></script>
    <script src="js/move-top.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll, .navbar li a, .footer li a").click(function(event) {
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>

    <script src="js/jquery-1.7.2.js"></script>
    <script src="js/jquery.quicksand.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>