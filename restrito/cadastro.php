<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>  
    <div class="conteinar">
      <div class="row-3">
        <div class="col-6">
        <form action="cadastro_script.php" method="POST" class="form">
          <div class="mb-4">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" required>
          </div>
          <div class="mb-4">
            <label for="crm" class="form-label">CRM</label>
            <input type="text" class="form-control" name="crm" id="crm" placeholder="CRM/UF" required>
          </div>
          <div class="mb-4">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(DDD)" required>
          </div>
          <div class="mb-4">
            <label for="especialidade" class="form-label">Especialidade</label>
            <select name="especialidade" id="especialidade" required>
              <option value="Especialidade" ></option>
              <option value="Anestesiologia">ANESTESIOLOGIA</option>
              <option value="Fonoaudiologia">FONOAUDIOLOGIA</option>
              <option value="Endocrinologia">ENDOCRINOLOGIA</option>
              <option value="Geriatria">GERIATRIA</option>
              <option value="Hematologia">HEMATOLOGIA</option>
              <option value="CirurgiaGeral">CIRURGIA GERAL</option>
            </select>
            <div id="aviso" class="form-text">We'll never share your data with anyone else.</div>
          </div>
          <button type="submit" class="btn btn-success" id="sbmt">Submit</button>
        </form>
        <a href="index.php" class="btn btn-info" id="voltar">Voltar para o inicio</a>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>