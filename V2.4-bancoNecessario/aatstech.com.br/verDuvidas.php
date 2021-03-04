<?php
 session_start();
 if  ($_SESSION['chave'] != "YCGDHJ"){
  header("Location:login.php?erro=12");
 }
 ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="sortcut icon" href="images/aatstech.ico"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="script_java.js"></script>
  <title>Dúvidas</title>
</head>
<body>
    <header class="site-header sticky-top py-1 ">
    <nav class="container-fluid d-flex flex-column flex-md-row justify-content-between navbar-light bg-light" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
    font-weight: bold;">
      <a class="py-2 d-none d-md-inline-block" ></a>
      <a class="py-2" aria-label="Product" href="home.php">Painel do Site</a>
      <a class="py-2 d-none d-md-inline-block" href="index.php">Aatstech Corporation ©</a>
      <a class="py-2 d-none d-md-inline-block" href="">Vendas Efetudas</a>
      <a class="py-2 d-none d-md-inline-block" href="verDuvidas.php">Dúvidas</a>
      <a class="py-2 d-none d-md-inline-block" href="">Produtos</a> 
      <a class="py-2 d-none d-md-inline-block" href="verUsuarios.php">Usuários</a>
      <a class="py-2 d-none d-md-inline-block" href="sair.php">
      <img class="bd-placeholder-img rounded-circle" width="24" height="24"  src="images/sair.svg" alt="">
      </a>
      <a class="py-2 d-none d-md-inline-block" ></a>
    </nav>
    </header>
    <main>
    <div class="container flex-md-equal w-100 my-md-3 ps-md-3 ">
    <center> <h1> Dúvidas e Sugestões</h1> <hr /> </center>
    <div id="autenticao" class="container">
        <div class="row row-cols-1 row-cols-md-3 mb-3 ">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 fw-normal"></h4>
            </div>
            <div class="card-body">
             <form action="verifica_login.php">
              <ul class="list-unstyled mt-3 mb-4">
              <?php
                 include_once 'bd.php';
                  // a variavel con sera o nosso o nosso objeto da classe mysqli = classe do mysql para conexão com o banco de dados
                  $con = new mysqli($bd_servidor, $bd_usuario, $bd_senha, $bd_banco);

                 if( $con->connect_error ){
                   die("Erro ao conectar com o banco de dados.");
                 }else{
                 $sql = "select * from formulario";
                    $retorno = $con->query($sql);
                      if ( $retorno->num_rows > 0){
                            while( $registro = $retorno->fetch_assoc() ){
                             echo "<p><b>Protocolo: </b>" . $registro['codForm'] . "</br>" .
                             "<b>Dúvidas ou Sugestões: </b>" . $registro['duvida'] . "</br>" .
                             "<b>Email: </b>" . $registro['email'] . "</br>" .
                             "<b>Telefone: </b>" . $registro['telefone'] . "</br>" .
                              "<hr />" .
                              "</p>";
                           } 
                       } else{
                        echo "<li>Desculpa o transtorno, estamos melhorando a sua expêriencia!</li>";
                       }
                    $con->close();
                  }
                ?>
              </ul>
              </form>
            </div>
          </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
      </div>
     </div>
    </main>
    <hr />
    <footer class="container py-5 margin-top-0 margin-right-auto margin-bottom-0 margin-left-auto">
    <div class="row">
      <div class="col-12 col-md-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Produto</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
        <small class="d-block mb-3 text-muted"><b>Aatstech</br>Corporation </br> © 2021</b></small>
      </div>
      <div class="col-md-3">
        <h5>Conteúdo</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="index.php#">Home</a></li>
          <li><a class="link-secondary" href="index.php#produto">Produto e Soluções</a></li>
          <li><a class="link-secondary" href="index.php#precos">Preços</a></li>
          <li><a class="link-secondary" href="index.php#criadores">Criadores</a></li>
          <li><a class="link-secondary" href="login.php">Acesso Restrito</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Contato</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" >Rua: Paulo Francisco Queiroz Arruda, 610 </a></li>
          <li><a class="link-secondary" >Tel: (16) 98194-3236
          <li><a class="link-secondary" >sac@aatstech.com.br</a></li>
          <li><a class="link-secondary" >Franca - SP</a></li>
        </ul>
      </div>
      <div id="duvida" class="col-md-3">
        <form class="duvida" action="salvarFormulario.php">
          <h5 >Fale Conosco</h5>
          <label for="inputDoubt" class="visually-hidden">Duvida</label>
          <input type="textarea" id="inputDoubt" name="txtDuvida" class="form-control duvida msg textarea" placeholder="Dúvidas" required="">
          <label for="inputEmail" class="visually-hidden">Email</label>
          <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email" required="" >
          <label for="inputTel" class="visually-hidden">Telefone</label>
          <input type="tel" id="inputTel" name="txtTel" class="form-control" placeholder="Telefone" required="" >
          <button class="w-10 btn btn-sm btn-primary bton" id="inputButton" type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </footer>
</body>
</html>
</body>
</html>
