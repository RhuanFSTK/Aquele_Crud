<?php 
    session_start();
    if (isset($_SESSION['loguin'])){
        $user = $_SESSION['loguin'];
    }else{
        session_destroy();
        header("location:../index.php?msg=Você precisa fazer o login");
    }
?>

