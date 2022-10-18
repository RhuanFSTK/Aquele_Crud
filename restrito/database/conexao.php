<?php
  $server = "localhost";
  $user = "root";
  $pass = "testeanestesia";
  $bd = "empresa";

  if ($conn = mysqli_connect($server, $user, $pass, $bd)){
    /* echo "Conectado!"; */
  }else
    echo "Erro!";
  
  function mensagem($texto, $tipo) {
    echo "  <div class='alert alert-$tipo' role='alert'>
              $texto
            </div>";
  }

  /* Tratamento de segurança */
  function clear($conexao, $texto_puro){
    $texto = mysqli_real_escape_string($conexao, $texto_puro);
    $texto = htmlspecialchars($texto);
    return $texto;
  }

?>