<?php
  include_once('controle/login.class.php');
  
  $login = new login();
  $login->iniciarSessao(); 

  $sistema = $login->identificarSistema();
  //var_dump($sistema);

  $logado = $login->verificarLogin($sistema);
  
  //var_dump($logado);

  if($logado){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'principal.php';
    header("Location: http://$host$uri/$extra");
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
<link href="css/signin.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  </head>

  <body class="text-center">
    
<main class="form-signin">
  <form id="form_login">
    <img class="mb-2" src="img/NCorreios_centr_vol_pos.png" alt="" width="144" height="114">
    <h1 class="h3 mb-3 fw-normal">Administração do Portal</h1>

    <div class="form-floating mb-2">
      <input type="text" class="form-control text-center" id="matricula" name="matricula" required>
      <label for="matricula">Matrícula:</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control text-center" id="senha" name="senha" required>
      <label for="senha">Senha:</label>
    </div>

    <input type="hidden" name="sistema" value="<?php echo $sistema;?>">
    <button id="btn_login" class="w-100 btn btn-lg btn-primary">Entrar</button>

    
    <br><br><br><br><br><br><br><br><br>
  </form>
</main>


<?php
  
  require_once('scripts.html');
  include_once('modal_resposta.php');

?>

    <script type="text/javascript">
        
      $("#matricula").mask("0.000.000-0");
      login_portal();
    </script>


</body>

</html>