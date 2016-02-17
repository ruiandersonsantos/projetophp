<?php include("cabecalho.php")

?>

        <section class="sessao_cadastroCorretor" style="margin-top: 90px; text-align: center;" >
            <div class="container">

                <form class="form-horizontal" id="form_login">
                    <div class="row">
                        
                        <div id="tituloLogin" name="tituloLogin"><h1>Recuperar Senha</h1></div>

                        <div class="form-group-lg">
                            <div>
                                <label class="sr-only" id="email" for="email">Email</label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="autofocus">
                            </div>
                        </div>

                        <div class="form-group-lg">
                            <div>
                                <label class="sr-only" for="telefone">Telefone</label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                                <input type="number" name="telefone" class="form-control" placeholder="Telefone" required="autofocus">
                            </div>
                        </div>

                        <div class="row form-group-lg" id="div_input">
                            <div class="col-xs-offset-4 col-xs-4 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 text-left">
                                <input type="submit" name="button" class="form-control btn btn-primary" value="Recuperar" required="autofocus">
                            </div>
                        </div>  

                    </div>
                </form>

            </div>
        </section>

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jscript.js"></script>
    </body>
</html>
