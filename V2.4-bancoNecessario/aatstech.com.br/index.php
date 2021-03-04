<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="sortcut icon" href="images/aatstech.ico"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="script_java.js"></script>
  <title>Aatstech Corporation</title>
</head>
<body>
    <header class="site-header sticky-top py-1 ">
    <nav class="container-fluid d-flex flex-column flex-md-row justify-content-between navbar-light bg-light" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
    font-weight: bold;">
      <a class="py-2 d-none d-md-inline-block" ></a>
      <a class="py-2" aria-label="Product">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Aatstech Corporation</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
      </a>
      <a class="py-2 d-none d-md-inline-block" href="#">Home</a>
      <a class="py-2 d-none d-md-inline-block" href="#produto">Produto e Soluções</a>
      <a class="py-2 d-none d-md-inline-block" href="#precos">Preços</a>
      <a class="py-2 d-none d-md-inline-block" href="#criadores">Criadores</a>
      <a class="py-2 d-none d-md-inline-block" href="login.php">
      <img class="bd-placeholder-img rounded-circle" width="24" height="24"  src="images/login.svg" alt="">
      </a>
      <a class="py-2 d-none d-md-inline-block" ></a>
    </nav>
    </header>
  <main>
    <!--Inicio-->
    <div id="home" class="imgBg position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark">
      <div class="fonteHome col-md-5 p-lg-5 mx-auto my-5 module-inside">
        <h2 class="display-4 fw-normal">Water Leak Detector</h2>
        <p class="lead fw-normal">Vazou chamou Aatstech!</p>
        <!--  Isso era um botão -> <a class="btn btn-outline-secondary" href="#">Coming soon</a> -->
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <!--Sobre-->
    <div id="produto" class="about-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h2 class="display-4">Water Leak Detector</h2>
    
      <p class="Sobre">
        <font size = "4" face="Arial">
          O Water Leak Detector tem objetivo de procurar os vazamentos de água de forma 
          efetiva e precisa. 
          Sua criação foi com objetivo de facilitar o acesso ao equipamento.
          <br>
          A Aatstech é uma empresa especializada em vazamentos. 
          <br>
          Nosso maior obejetivo é disponibilizar 
          um produto a preços acessivel a toda a população.
        </font> 
        </p>
    </div>
    <!-- Sobre continuação - fotos do projeto-->
    <div  class="flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Arduino</h2>
            <hr />
            <p class="lead">
             <font size = "4" face = "Arial">
              O Arduino Uno R3 é a placa que intermedia entre o visor e sensor, para poder interpretar os dados 
              recibos e enviar informações ao display.	 
             </font>
            </p>
            <p>
              <img class="menor" src="images/arduino_uno_r3_original_da_italia_ded_componentes.png" alt="">
            </p>
          </div>
        </div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Sensor</h2>
          <hr />
            <p class="lead"> 
              <font size = "4" face = "Arial">
              O Sensor de Nível é um módulo eletrônico que detecta a presença de água em um determinado lugar 
              ou reservatório. 
              <br>
              É um produto simples, que torna facíl a localização do vazamento.
              </font>
            </p>
            <p>
              <img class="menor" src="images/sensor.jpg" alt="">
            </p>
          </div>
        </div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">Visor</h2>
            <hr />
            <p class="lead">
              <font size = "4" face = "Arial">
                O display LCD possui backlight (luz de fundo azul) e letras na cor branca. 
                <br>
                Durante seu funcionamento o sensor transmite informações do ambiente para o display.
              </font>
            </p>
            <p> 
              <img class="menor" src="images/LCD-16x2-com-arduino.png" alt="">
            </p>
          </div>
        </div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Box</h2>
            <hr />
            <p class="lead">
              <font size = "4" face = "Arial">
               O Box do Water Leak Detector possui Arduino e o display.
              </font>
              <p>
              <img class="menor" src="images/box.png" alt="">
              </p>
            </p>
          </div>
        </div>
    </div>
      <hr>
    <!--Precos-->
      <div id="precos" class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <h1 class="display-4">Preços</h1>
          <p class="lead">
            <font size = "4" face = "Arial">
            Tabela de Preços do Water Leak Detector
            </font>
          </p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 fw-normal">Padrão</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$100<small class="text-muted"></small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>6 Meses de Suporte Técnico</li>
                <li>Cor: Preto</li>
                <li>Email support</li>
                <li>Help center access</li>
              </ul>
              <button  type="button" class="w-100 btn btn-lg btn-outline-primary" onclick="Padrao()">Comprar</button>
            </div>
          </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 fw-normal">Pro</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$250<small class="text-muted"></small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>1 Ano de Suporte Técnico</li>
                <li>Cor: Preto</li>
                <li>Email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary" onclick="Pro()">Comprar</button>
            </div>
          </div>
          </div>
          <div class="col">
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 fw-normal">Ultra</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$350<small class="text-muted"></small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>2 Anos de Suporte Técnico</li>
                <li>Cor: Preto</li>
                <li>Email support</li>
                <li>Help center access</li>
              </ul>
              <button  type="button" class="w-100 btn btn-lg btn-outline-primary" onclick="Ultra()">Comprar</button>
            </div>
          </div>
          </div>
        </div>
      </div>
    <hr />
      <!--Criadores-->
      <div id="criadores" class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h4 class="display-4">Criadores</h4>
      </div>
      <div  class="criadores text-center" a>
        <div class="col-lg">
          <img class="bd-placeholder-img rounded-circle" width="120" height="120"  src="images/pp.jpeg" alt="">
          <h5>Diretor-Geral</h5>
          <p>Alisson Junio</p> 
        </div><!-- dev2-->
        <!-- destuidor -->
        <div class="col-lg">
          <img class="bd-placeholder-img rounded-circle" width="120" height="120"  src="images/Bruno.jpg" alt="">
          <h5>Desenvolvedor</h5>
          <p>Bruno Borges </p>
        </div>
        <div class="col-lg">          
          <img class="bd-placeholder-img rounded-circle" width="120" height="120"  src="images/gui.jpeg" alt="">
          <h5>Desenvolvedor</h5>
          <p>Guilherme Luis</p>
        </div>
        <!-- destuidor -->
        <div class="col-lg">
          <img class="bd-placeholder-img rounded-circle" width="120" height="120"  src="images/ad.jpeg" alt="">
          <h5>Designer</h5>
          <p>Adinilson Ferreira</p>
        </div>
        <div class="col-lg">
          <img class="bd-placeholder-img rounded-circle" width="120" height="120" src="images/Me_1.jpg" alt="">
          <h5>Designer </h5>
          <p>Daniel Rosa </p>
        </div>
      </div>
    <hr/>
  </main>
    <!--Final-->
  <footer class="container py-5 margin-top-0 margin-right-auto margin-bottom-0 margin-left-auto">
    <div class="row">
      <div class="col-12 col-md-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Produto</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
        <small class="d-block mb-3 text-muted"><b>Aatstech</br>Corporation </br> © 2021</b></small>
      </div>
      <div class="col-md-3">
        <h5>Conteúdo</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Home</a></li>
          <li><a class="link-secondary" href="#produto">Produto e Soluções</a></li>
          <li><a class="link-secondary" href="#precos">Preços</a></li>
          <li><a class="link-secondary" href="#criadores">Criadores</a></li>
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
          <input type="textarea" id="inputDoubt" name="txtDuvida" class="form-control duvida msg" placeholder="Dúvidas" required="">
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
