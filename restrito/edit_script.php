<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Script edit</title>
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
          $crm = $_POST['crm'];
          $telefone = $_POST['telefone'];
          $especialidade = $_POST['especialidade'];

          $sql = "UPDATE `pessoas` set `nome`= '$nome',`crm`= '$crm',`telefone`= '$telefone',`especialidade`= '$especialidade' WHERE id = '$id'";

          if (mysqli_query($conn, $sql)){
            echo mensagem("$nome editado com sucesso", 'success');  /* alterar msg depois */
          }else
            echo mensagem("$nome verifique os dados !", 'danger');  
          ?>
          <a href="pesquisa.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
  </body>
</html>