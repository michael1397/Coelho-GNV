<?php 
    include("include/header.php");
 ?>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Contato</li>
    </ol>

    <section class="banner-bottom-mkls pt-lg-5 pt-md-3 pt-3">
        <div class="inner-sec-wthreelayouts pt-md-5 pt-md-3 pt-3">
            <h2 class="tittle text-center mb-md-5 mb-4">Entre em Contato</h2>
            <div class="container">
                <div class="address row mb-5">
                    <div class="col-lg-4 address-grid-mkl">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-map"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Endereço</h6>
                                <p> Rua Cristiano Otoni, 1039<br>
                                    Coelho, São Gonçalo - RJ
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-mkl">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">E-mail</h6>
                                <p>
                                    <a href="mailto:sac@coelhognv.com.br"> sac@coelhognv.com.br</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-mkl">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Telefone</h6>
                                <p>+55 21 3817-7518</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.233535828971!2d-43.00463535015335!3d-22.830847784977156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99908a8742c14f%3A0xba4464b2480a6333!2sCoelho+GNV!5e0!3m2!1spt-BR!2sbr!4v1536953136295"allowfullscreen></iframe>

                    </div>
                    <div class="col-md-6 main_grid_contact">
                        <div class="form">
                            <h4 class="mb-4 text-left">Envie sua Mensagem</h4>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label class="my-2">Nome</label>
                                    <input class="form-control" type="text" name="nome" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Mensagem</label>
                                    <textarea id="textarea" placeholder=""></textarea>
                                </div>
                                <div class="input-group1">
                                    <input class="form-control" type="submit" value="Enviar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
    include("include/footer.php");
 ?>