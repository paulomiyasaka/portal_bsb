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
    <div class="row justify-content-center">
      <div class="col-3 text-center">
        <form id="form_reprocessar" class="row g-3">
          <select class="form-select" id="select_indicador" name="select_indicador" aria-label="Informe um indicador" required>
            <option disabled selected>Selecione um indicador</option>
          <?php

            $dadosCSV = new importarCSV();
            $tipo_indicador = $dadosCSV->tipoIndicador();

            $html = "";
            
            $excecao = array("IEPE", "IEPE-I", "IEPE-N", "IEP", "IEPL", "IEPM", "IEPM-I", "IEPM-N");

            foreach ($tipo_indicador as $key => $value) {

              if(!in_array($value->indicador, $excecao)){
                $html .= "<option value=\"".$value->indicador."\">".strtoupper($value->indicador)."</option>";
              }

            }

            $html .= "</select>";            
            echo $html;

            $data_hoje = new Datetime('today');
            $data_menor = new Datetime('today');
            $data_menor = $data_menor->modify('-3 days');

            
            

          ?>
          <div class="row">
            <div class="my-1">
              <label for="data_processamento" class="form-label">Data do Processamento:</label>
              <input type="date" class="form-control" id="data_processamento" name="data_processamento" min="<?php echo $data_menor->format('Y-m-d');?>" max="<?php echo $data_hoje->format('Y-m-d'); ?>" required>
            </div>
          </div>

         
          
          <div class="row">
            <div class="bg-warning bg-opacity-75 my-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="data_processamento" id="ciente" name="ciente" required>
                <label class="form-check-label" for="ciente">
                  Estou ciente que ao excluir os dados não será possível desfazer a ação.
                </label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="my-3">
              <button id="btn_reprocessar" class="btn btn-danger">Remover dados</button>
            </div>
          </div>
       
        </form>
      </div>
    </div>

<?php
  
  include_once('../modal/modal_resposta.php');
  
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
  include_once('footer.php');

?>
<script>

  formExcluir();
  //reprocessarDados();

</script>

  </body>
</html>
