<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script cadastro</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="conteinar">
      <div class="row">
        <?php
          include 'database/conexao.php';
          
          $nome = clear($conn,$_POST['nome']);
          $crm = clear($conn,$_POST['crm']);
          $telefone = clear($conn,$_POST['telefone']);
          $especialidade = clear($conn,$_POST['especialidade']);

          $sql = "INSERT INTO `pessoas`(`nome`, `crm`, `telefone`, `especialidade`) VALUES ('$nome','$crm','$telefone','$especialidade')";

          if (mysqli_query($conn, $sql)){
            echo mensagem("$nome cadastado com sucesso", 'success');
          }else
            echo mensagem("$nome não cadastado !", 'danger');  
          ?>
          <a href="index.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>  
  </body>
</html>