<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastros</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/cadastroEdit.css">
  </head>
  <?php 
  /* ajeitar pesquisa no banco para edição */
    include 'database/conexao.php';
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM `pessoas` WHERE id = '$id'"; 
    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);
  ?>
  <body>
    <div class="conteinar">
      <div class="row">
        <div class="col">
        <form action="edit_script.php" method="POST" class="form">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome completo" required value="<?php echo $linha['nome'];?>" required>
          </div>
          <div class="mb-3">
            <label for="crm" class="form-label">CRM</label>
            <input type="text" class="form-control" name="crm" id="crm" value="<?php echo $linha['crm'];?>" required>
          </div>
          <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(DDD) 0000-0000" value="<?php echo $linha['telefone'];?>" required >
          </div>
          <div class="mb-3">
            <label for="especialidade" class="form-label">Especialidade</label>
            <select name="especialidade" id="especialidade" value="<?php echo $linha['especialidade'];?>" required >
              <option value=""></option>
              <option value="Anestesiologia">ANESTESIOLOGIA</option>
              <option value="Fonoaudiologia">FONOAUDIOLOGIA</option>
              <option value="Endocrinologia">ENDOCRINOLOGIA</option>
              <option value="Geriatria">GERIATRIA</option>
              <option value="Hematologia">HEMATOLOGIA</option>
              <option value="CirurgiaGeral">CIRURGIA GERAL</option>
            </select>
            <div id="aviso" class="form-text">We'll never share your data with anyone else.</div>
          </div>
          <input type="submit" class="btn btn-success" id="save" value="Salvar Alterações"></input>
          <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
        </form>
        <a href="index.php" class="btn btn-info" id="voltar">Voltar para o inicio</a>
        </div>
      </div>
    </div>  
  </body>
</html>