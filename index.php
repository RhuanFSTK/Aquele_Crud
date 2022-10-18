<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- CSS only -->
    <link rel="stylesheet"  href="./restrito/css/bootstrap.min.css">
    <link rel="stylesheet"  href="./restrito/css/index.css">
  </head>
  <body>
    <div class="conteinar">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <div class="jumbotron">
          <h1 class="display">PHP/Myslq/Bttrap/JS</h1>
            <form action="index.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1" class="indicadores">Loguin</label>
                <input type="text" class="form-control" name="loguin" required focus>
                <small name="loguin" class="form-text text-muted">Entre com seus dados de acesso</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" class="indicadores">Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="">
              </div>
              <button type="submit" class="button">Acessar</button>
            </form>
            
             <!-- Validação de login em php -->
            <?php 
            include "Validaçãologin.php"
            ?>  
            </div>
        </div>
      </div>
      <div class="imagem">
        <img src="./restrito/img/medico.png" alt="" srcset="">
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
  
</html>