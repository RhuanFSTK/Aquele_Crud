<?php include "../protect.php" ?> <!-- Protect -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisa</title>
    <!-- CSS only -->
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet"  href="./css/pesquisa.css">
    <!-- Script JS excluir na pasta JS -->
    <script src="./js/excluir.js"></script>
  </head>
  <!-- Condição e funções de pesquisa -->
  <?php 
    $pesquisa = $_POST['busca'] ?? '';
    include 'database/conexao.php';
    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
    $dados = mysqli_query($conn, $sql);
  ?>
  <body>
    <header><h1>Pesquisa</h1></header>
    <div class="conteinar " >
      <div class="row-1 mx-5">
        <div class="col-8">
          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="pesquisa.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="busca" auto>
              <button class="btn btn-outline-secondary my-2 my-sm-1" type="submit">Pesquisar</button>
            </form>
          </nav>
        </div>
        <table class="table table-hover mx-auto">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">CRM</th>
                <th scope="col">Telefone</th>
                <th scope="col">Especialidade</th>
                <th scope="col">Funções</th>
              </tr>
            </thead>
          <tbody>
            <!-- Mostrando na tabela -->
            <?php  
            
              while ($linha = mysqli_fetch_assoc($dados)){
                  $id = $linha['id'];
                  $nome = $linha['nome'];
                  $crm = $linha['crm'];
                  $telefone = $linha['telefone'];
                  $especialidade = $linha['especialidade'];
                  echo "<tr>
                          <th>$nome</th>
                          <td>$crm</td>
                          <td>$telefone</td>
                          <td>$especialidade</td>
                          <td width=150px>
                          <a href='cadastro_edit.php?id=$id' class='btn  btn-sm' id='editar'>Editar</a>
                          <a href='#' class='btn btn-danger btn-sm' id='excluit' data-toggle='modal' data-target='#confirmar' onclick=".'"'."get_data('$nome', '$id')".'"'.">Excluir</a>
                          </td>  
                        </tr>";
                }
              
              /* O segredo do onclick acima */
            ?>
          </tbody>
        </table>
          <a href="index.php" class="btn btn-info" id="inicio">Voltar para o inicio</a>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Confirmação de exclusão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="delete_script.php" method="POST">
            <p>Deseja realmente excluir <b id="nome_pessoa">Nome</b> ?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
              <input type="hidden" name="id" id="id" value=""> 
              <input type="hidden" name="nome" id="nome" value=""> 
              <input type="submit" class="btn btn-danger" value="sim"> 
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>