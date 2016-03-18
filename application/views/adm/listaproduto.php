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




