<?php
    include_once 'bd.php';

    $duvida     = $_GET['txtDuvida'];
    $email      = $_GET['txtEmail'];
    $telefone   = $_GET['txtTel'];
    
    $con = new mysqli($bd_servidor, $bd_usuario, $bd_senha, $bd_banco);

    if( $con->connect_error ){
        die("Erro ao conectar com o banco de dados.");
    }else{
        echo "<h3>A conexão com o banco de dados foi aberta!</h3>";
        
        $sql = "insert into formulario (duvida, email, telefone)
        values('$duvida','$email','$telefone')";

        $retorno = $con->query($sql);
        
        if ( $retorno == true ){
           // echo"<h4> O registro foi inserido no banco de dados.</h4>";
           header("Location:index.php#duvida");
        }

        $con->close();
    }


?>