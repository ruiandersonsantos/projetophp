<?php include("cabecalho.php")
?>


        <section class="sessao_cadastroCorretor">
            <div class="container">

                <form class="form-horizontal" >
                    <div class="row">

                        <div class="panel panel-success">
                            <div class="panel-heading"><h3 class="panel-title">Informações Pessoais</h3></div><!-- Panel cabeçalho -->

                            <div class="panel-body">
                                <div class="row  form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label class="control-label" for="nome" >Nome Completo:</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input class="form-control" type="text" id="nome" name="nome"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label class="control-label" for="endereco">Endereço:</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input class="form-control" type="text" id="endereco" name="endereco"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label class="control-label" for="numero">Numero:</label>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <input class="form-control" type="number" id="numero" name="numero"/>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label class="control-label" for="complemento">Complemento:</label>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <input class="form-control" type="text" id="complemento" name="complemento"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label class="control-label" for="bairro">Bairro:</label>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-6">
                                        <input class="form-control" type="text" id="bairro" name="bairro"/>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label class="control-label" for="cidade">Cidade:</label>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-6">
                                        <input class="form-control" type="text" id="cidade" name="cidade"/>
                                    </div>
                                </div>

                                <div class="row form-group">  
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label class="control-label" for="estado">Estado:</label>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-2">
                                        <input class="form-control" type="text" id="estado" name="estado"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="panel panel-success">

                            <div class="panel-heading"><h3 class="panel-title">Informações para o Site</h3></div>

                            <div class="panel-body">

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="titulosite" class="control-label">Titulo do site:</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input type="text" class="form-control" id="titulosite" name="titulosite"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="slogan" class="control-label">Slogan Corretor</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input type="text" class="form-control" id="slogan" name="slogan"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="titulobiografia" class="control-label">Titulo Biografia</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input type="text" class="form-control" id="titulobiografia" name="titulobiografia"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="biografia" class="control-label">Biografia:</label>
                                    </div>

                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <textarea type="text" maxlength="100" class="form-control" id="biografia" name="biografia"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="linkVideo" class="control-label">Video Corretor:</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input type="text" class="form-control" id="linkVideo" name="linkVideo"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="linkGoogle" class="control-label">Link Google +:</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input type="text" class="form-control" id="linkGoogle" name="linkGoogle"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="LinkFacebook" class="control-label">Link facebook:</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input type="text" class="form-control" id="LinkFacebook" name="LinkFacebook"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="linkTwitter" class="control-label">Link twitter:</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input type="text" class="form-control" id="linkTwitter" name="linkTwitter"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="telefone" class="control-label">Telefone:</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input type="number" class="form-control" id="telefone" name="telefone"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="celular" class="control-label">Celular:</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input type="number" class="form-control" id="celular" name="celular"/>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-xs-3 col-sm-2 col-md-2 text-left">
                                        <label for="email" class="control-label">Email:</label>
                                    </div>
                                    <div class="col-xs-9 col-sm-10 col-md-10">
                                        <input type="email" class="form-control" id="email" name="email"/>
                                    </div>
                                </div>

                            </div>

                        </div>
                        
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" value="Alterar" />
                            </div>
                        </div>
                        
                    </div>
                </form>

            </div>
        </section>
        
        <!-- rodape -->
        <footer>
            <div class="footer" style="position: relative;">
                Todos os Direitos Reservados a <strong>RS Soluções</strong>
            </div>
        </footer>
        <!-- ./rodape -->

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jscript.js"></script>
    </body>
</html>


