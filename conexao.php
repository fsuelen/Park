
        <?php
        define('HOST','127.0.0.1');
        define('USUARIO','root');
      define('SENHA','');
      DEFINE('DB' , 'login');
         
        $conecta = mysqli_connect(HOST, USUARIO, SENHA, DB);
if(mysqli_connect_errno()){
    die("Conexao falhou: " . mysqli_connect_errno());
}

    

