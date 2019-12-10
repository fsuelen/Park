<?php
//iniciar sessão
require_once 'conexao.php';

?>
<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilos.css">
    
    <!--menu-->
    
          <?php
      include 'menu.html';
        ?>
</head>
<body>
    
<!--div principal com formularios para cadastro de clientes -->

<div class="conteiner" align="center" id="form">
    
<!--Formulário-->

    <form  action="cadastrar.php" method="POST"id="formi">
        Nome: <br>
        <input type="text" name="nome" id="nome"  autofocus="Digite Seu Nome" placeholder="Digite Seu Nome"><br>
        
            Senha:<br>
        <input type="password" name="senha" id="senha"><br>
        Telefone:<br>
        <input type="number" name="telefone" id="tel" ><br>
        
        Email:<br>
        <input type="email" name="email"  id="email" placeholder="exemple@exemple.com"><br>
     
        Numero da Pulseira: <br>
        
        <input type="number"name="pulseira" id="pulseira" placeholder="5 dígitos"required="insira sua pulseira"><br>
    
        <br>
        <input id="btn" class="button" type="submit" value="Cadastrar" > <br>

    </form>

<!-- fim do formulário-->

</div>

</body>
</html>