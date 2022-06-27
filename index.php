
<?php
  
  require_once("header.php");

?>


  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <img class="rounded float-start" style="max-width: 200px;" src="img/NCorreios_hori_vol_pos.png">
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Portal - SE/BSB</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        
        <a class="btn btn-sm btn-outline-secondary" href="login.php">Área Restrita</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sistema de Informação Gerencial">SIGE</a>
      <a class="p-2 link-secondary" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Consulte a lotação dos empregados">Funcionários</a>
      <a class="p-2 link-secondary" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Consulte informações sobre as unidades">Unidades</a>
      <a class="p-2 link-secondary" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Acesse os sistemas das Operações INEP">Operações INEP</a>
      <a class="p-2 link-secondary" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Consulte os links mais consultados">Links Úteis</a>
      <a class="p-2 link-secondary" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Verifique as fichas dos indicadores">Indicadores</a>
      <a class="p-2 link-secondary" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Organograma da SE/BSB">Organograma</a>
      <a class="p-2 link-secondary" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Consulte informações sobre as contratações">Contratação</a>
    </nav>
  </div>
</div>

<main class="container">
  <!--
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>
  -->

  <!--
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>
  -->

  <div class="row mb-2">
    <p class="h3 text-center">
    <?php

      $data = new Datetime('today', new DateTimeZone('America/Cuiaba'));
      echo $data->format('D, d/M/Y');

    ?>
    </p>
  </div>

  <br><br>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Dados gerais da Superintendência:
      </h3>

      <article class="blog-post">
        <canvas id="myChart"></canvas>
      </article>

      

      <!--
      <article class="blog-post">
        <h2 class="blog-post-title">Another blog post</h2>
        <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <blockquote>
          <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
        </blockquote>
        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <h3>Example table</h3>
        <p>And don't forget about tables in these posts:</p>
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Upvotes</th>
              <th>Downvotes</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Alice</td>
              <td>10</td>
              <td>11</td>
            </tr>
            <tr>
              <td>Bob</td>
              <td>4</td>
              <td>3</td>
            </tr>
            <tr>
              <td>Charlie</td>
              <td>7</td>
              <td>9</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Totals</td>
              <td>21</td>
              <td>23</td>
            </tr>
          </tfoot>
        </table>

        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>
      <article class="blog-post">
        <h2 class="blog-post-title">New feature</h2>
        <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
      </article>
      -->
      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled">Newer</a>
      </nav>

    </div>
    <!-- 

      HTML da lateral direita do layout


    -->



    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">Rastreamento:</h4>
          <form class="row g-3">
            <div class="col-auto">
              <label for="inputPassword2" class="visually-hidden">Password</label>
              <input type="text" maxlength="13" class="form-control" id="rastreio_objeto" placeholder="Ex.: AA123456789BR">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Consultar</button>
            </div>
          </form>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Consultas</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">Apresentações</a></li>
            <li><a href="#">Cronograma INEP</a></li>
            <li><a href="#">Feriados</a></li>
            <li><a href="#">Motivo de Baixas no SRO</a></li>
            <li><a href="#">Organograma</a></li>
            <li><a href="#">Tipos de Objetos Postais</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Informativos:</h4>
          <p class="fst-italic text-muted">(DEPLA)</p>
          <ol class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Encomenda</a></li>
            <li><a href="#">Mensagem</a></li>
            <li><a href="#">Logística</a></li>
            <li><a href="#">PQO</a></li>

          </ol>
        </div>
      </div>
    </div>
  </div>

</main>
<!--
<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
-->


<?php
  
  include_once('footer.php');
  
?>

<script>
const ctx = document.getElementById('myChart');

const data = {
  labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },

        plugins: {
            legend: {
                display: true
            }
        }
    }
});
</script>
    
  </body>
</html>
