<?php
require_once 'conexao.php';



$info= "SELECT recarga FROM usuario ";
if (isset ($_POST["recarga"]) ){
$recarga = ($_POST["recarga"]);
$info .="WHERE recarga = {$recarga}";
$pulseira        =$_POST["pulseira"];

print_r($recarga);
$alterar = "UPDATE usuario SET  recarga = '$recarga' WHERE pulseira = {$pulseira}";



$operacao_alterar = mysqli_query($conecta, $alterar);
//se não conseguir mata a concexão  e da erro na alteração

    
}
 
if (!$operacao_alterar){
    die ("erro na alteracao");
    header('Location: cadastrado.php');


    
   
}
else
    header("Location: cadastrado.php")


?>
<?php 
//consulta a tabela usuario

$us = "SELECT * FROM usuario ";
        if (isset( $_POST ["pulseira"] ) ) {
            $pulseira = $_POST["pulseira"];
            $us .="WHERE pulseira = {$pulseira}";
            
            $res = mysqli_query($conecta, $us);
            if (!$res){
                die("Erro na consulta");
                
                $info_usuario = mysqli_fetch_assoc($res);
                print_r($info_usuario);
                
            }
        }




 