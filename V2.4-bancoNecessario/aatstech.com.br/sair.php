<?php
 session_destroy();
 if  ($_SESSION['chave'] != "YCGDHJ"){
    session_start();    
    header("Location:login.php?sair");
 }
 ?>