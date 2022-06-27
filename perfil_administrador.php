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
            <h2 class="pb-2 border-bottom">Prefis de Administradores</h2>           


         </div>

         <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col" class="col-1">#</th>
              <th scope="col" class="col-2">Perfil</th>
              <th scope="col" class="col-4">Descrição</th>
              <th scope="col" class="col-2">Status</th>
              <th scope="col" class="col-1">Edição</th>
            </tr>
          </thead>
          <tbody>   

         <?php

          $perfil_adm = new perfil_administrador();
          $perfil = $perfil_adm->listarPerfil();
          $i = 1;
          foreach ($perfil as $key => $value) {
            
            $linha = "<tr>";
            $linha .= "<th scope=\"row\">".$i++."</th>";

            $linha .= "<th perfil=\"".strtoupper($value->perfil)."\">".strtoupper($value->perfil)."</th>";
            $linha .= "<th>".$value->descricao."</th>";

            $status = "DESATIVADO";
            if($value->status){
              $status = "ATIVADO";
            }

            $linha .= "<th>".$status."</th>";

            if($value->perfil == "ADMINISTRADOR"){

              $linha .= "<th>---</th>";
              //$linha .= "<th>---</th>";

            }else{
              $linha .= "<th onclick=\"ler_perfil()\" style=\"cursor: pointer;\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
                <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
              </svg></th>";

            //$linha .= "<th><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-toggle-on\" viewBox=\"0 0 16 16\"><path d=\"M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z\"/>          </svg></th>";
            }

            
            $linha .= "</tr>";

            echo $linha;
            $linha = NULL;
            $linha = "";
          }


         ?>
        </tbody>  
        </table>

    </div>



</main>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>




<?php
  
  require_once('scripts.html');
  include_once('modal_resposta.php');

?>
  <script type="text/javascript" src="js/perfil_adm.js"></script>
    <script type="text/javascript">
       //ler_perfil ();
    </script>


</body>

</html>