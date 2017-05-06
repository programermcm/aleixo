<?php define('URL', 'http://localhost:8888/'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aleixo Transporte</title>
        <link rel="stylesheet" href="<?php echo URL; ?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo URL; ?>/assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo URL; ?>/assets/css/style.css">
    </head>
    <body>
         <h1 class="font-0">
                        Aleixo Transportes
        </h1>
        <header class="container-fluid" id="header">
            <div class="row">
                    <div class="container">
                        <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <h1 class="font-0">
                                            Aleixo Transportes
                                            <a href=""><img src="<?php echo URL;  ?>assets/svg/logo.svg" alt="Aleixo Transportes" title="Aleixo Transportes" id="logo" /></a>
                                    </h1>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                        <nav id="caixaBtn"class="navbar navbar-default">
                                            <h1 class="font-0">
                                               Aleixo Transportes
                                            </h1>
                                          <div class="container-fluid">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                              <button type="button" id="btnMenu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                              </button>
                                            </div>
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                <ul id="menu" class="nav navbar-nav">
                                                    <li><a href="" title="Home">Home</a></li>
                                                    <li><a href="" title="Empresa">Empresa</a></li>
                                                    <li><a href="" title="Orçamento">Orçamento</a></li>
                                                    <li><a href="" title="Últimos Serviços">Últimos serviços</a></li>
                                                    <li><a href="" title="Notícias">Notícias</a></li>
                                                    <li><a href="" title="Contato">Contato</a></li>
                                                </ul>
                                            </div><!-- /.navbar-collapse -->
                                          </div><!-- /.container-fluid -->
                                        </nav>
                                </div>
                        </div>
                    </div>
            </div>
        </header>
        <section class="container">
            <div class="row">
                <h1 class="titleItalic">Precisa transportar e não quer dor de cabeça, sabemos como fazer, descubra como abaixo!</h1>
            </div>

            <div class="row" id='box-blocks'>
                <aside class="blocos">
                    <div class="img"><img src="<?php echo URL; ?>/assets/images/bloco-01.png" alt="" title="" /></div>
                    <h1 class="font-0">Acabou de fazer uma venda ou concluir um projeto e precisa entregarno seu cliente, porém existe uma grande distância entre você e ele ?</h1>
                    <p>
                        Acabou de fazer uma venda ou concluir um projeto e precisa entregarno seu cliente, porém existe uma grande distância entre você e ele ?
                    </p>
                </aside>
                <aside class="blocos">
                    <div class="img"><img src="<?php echo URL; ?>/assets/images/bloco-02.png" alt="" title="" /></div>
                    <h1 class="font-0">Chame o <small><strong>ALEIXO TRANSPORTES</strong></small>, após entender as necessidades da sua carga enviamos um veículo dedicado a sua empresa para fazer a coleta.</h1>
                    <p>
                        Chame o <small><strong>ALEIXO TRANSPORTES</strong></small>, após entender as necessidades da sua carga enviamos um veículo dedicado a sua empresa para fazer a coleta.
                    </p>
                </aside>
                <aside class="blocos">
                    <div class="img"><img src="<?php echo URL; ?>/assets/images/bloco-03.png" alt="" title="" /></div>
                    <h1 class="font-0">Sua carga entra em processo de viagem, mas para evitar dor de cabeça, saiba que contamos com seguro e gerenciamento de risco.</h1>
                    <p>
                        Sua carga entra em processo de viagem, mas para evitar dor de cabeça, saiba que contamos com seguro e gerenciamento de risco.
                    </p>
                </aside>
                <aside class="blocos">
                    <div class="img"><img src="<?php echo URL; ?>/assets/images/bloco-04.png" alt="" title="" /></div>
                    <h1 class="font-0">Sua carga entra em processo de viagem, mas para evitar dor de cabeça, saiba que contamos com seguro e gerenciamento de risco.</h1>
                    <p>
                        Chegamos no seu destino dentro do prazo combinado e com tudo em ordem. Assim acabando com a distância que exista.
                    </p>
                </aside>
            </div>
        </section>

        <div class="container-fluid bg-gray" id="bloco-video">
            <article class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h1 class="text-uppercase">Sobre a Aleixo Transportes</h1>
                        <p class="text-justify">
                            Somos uma transportadora especializada em transporte e lotação
                            (carga fechada) que  utiliza de tecnologia para otimizar os custos,
                            segurança e atendimento, para atende-lo temos uma frota com mais
                            de 200 veículos que é composta por parte própria e parte de motorista
                            autônomos que são devidamente avaliados por gerenciamento de risco,
                            assim garantindo um transporte de segurança e qualidades.
                            Somada nossa política de aproveitameto de veículo na qual visamos eliminar
                            viagens vazias gerando redução de custo de 30% para nossos embarcadores.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img src="<?php echo URL ;?>/assets/images/video.png" alt="" title="" />
                    </div>
                </div>
            </article>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo URL;  ?>assets/js/wow.min.js"></script>
    </body>
</html>