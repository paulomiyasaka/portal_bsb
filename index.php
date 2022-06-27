<!doctype html>
<html lang="pt-BR">
  
  <?php
    include_once('../controle/auto_load.class.php');
    new auto_load();
    include_once('header.php');

  ?>

  
    
  </head>
  <body>
    
<?php
  
  
  $login = new login();
  $login->iniciarSessao(); 

  $sistema = $login->identificarSistema();

  $logado = $login->verificarLogin($sistema);
/*
  if(!$logado){
    
    $funcoesSQL = new funcoesSQL();
    $servidor = $funcoesSQL->hostnameServidor();
    $url = "http://".strtolower($servidor->servidor).$sistema;
    $login->redirecionar($url);
  }
*/
 
  include_once('navbar.php');

?>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-2 col-md-4 mx-auto">

        <?php

        if($logado){

        ?>
        <h1>Página Inicial</h1>

        <?php

        }else{

        ?>
        
        <form id="form_login">
          <div class="mb-3">
            <label for="matricula" class="form-label">Matrícula:</label>
            <input type="text" class="form-control text-center" id="matricula" name="matricula" required>            
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control text-center" id="senha" name="senha" required>
          </div>          
          <input type="hidden" name="sistema" value="<?php echo $sistema;?>">
          <button id="btn_login" class="btn btn-primary">Entrar</button>
        </form>
        
        <?php

        }

        ?>


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
  
  mascara("#matricula", "0.000.000-0");
  login();
</script>
      
  </body>
</html>
