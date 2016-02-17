<?php include("cabecalho.php")
?>


        <section class="sessao_cadastroCorretor">
            <div class="container">

                <form class="form-horizontal" id="form_login">
                    <div class="row">

                        <div id="tituloLogin" name="tituloLogin"><h1>Login do sistema</h1></div>

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
                                <label class="sr-only" for="senha">Senha</label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                                <input type="password" name="senha" class="form-control" placeholder="Senha" required="autofocus">
                            </div>
                        </div>

                        <div class="row form-group-lg" id="div_input">
                            <div class="col-xs-offset-4 col-xs-4 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 text-left">
                                <input type="submit" name="button" class="form-control btn btn-primary" value="Entrar" placeholder="Senha" required="autofocus">
                            </div>
                        </div>  

                        <div class="row form-group-lg">
                            <div>
                                <a href="recuperar-senha.php">Esqueci minha senha</a>
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
