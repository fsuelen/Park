<?php
//iniciar sessão
require_once 'conexao.php';

?>
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Logar</title>

    <link rel="stylesheet" href="estilos.css"> 
         <?php
      include 'menu.html';
        ?>
</head>
<body>

<div class="conteiner" align="center" id="form">
    <?php
    if (isset($_SESSION['nao_autenticado'])):
    ?>
    <div class="danger">
        <p>ERRO: Usuário ou senha inválidos.</p>
    </div>
<?php 

endif;
unset($_SESSION['nao_autenticado']);
?>
    <form action="login.php"  method="POST"id="formi">

        User  Name:<br>
        <input type="text" name="nome" required="insira seu email" placeholder="Digite o nome de usuário"><br>

        Senha:<br>
        <input type="password" name="senha" required="insira sua senha"><br>
        <br>
        <input class="button" type="submit" value="Logar"><br>
        <br>
       <a href="cadastro.php">Caso não seja cadastrado Cadastre-se</a>
       
   
    </form>
</div>
</body>
</html>