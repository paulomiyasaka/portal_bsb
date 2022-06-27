<?php
include_once '../controle/auto_load.class.php';
new auto_load();
?>
<!doctype html>
<html lang="pt-BR">
  
  <?php
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

    <?php
      $dadosCSV = new importarCSV();
      $ultima_atualizacao = $dadosCSV->ultimaAtualizacao();

      $funcoes = new funcoes();

      $html = "";

      $html .= "<table class=\"table\">";

      $cabecalho = "<thead>";
      $cabecalho .= "<tr>";

      $cabecalho .= "<th>Categoria de Serviços</th>";
      $cabecalho .= "<th>Indicador</th>";
      $cabecalho .= "<th>Grupo</th>";
      $cabecalho .= "<th>Cesta</th>";
      $cabecalho .= "<th>Data Final - Data Atualizar</th>";

      $cabecalho .= "</tr>";
      $cabecalho .= "</thead>";

      $html .= $cabecalho;

      $tbody = "<tbody>";
      $linha = "";

      foreach ($ultima_atualizacao as $key => $value) {

        $data_final = new Datetime($value->data_final);

        $datetime = new Datetime('today');
        //$dia = $datetime->format('d')-1;
        //$mes = $datetime->format('m');
        //$ano = $datetime->format('Y');
        //$data_atualizar = $datetime->setDate($ano, $mes, $dia);
        $data_atualizar = $datetime->modify('-1 day');
       

        if($data_atualizar > $data_final){
          $linha .= "<tr class=\"bg-danger bg-opacity-75\">";

        }else if($data_atualizar->format('d/m/Y') == $data_final->format('d/m/Y')){
          $linha .= "<tr class=\"bg-success bg-opacity-50\">";

        }else if($data_atualizar < $data_final){
          $linha .= "<tr class=\"bg-warning bg-opacity-50\">";
          
        }


        $data_1 = $data_final->modify('+1 day');
        //$linha .= "<tr>";
        $linha .= "<th>".$value->categoria_servico."</th>";
        $linha .= "<th>".$value->indicador."</th>";
        $linha .= "<th>".$value->grupo."</th>";
        $linha .= "<th>".$value->cesta."</th>";
        //$linha .= "<th>".$funcoes->converterDataPadrao($value->data_final)."</th>";
        $linha .= "<th>".$data_1->format('d/m/Y')." - ".$data_atualizar->format('d/m/Y')."</th>";
        $linha .= "</tr>";
        
      }

      $tbody .= $linha;

      $tbody .= "</tbody>";
      $html .= $tbody;

      $html .= "</table>";


      echo $html;


    ?>




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
    
  </body>
</html>
