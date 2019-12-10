<?php
//iniciar sessão
require_once 'conexao.php';

?>
<?php session_start()?>



<?php 'verifica_login.php';?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilo_cadastrado.css">
          <?php
      include 'menu.html';
        ?>
</head>
<body>

<div class="conteiner" id="form">
<h2>Olá, está  <?php

?> Pronto para se divertir ? </h2><br>
<img   id="parque"width="540"src="parque3.jpg" >
    <div  class="cadas">
        <?php 
        if(isset($_SESSION['Sucesso']) ):
        ?>
        <div id="sucesso"><p>Recarga efetuada com Sucesso!
            
        </div>
        <?php 
        endif;
 unset($_SESSION['Sucesso']);  
            
             
        

        ?>
        <form  name=recarga"  action="recarga.php"method="POST">
            
          
        
            <label for="recarga">Recarregue sua pulseira:</label>
        <br>
        
        <input type="number" name="pulseira"  value="<?php echo $info_usuario["pulseira"] ?>"placeholder="digite os 5 Dígitos"><br>
        <br>
        <label for="recarga">Insira o valor a ser recarregado:</label>
        <br>
        <input type="number" name="recarga" id="recarga" value="<?php $recarga = ($_POST["recarga"]);?>"><br>
        <br>
        Forma de pagamento:
        <select>
            <option value="selecione uma opção">selecione uma opção</option>
            <option value="Cartão de Credito">  Cartão de Crédito</option>
            <option value="cartao2">Cartão de Débito</option>
            <option value="Boleto Bancário">Boleto Bancário</option>
        </select><br>
        <br>
        <input type="submit" id="btn" value="Enviar">
        
        </form>
    </div>
    
      <div  class="logo1">

          <img src="logo1.png">
          <p>
              <br>
              Para você que ainda não   
              experimentou uma nova
              Experiência de como se 
              divertir a PulseADS traz
              de maneira unica uma 
              emoção para a vida toda
              com as novas pulseiras 
              você tem o conforto e comodidade
              que nenhuma empresa lhe oferece, além de não precisar das bilheterias chatas, você mesmo
              do conforto da sua casa pode recarregar as novas pulseiras da PulseADS sem se preocupar em
              sair de casa.<br>
              <br>
              
              
              
          </p>
    </div>
</body>
</html>
<?php
 