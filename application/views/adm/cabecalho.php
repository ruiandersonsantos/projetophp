<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- adicionar CSS Bootstrap -->
        <link href="<?= base_url("css_b/bootstrap.min.css")?>" rel="stylesheet">  
        <!-- CSS personalizado -->
        <link href = "<?= base_url("css_b/estilo.css")?>" rel = "stylesheet" media = "screen">

        <title>Area Administrativa</title>
    </head>

    <body>
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navPrincipal">
            <div class="container-fluid">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#elementoCollapsel">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a style="margin-left: 15px; color: white;" href="<?= base_url("/index.php/usuario/login")?>" class="navbar-brand">PAINEL DE CONTROLE</a>
                </div>

                <div class="collapse navbar-collapse " id="elementoCollapsel">
                   
                    <ul class="nav navbar-nav">
                        <li  class="active"><a href="<?= base_url("/index.php/usuario/login")?>">Home</a></li>
                        <li><a href="../corretor/adm">Corretor</a></li>
                        <li><a href="produto.php">Produto</a></li>
                        <li><a href="#">Plano</a></li>
                        <li><a href="#">Designer</a></li>
                        <li><a href="<?= base_url("index.php/usuario/sair")?>">Sair</a></li>
                    </ul>
                    
                    <div>
                        <p style="margin-right: 15px; color: white;" class="navbar-text navbar-right">
                            Olá <strong><?= $this->session->userdata("usuario_logado")['email'] ?></strong>
                        </p>
                    </div>
                    
                </div>
            </div>
        </nav>
    