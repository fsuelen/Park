

<?php
//sessão usuário que fecha lá em baixo nessa mesma pagina

session_start();

// incluindo conexão com o banco de dados

require_once 'conexao.php'; 

//condição para testar se o usuário digitou algo via método POST
if (empty($_POST['nome']) || empty($_POST['senha'])){
    header('Location: tela_de_loguin.php');
    exit();
}
//variável para capiturar o que o usuário digitou via POST

$nome = mysqli_real_escape_string( $conecta, $_POST ['nome']);
$senha = mysqli_real_escape_string($conecta, $_POST['senha']);

//seleção ao banco...
$query = "select id, nome from usuario where nome = '{$nome}' and senha = md5('{$senha}')";


$result = mysqli_query($conecta, $query);
$row = mysqli_num_rows($result);

//test para saber se usuário existe no banco ou não 
if ($row  == 1){
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_bd['nome'];
   header ('Location: cadastrado.php');
   exit();
}

else {
     $_SESSION['nao_autenticado'] = true;
    header('Location: tela_de_loguin.php');
   
    exit();
}


