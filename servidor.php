<?php
  include_once('controle/login.class.php');
  
  $login = new login();
  $login->iniciarSessao(); 

  $sistema = $login->identificarSistema();


  $logado = $login->verificarLogin($sistema);
   $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

  if(!$logado){
    //$host  = $_SERVER['HTTP_HOST'];
    //$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    //$extra = 'principal.php';    
    header("Location: http://$host$uri/");
  }else{

    $login->__set("sistema", $sistema);
    $login->__set("matricula", $_SESSION[$sistema]);
    $perfil = $login->verificarPerfil();
    
    if($perfil != "ADMINISTRADOR"){
      $logout = "restrito.php";
      header("Location: http://$host$uri/".$logout."");
      //header("Location: http://google.com");
    }


  }

?>


<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Paulo Rodrigues Miyasaka">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Portal - BSB</title>
  

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/blog.css" rel="stylesheet">
<link href="css/features.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  </head>

  <body class="text-center">

  <main>
    
      <div class="container px-4 py-5">
        
         <div class="row">         


            <h2 class="pb-2">Administração do Portal</h2>
            <br>
            <h2 class="pb-2 border-bottom">Servidor</h2>           


         </div>

         <?php

          $servidor = new servidor();
          $nome_servidor = $servidor->listarServidor();
          //var_dump($nome_servidor);


         ?>


         <div class="row justify-content-center my-3">
          <div class="col-5">
            <p class="h3">Configurado com o nome:</p>              
              <span class="h3 text-primary">
              <?php echo $nome_servidor[0]->servidor; ?>                
              </span>
          <br><br>


          <form>
            <div class="mb-3">
              <label for="servidor" class="form-label">Hostname do Servidor:</label>
              <input type="text" class="form-control text-center text-primary" id="servidor" name="servidor" aria-describedby="servidorHelp" required>
              <div id="servidorHelp" class="form-text"><p>Informe o nome do hostname do computador onde o Servidor Apache está instalado.</p>
               
             <p class="text-danger">
              O novo hostname substituirá o atual.
             </p>
             </div>
            </div>
                      
            <button id="btn_salvar" type="button" class="btn btn-primary">Salvar</button>
          </form>

         </div>
       </div>


    </div>



</main>


<?php
  
  require_once('scripts.html');
  include_once('modal_resposta.php');

?>
  <script type="text/javascript" src="js/servidor.js"></script>
    <script type="text/javascript">
       salvar_servidor();
    </script>


</body>

</html>