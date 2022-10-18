<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script delete</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="conteinar">
      <div class="row">
        <?php
          include 'database/conexao.php';
          $id = $_POST['id'];
          $nome = $_POST['nome'];
          
          
          $sql = "DELETE FROM `pessoas` WHERE id = '$id'";

          if (mysqli_query($conn, $sql)){
            echo mensagem("$nome deletado com sucesso", 'success');
          }else
            echo mensagem("$nome não cadastado !", 'danger');  
          ?>
          <a href="index.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
  </body>
</html>