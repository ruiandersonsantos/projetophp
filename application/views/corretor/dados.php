<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Planos de Saúde</title>

        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    </head>

    <body>
        <h1>Formulário do Corretor</h1>
        <?= $this->session->flashdata("sucesso")?>
        <?= $this->session->flashdata("error")?>
        <form action="alterar" method="post">
            
                <input type="hidden" size="80" value="<?=$corretor['id']?>" name="id"/><br/><br/>
           
                <label for="nome">Nome</label><br/>
                <input type="text" size="80" value="<?=$corretor['nome']?>" name="nome"/><br/><br/>
                
                <label for="email">Email</label><br/>
                <input type="text" size="80" value="<?=$corretor['email']?>" name="email"/><br/><br/>
                
                <label for="telefone">Telefone</label><br/>
                <input type="text" size="80" value="<?=$corretor['telefone']?>" name="telefone"/><br/><br/>
                
                <label for="celular">Celular</label><br/>
                <input type="text" size="80" value="<?=$corretor['celular']?>" name="celular"/><br/><br/>
                
                <label for="facebook">Link facebook</label><br/>
                <input type="text" size="80" value="<?=$corretor['facebook']?>" name="facebook"/><br/><br/>
                
                <label for="titulosite">Titulo Site</label><br/>
                <input type="text" size="80" value="<?=$corretor['titulosite']?>" name="titulosite"/><br/><br/>
               
                <button type="submit" >Alterar</button>

          
        </form>
    </body>
</html>