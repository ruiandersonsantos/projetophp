<html>
    <head>
        <meta charset="UTF-8">
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- adicionar CSS Bootstrap -->
        <link href="<?= base_url("css_b/bootstrap.min.css") ?>" rel="stylesheet">  
        <!-- CSS personalizado -->
        <link href = "<?= base_url("css_b/estilo.css") ?>" rel = "stylesheet" media = "screen">

        <title>Area Administrativa</title>
    </head>

    <body>
        <!-- fale conosco -->
        <section class="fale-conosco" style="margin-top: 40px;">
            <div class="container">           
                <div class="row">
                    <div class="col-sm-6 col-md-6">

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>Solicitação de Orçamento</h3>
                            </div>

                            <div class="panel-body">  
                                <p><strong>Nome:</strong> Simone Louzada Moraes</p>
                                <p><strong>Telefone:</strong> 987404766</p>
                                <p><strong>Email:</strong> simone@simone.com</p>
                                <p><strong>Cidade/Estado:</strong> Rio de Janeiro</p>

                            </div>

                            <div class="panel-footer">
                                <p><strong>Tipo de Plano:</strong> Plano Individual/familiar</p>
                                <p><strong>Convenio:</strong> Amil, Unimed...</p>
                                <p>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Faixa Etária</strong></td>
                                            <td class="align_td"><strong>Quant.</strong></td>
                                        </tr>

                                        <tr>
                                            <td>00 a 18</td>
                                            <td>2</td>                                            
                                        </tr>
                                        <tr>
                                            <td>39 a 43</td>
                                            <td>1</td>                                            
                                        </tr>

                                    </tbody>
                                </table>
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>  

        </section>
        <!-- ./fale conosco -->

        <?php include("rodape.php") ?>

