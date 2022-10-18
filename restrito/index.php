<?php include "../protect.php" ?> <!-- Protect -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <!-- CSS only -->
    
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="./css/indexRestrito.css">
  </head>
  <body>
    <header>
      <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark" style="background-color: #132e53">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">*Logo*</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">
                  Sobre
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Convênios</a>
              </li>
              <li class="nav-item dropup">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown" aria-expanded="false">Saiba mais</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown10">
                  <li><a class="dropdown-item" href="#">F.A.Q.</a></li>
                  <li><a class="dropdown-item" href="#">COMO FUNCIONA</a></li>
                  <li><a class="dropdown-item" href="#">ONDE ATUAMOS</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div>
            <a class="btn btn-logout"  href="../logout.php" style="color: #ffffff" role="button">LOGOUT</a>
          </div>
        </div>
      </nav>
    </header>
    <div class="conteinar" id="conteinar">
      <div class="row-1">
        <div class="col-4" >
          <div class="conteinar-text">
            <div class="jumbotron-1" id="jumbo">
              <h1 class="display-4" >Faturamento mais eficiente! </h1>
              <p class="lead">Através da tecnologia e da otimização, a Anestesia Carioca vem a cada dia ampliando sua rede de contratos, fazendo parte de programas piloto das principais operadoras no sistema paperless, trazendo MUITO MAIS agilidade no prazo do faturamento.
              </p><br>
              <div class="btn system">
                <a class="btn btn-primary btn-lg" id="associado" href="cadastro.php" role="button" >SEJA UM ASSOCIADO</a>
                <a class="btn btn-primary btn-lg" id="pesquisar" href="pesquisa.php" role="button">PESQUISAR</a>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>