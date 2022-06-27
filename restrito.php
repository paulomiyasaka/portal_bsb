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
<link href="css/signin.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  </head>

  <body class="text-center">
    
<main class="form-signin">
  
<h1>Área Restrita</h1>
    <p class="lead">Verifique se o seu perfil está correto para a área que está tentando acessar.</p>
    <p class="lead">
      
    </p>

    <?php
  include_once('controle/login.class.php');
  
  $login = new login();
  $login->iniciarSessao(); 

  $sistema = $login->identificarSistema();
  $logado = $login->verificarLogin($sistema);

if($logado){

?>

<a href="#" class="btn btn-outline-primary" sistema="<?php echo $sistema;?>" id="btn_logout">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
          <path d="M7.5 1v7h1V1h-1z"/>
          <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
        </svg> VOLTAR
    </a>


</main>


<?php
  
  }else{
    
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri/");

  }

?>





<?php
  
  require_once('scripts.html');



?>

<script type="text/javascript">
  

  $( document ).ready(function() {
    
    logout_portal();

});


</script>

</body>

</html>