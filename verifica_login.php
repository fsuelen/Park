
<?php

session_start();
if (!$_SESSION['nome']){
    header('Location: tela_de_loguin.php');
    exit();
}


