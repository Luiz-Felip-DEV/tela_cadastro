<?php 

    require_once ('dao.php');

    $email = "luizfelipe098@icloud.com";
    $senha = "Necromante2209!";

    $nome = trazerNome($email, $senha);
    echo $nome;

?>