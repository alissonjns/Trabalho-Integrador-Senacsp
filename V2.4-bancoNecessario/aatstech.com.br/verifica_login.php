<?php
     include_once 'bd.php';

    // obter o usuario e a senha 
     $USER = $_GET['txtUsuario'];
     $SENHA = $_GET['txtSenha'];

     // criar o objeto de conexão
     $con = new mysqli($bd_servidor, $bd_usuario, $bd_senha, $bd_banco);
     
      if ( $con->connect_error ){
         die("Erro ao conectar com o banco de dados.");

      } else { 
        //cria o comando sql para  validar o usuario e a senha no banco
        $sql ="select * from usuarios
              where usuario='$USER' and senha='$SENHA'";
        // executa o comando sql    
        $retorno = $con->query($sql);
        //verificar se o usuario e asenha são registrados na tabela do bd
        if ( $retorno->num_rows > 0 ){
            //se o reterno for maior que 1, o usuario e a senha são validos
            $con->close();
            session_start();
            $_SESSION['usuario'] = $USER;
            $_SESSION['chave'] = "YCGDHJ";
            header("Location:home.php");
            
        } else {
            // deu errado
            $con->close();
            header("Location:login.php?invalido");
         }

      }
     
?>