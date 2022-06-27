<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Identidade Corportativa:</h4>
          <p class="text-muted">Negócio - Soluções que aproximam.</p>
          <p class="text-muted">Missão - Conectar pessoas, instituições e negócios por meio de soluções de comunicação e logísticas acessíveis, confiáveis e competitivas.</p>
          <p class="text-muted">Visão - Ser uma plataforma física e digital integrada, de excelência, para o fornecimento de soluções de comunicação e logísticas.</p>
          <p class="text-muted">Valores - Integridade; Respeíto às pessoas; Responsabilidade e compromisso com o resultado; Orgulho; Orientação ao futuro; Adaptabilidade; Aprendizagem contínua e Integração.</p>

        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Gerências:</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">GERTT</a></li>
            <li><a href="#" class="text-white">GEDIS</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="../admin_funcionario/" class="navbar-brand d-flex align-items-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Página Inicial.">
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="32" height="32" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
  <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
</svg>
        <strong>Portal BSB - Funcionários</strong>
      </a>
      <?php

        if(isset($logado) && $logado == TRUE){

          if(!isset($sistema) || $sistema == NULL){
            $sistema = "";
          }

        ?>
      <a href="carregar_dados.php" class="navbar-brand d-flex align-items-center">Carregar Dados</a>
      <a href="verificar_dados.php" class="navbar-brand d-flex align-items-center">Verificar Registro do Funcionário</a>
      <!--
      <a href="reprocessar_dados.php" class="navbar-brand d-flex align-items-center">Remover Dados</a>
      -->
      <a href="#" sistema="<?php echo $sistema;?>" id="btn_logout" class="navbar-brand d-flex align-items-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sair do sistema.">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-power text-warning" viewBox="0 0 16 16">
          <path d="M7.5 1v7h1V1h-1z"/>
          <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
        </svg>
</a>
      <?php

        }

      ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>