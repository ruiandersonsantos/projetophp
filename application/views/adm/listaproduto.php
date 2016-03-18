<?php include("cabecalho.php")
?>


<section class="sessao_cadastroCorretor" style="margin-top: 90px; text-align: center;" >
    <div class="container">
        
        <table class="table">
        <?php foreach($lista as $produto) : ?>
            <tr>
                <td><?= $produto["id"]?></td>
                <td><?= $produto["titulo"]?></td>
                <td><img src="<?= base_url("imagens/")."/thumbs/".$produto["img_nome"] ?>"></td>
                <td><?= $produto["status"]?></td>
                <td>
                   <a href="<?= base_url("/produto/prealterar?id=".$produto["id"]) ?>" class="btn btn-warning" role="button">
                        <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        Atualizar
                   </a>
                </td>
                
                <td>
                    <a href="#" class="btn btn-primary" role="button">
                        <span class="glyphicon glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                        Ativar
                    </a>
                </td>
                
                <td>
                    <a href="<?= base_url("/produto/deletar?id=".$produto["id"]) ?>" class="btn btn-danger" role="button">
                        <span class="glyphicon glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span>
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
        </table>
      
    </div>
</section>

<!-- rodape -->
<footer>
    <div class="footer">
        Todos os Direitos Reservados a <strong>RS Soluções</strong>
    </div>
</footer>
<!-- ./rodape -->
     
<?php include("rodape.php")?>




