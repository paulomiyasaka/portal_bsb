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
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Carregar dados dos<br>Funcionários</h1>
        <!--
        <form id="form_planilha_qualidade" method="post" action="../api/importar.php" enctype="multipart/form-data">
        -->
        <form id="form_planilha">
          <div class="mb-3">
            <label for="planilha" class="form-label">Selecionar Planilha</label>
            <input type="file" class="form-control" id="planilha" name="planilha" accept=".csv" aria-describedby="planilhaHelp">
            <div id="planilhaHelp" class="form-text">Arquivo do tipo CSV. Tamanho máximo: 2 MB</div>
          </div>
          <div id="campo_ajax" class="invisible">Aguarde o fim do processamento...<br><img src="../img/load.gif"></div>
          <button id="btn_enviar_planilha" class="btn btn-success visible">Enviar planilha</button> 
        </form>
        
      </div>
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
include_once('../modal/modal_resposta.php');

  include_once('footer.php');

?>


<script>

enviarPlanilhaFuncionarios();
</script>
      
  </body>
</html>
