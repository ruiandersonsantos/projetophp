<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
        <title>Planos de Saúde</title>

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection">
        <link type="text/css" rel="stylesheet" href="css/estilo.css"/>
    </head>

    <body>
        <!-- navbar -->
        <!-- teste subindo para o git -->
        <div class="navbar-fixed">
            <nav class="blue darken-3">

                <div class="nav-wrapper">
                    <a href="/" class="brand-logo"><?=$corretor['titulosite']?></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

                    <!-- menu -->
                    <ul class="right hide-on-med-and-down">
                        <li><a href="formulario_orcamento.php">Solicite Orçamento</a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down" id="nav-mobile" >
                        <li><a id="navMobile_produtos" href="#" >Produtos</a></li>
                        <li><a id="navMobile_planos" href="#">Planos</a></li>
                        <li><a id="navMobile_sobreCorretor" href="#">Sobre o Corretor</a></li>
                        <li><a id="navMobile_faleConosco" href="#">Fale Conosco</a></li>

                    </ul>

                    <!-- ./menu -->

                    <!-- menu-mobile -->
                    <ul class="side-nav" id="mobile-demo">
                        <li><a id="mobileDemo_produtos" href="#">Produtos</a></li>
                        <li><a id="mobileDemo_planos" href="#">Planos</a></li>
                        <li><a id="mobileDemo_sobreCorretor" href="#">Sobre o Corretor</a></li>
                        <li><a id="mobileDemo_faleConosco" href="#">Fale Conosco</a></li>
                        <li><a href="formulario_orcamento.php">Solicite Orçamento</a></li>
                    </ul>
                    <!-- ./menu-mobile -->

                </div>
            </nav>
        </div>
        <!-- ./navbar -->

        <!-- slider -->
        <section class="cyan lighten-5 sessao_slider">
            <div class="slider fullscreen">
                <ul class="slides">
                    <li>
                        <img src="img/slider/slider_familiar.jpg" class="responsive-img">
                        <div class="caption center-align"  id="text_slider1">
                            <h3>Planos de saúde <strong>Familiar</strong></h3>
                            <h5 class="text-slider-sub">
                                <strong>Sua família sempre segura!!!</strong>
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="img/slider/slider_dental.jpg" class="responsive-img">
                        <div class="caption left-align"  id="text_slider2">
                            <h3>Planos Odontologicos</h3>
                            <h5 class="text-slider-sub">
                                Saúde bucal por um preço que você pode pagar!
                            </h5>
                        </div>
                    </li>

                    <li>
                        <img src="img/slider/slider_prof_saúde.jpg" class="responsive-img">
                        <div class="caption right-align " id="text_slider3">
                            <h3>Os melhores <strong>Profissionais!</strong></h3>
                            <h5 class="text-slider-sub">
                                <strong>Médicos</strong> e <strong>Clínicas</strong> especializadas!!!
                            </h5>
                        </div>
                    </li>

                </ul>
            </div>
        </section>
        <!-- ./slider -->

        <!-- produtos -->

        <section class="espacamentoSuperior produtos cyan lighten-5">
            <div class="container div_container col s12 m12 l12">
                <div class="row">
                    <div id="div_titulo_produtos">
                        <h3 class="center-align">Produtos</h3>
                        <p class="flow-text  center-align">texto do produto
                        </p>

                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6 l3" id="divCard_produtos">
                        <div class="card z-depth-5">
                            <div class="card-image center-align">
                                <img class="responsive-img" src="img/logo_convenio/amil.png">
                            </div>
                            <div class="card-content teal" id="divContent_produtos">
                                <span class="white-text left-align">
                                    Os melhores <strong>Hospitais</strong> e <strong>Profissionais</strong> do Brasil.                                                              
                                    Aproveite os benefícios e vantagens acrescentados aos nossos planos.<br/><br/>
                                    - Cobertura Nacional<br/>
                                    - Livre escolha com reembolso de consulta*</br>
                                    - Analisamos redução de carências do seu plano anterior                                      
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6 l3" id="divCard_produtos">
                        <div class="card z-depth-5">
                            <div class="card-image center-align">
                                <img class="responsive-img" src="img/logo_convenio/unimed.png">
                            </div>
                            <div class="card-content teal"  id="divContent_produtos">
                                <span class="white-text">Prevenção à saúde com qualidade, 
                                    com diferenciais humanos e técnicos, 
                                    excelência no atendimento e com garantia Unimed.<br/>
                                    - Abrangência: Nacional, Estadual e Regional.<br/>
                                    - Acomodação: Apartamento ou enfermaria<br/>
                                    - Pessoa Jurídica ou Pessoa Física
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6 l3" id="divCard_produtos">
                        <div class="card z-depth-5">
                            <div class="card-image center-align">
                                <img class="responsive-img" src="img/logo_convenio/golden.png">
                            </div>
                            <div class="card-content teal" id="divContent_produtos">
                                <span class="white-text">Saúde suplementar e excelência no atendimento, 
                                    uma referência no setor de saúde suplementar em todo território nacional, 
                                    com uma ampla e qualificada rede referenciada.<br/>
                                    - Médicos, clínicas e consultórios<br/>
                                    - Hospitais, e laboratórios<br/>
                                    - Atendimento Odontológico

                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6 l3 " id="divCard_produtos">
                        <div class="card z-depth-5">
                            <div class="card-image center-align">
                                <img class="responsive-img" src="img/logo_convenio/sul_america.png">
                            </div>
                            <div class="card-content teal" id="divContent_produtos">
                                <span class="white-text">O <strong>SulAmérica</strong> Saúde assegura qualidade de vida e 
                                    bem-estar para você e sua família. Além da rede referenciada, o seguro 
                                    oferece vantagens, benefícios, descontos e programas especiais para proporcionar 
                                    a tranquilidade que vocês necessitam.


                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ./produtos -->

        <!-- planos -->

        <section class="planos  blue lighten-4">
            <div class="container div_container">
                <div class="row">
                    <div class="col s12" id="div_titulo_planos">
                        <h2 class="center-align">Planos</h2>
                        <p class="flow-text center-align">Conheça abaixo as formas de contrataçao</p>
                    </div>
                </div>

                <!-- cards -->
                <div class="row">

                    <!-- cards familiar -->
                    <div class="col s12 m6 l3 div-cards ">                       
                        <div class="card z-depth-4">
                            <div class="card-image">
                                <img class="img-cards" src="img/cards/plano_familiar.jpg">                               
                            </div>
                            <div class="card-content" id="div_content">
                                <h5><strong>Familiar</strong></h5>
                                <p>Os melhores hospitais oferecidos para você e sua família.</p>
                            </div>
                            <div class="card-action">
                                <a href="formulario_orcamento.html" class="waves-effect waves-light btn">Solicite Orçamento</a>
                            </div>
                        </div>
                    </div>
                    <!-- ./cards familiar -->

                    <!-- cards empresarial -->
                    <div class="col s12 m6 l3 div-cards">
                        <div class="card z-depth-4">
                            <div class="card-image">
                                <img class="img-cards" src="img/cards/plano_empresarial.jpg">                               
                            </div>
                            <div class="card-content" id="div_content">
                                <h5><strong>Empresarial</strong></h5>
                                <p>Você e seus funcionários merecem o melhor plano de saúde.</p>
                            </div>
                            <div class="card-action">
                                <a href="formulario_orcamento.html" class="waves-effect waves-light btn">Solicite Orçamento</a>
                            </div>
                        </div>
                    </div>
                    <!-- ./cards empresarial -->

                    <!-- cards adesao -->
                    <div class="col s12 m6 l3 div-cards">
                        <div class="card z-depth-4">
                            <div class="card-image">
                                <img class="img-cards" src="img/cards/plano_adesao.png">
                            </div>
                            <div class="card-content" id="div_content">
                                <h5><strong>Por Adesão</strong></h5>
                                <p>Planos com descontos especiais para diversas entidades de classe.</p>
                            </div>
                            <div class="card-action">
                                <a href="formulario_orcamento.html" class="waves-effect waves-light btn">Solicite Orçamento</a>
                            </div>
                        </div>
                    </div>
                    <!-- ./cards adesao -->

                    <!-- cards dental -->
                    <div class="col s12 m6 l3 div-cards">
                        <div class="card z-depth-4">
                            <div class="card-image">
                                <img class="img-cards" src="img/cards/plano_dental.png">
                            </div>
                            <div class="card-content" id="div_content">
                                <h5><strong>Odontológico</strong></h5>
                                <p>Confira nosso plano odontológico, rede credenciada, e valores.</p>
                            </div>
                            <div class="card-action">
                                <a href="formulario_orcamento.html" class="waves-effect waves-light btn center-align">Solicite Orçamento</a>
                            </div>
                        </div>
                    </div>
                    <!-- ./cards dental -->

                </div>
                <!-- ./cards -->

            </div>
        </section>
        <!-- ./planos -->

        <!-- sobre-o-corretor -->
        <section class="sobre-o-corretor cyan lighten-5"> 
            <div class="container">
                <div class="row">
                    <div class="col s12" id="div_titulo_corretor">

                        <h2 class="center-align">Corretor</h2>
                        <p class="flow-text center-align"><?=$corretor['slogan']?></p>

                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card" id="card_corretor">      
                            <div class="card-content">
                                <h5 class=""><?=$corretor['titulobiografia']?></h5>
                            </div>
                            <div class="card-action">
                                <p><?=$corretor['biografia']?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m8">                        
                        <div class="video-container">
                            <iframe width="853" height="480" src="<?=$corretor['linkvideo']?>" frameborder="0" ></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ./sobre-o-corretor -->

        <!-- fale conosco -->
        <section class="fale-conosco  blue lighten-4">
            <div class="container div_container">
                <div class="row">
                    <div class="col s12" id="div_titulo_faleconosco">

                        <h2 class="center-align">Fale Conosco</h2>
                        <p class="flow-text center-align">Preencha o formulário para entrar em contato!</p>

                    </div>
                </div>

                <div class="row" id="row_formulario">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name">Primeiro nome:</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="telefone" type="text" class="validate">
                                <label for="telefone">Telefone:</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="textarea1">Mensagem:</label>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 center-align">
                                <button type="submit" class="waves-effect waves-light btn btn-large">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <!-- ./fale conosco -->

        <!-- rodape -->
        <footer class="rodape page-footer blue darken-3">
            <section>
                <div class="container div_container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="col offset-s3 s12 offset-m4 m12 l3">
                                <h5 id="logo_rodape"><a href="#"><span class="white-text"><?=$corretor['titulosite']?></span></a></h5>
                                <a href="<?=$corretor['linkgoogle']?>" class=" " target="_blank"><i class="material-icons"><img src="img/redeSocial/google_plus.png"/></i></a>
                                <a href="<?=$corretor['linkfacebook']?>" class="" target="_blank"><i class="material-icons"><img src="img/redeSocial/facebook.png"/></i></a>
                                <a href="#" class="btn-floating  blue lighten-3" target="_blank"><i class="material-icons" style="margin-top: 0px;"><img src="img/redeSocial/twitter2.png"/></i></a>
                                
                                <div class="" id="div_link_rodape">
                                <a  href="<?= base_url("/index.php/usuario/login") ?>" class="grey-text text-lighten-3" target="_blank"> <i class="small material-icons">settings</i></a>
                                </div>

                            </div>
                            <div class="col s12 offset-m1 m12 l5" id="div_link_rodape">
                                <a id="link_rodape_prod" href="#" class="grey-text text-lighten-3">Produtos</a><span class="white-text">|</span>
                                <a id="link_rodape_planos" href="#" class="grey-text text-lighten-3">Planos</a><span class="white-text">|</span>
                                <a id="link_rodape_corretor" href="#" class="grey-text text-lighten-3">Sobre o Corretor</a><span class="white-text">|</span>
                                <a id="link_rodape_faleConosco" href="#" class="grey-text text-lighten-3">Fale Conosco</a>
                                
                            </div> 

                            <div class="col offset-s1 s12 offset-m3 m12 l4" id="div_contato_rodape">
                                <p class="grey-text text-lighten-4">
                                    Consultoria em planos de Saúde:
                                </p>
                                <div class="row">
                                    <div class="col offset-s1 s12 m12 l10">
                                        <span class="white-text">
                                            <i id="iconContato_rodape" class="material-icons white-text">phone</i>
                                            <?=$corretor['telefone']?>
                                        </span>
                                    </div >
                                </div>

                                <div class="row">
                                    <div class="col offset-s1 s12 m12 l10">
                                        <span class="white-text">
                                            <i id="iconContato_rodape" class="material-icons white-text">stay_current_portrait</i>
                                            <?=$corretor['celular']?>
                                        </span>
                                        <img id="imgWattsApp_rodape" src="img/redeSocial/whatsapp.png"/>
                                    </div >
                                </div>

                                <div class="row">
                                    <div class="col offset-s1 s12 m12 l10">
                                        <span class="white-text">
                                            <i id="iconContato_rodape" class="material-icons white-text">email</i>
                                            <?=$corretor['email']?></span>
                                    </div >
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="footer-copyright col s12 m12 l12  blue darken-4">
                    <div class="container div_container center-align">
                        Todos os Direitos Reservados a <strong>RS Soluções</strong>
                    </div>
                </div>

            </section>
        </footer>


        <!-- ./rodape -->

        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/jscript.js"></script>
    </body>
</html>
