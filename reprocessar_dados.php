<!doctype html>
<html lang="pt-BR">

<?php
  include_once('../controle/auto_load.class.php');
  new auto_load();
  include_once('header.php');

?>


  <body>

  <?php

  $login = new login();
  $login->iniciarSessao(); 

  $sistema = $login->identificarSistema();

  $logado = $login->verificarLogin($sistema);

  if(!$logado){
    
    $funcoesSQL = new funcoesSQL();
    $servidor = $funcoesSQL->hostnameServidor();
    $url = "http://".strtolower($servidor->servidor).$sistema;

    $login->redirecionar($url);
  }

  include_once('navbar.php');

?>

<main>

  <section class="py-5 text-center container">

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
        Selecionar Método
      </button>

      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenu">
        <li><a class="dropdown-item active" href="reprocessar_data_final.php">Pela Data Final</a></li>
        <li><a class="dropdown-item" href="reprocessar_dia_processamento.php">Pelo Dia do Processamento</a></li>
      </ul>

    </div>



  </section>





</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="mb-1">Área restrita &copy; Correios</p>
    <p class="mb-0">Desenvolvido por Paulo Rodrigues Miyasaka.</p>
  </div>
</footer>



<?php
  include_once('footer.php');

?>


  </body>
</html>
