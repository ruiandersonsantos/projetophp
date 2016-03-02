<?php include("cabecalho.php")?>
        <div class="container">
            <div class="container">
            <div class="row">

                <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6">

                    <div class="panel panel-default">
                        <div class="panel-heading"  style="background: black; color: white;">
                            <h1 class="text-center">Sistema do Corretor</h1>

                        </div>
                        <div class="panel-body text-justify">
                            <p>Prezado(a) <strong>[nome usuario]</strong>,<br/><br/>
                                Esta mensagem foi enviada na sequência de um pedido na <strong>[nome do site]</strong> para redifinição de
                                senha.<br/><br/>
                                Para redefinir sua senha click no link abaixo:<br/>
                                <a href="http://localhost:8000/projetophp/index.php/usuario/login" class=" " target="_blank">http://localhost:8000/projetophp/index.php/usuario/login</a>
                                <br/>e faça login utilizando as seguintes informações:<br/><br/>
                                Email do usuário: [email usuario]<br/>
                                Senha provisória: [senha provisória]<br/><br/>
                            </p>
                            <hr>
                            <p> 
                            Caso não tenha feito essa solicitação, é provável que outro usuário tenha inserido
                            seu endereço de email por engano e sua conta ainda está protegida.
                            </p>
                        </div>
                        <div class="panel-footer text-center"  style="background: black; color: white;">
                            [nome site]
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php include("rodape.php")?>