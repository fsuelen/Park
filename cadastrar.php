<?php
session_start();
require_once 'conexao.php';

//pegar o que o usuário digitar nos respectivos campos

$nome = mysqli_real_escape_string($conecta, trim($_POST ['nome'])) ;
$senha =mysqli_real_escape_string($conecta, trim(md5($_POST ['senha'])));
$telefone =mysqli_real_escape_string($conecta, trim($_POST ['telefone']));
$email = mysqli_real_escape_string($conecta, trim($_POST ['email']));
$pulseira = mysqli_real_escape_string($conecta, trim($_POST ['pulseira']));

$sql = "select count(*) as total from usuario where usuario = '$nome' ";
$result = mysqli_query( $conecta, $sql);
$row = mysqli_fetch_assoc($result);

if ($row ['total'] == 1) {
    $_SESSION ['usuario_existe'] = true;
    header( 'Location: cadastro.php' );
    exit;
} 

$sql = "INSERT INTO usuario ( nome, senha, telefone, email, pulseira ) VALUES  ('$nome','$senha','$telefone','$email', '$pulseira') ";
if($conecta->query($sql) ===  TRUE) {
    $_SESSION['status_cadastro'] = true;
    header('Location: login.php');
}

