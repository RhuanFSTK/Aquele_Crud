<?php
    include "restrito\database\conexao.php";
    if (isset($_POST["loguin"]) || isset($_POST["senha"])){

    if(strlen($_POST['loguin']) == 0){
        echo "Preencha seu usuario";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }else{
        $loguin = $conn -> real_escape_string($_POST['loguin']); 
        $senha = $conn -> real_escape_string($_POST['senha']);
        $sql = "SELECT * FROM `usuarios` WHERE `loguin` = '$loguin' AND senha = '$senha'";
        $sql_query = $conn->query($sql) or die ("Falha na execução do código SQL: ". $sql-'error');

        $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
            if(!isset($_SESSION)){
                session_start();
                $_SESSION['loguin'] = $loguin;
                header("location: restrito");
            }
        }else{
            echo "Login inválido!";
            }
    }
    }
?>