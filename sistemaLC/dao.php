<?php

     function inserirUsuario($nome,$email,$telefone,$senha){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'dog_ti';
        $conn = new mysqli($dbHosta,$dbUsername,$dbPassword,$dbName);
        
        $result = mysqli_query($conn, "INSERT INTO cadastro_dog(nome_cadas,email_cadas, telefone_cadas, senha_cadas) VALUES('$nome','$email','$telefone','$senha')");
    }

    function trazerDados($email, $senha){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'dog_ti';
        $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql = "SELECT email_cadas, senha_cadas FROM cadastro_dog";
        $query = mysqli_query($conn, $sql);

        while ($resultado = mysqli_fetch_array($query)){
            if ($resultado['email_cadas'] == $email && $resultado['senha_cadas'] == $senha){
                return true;
                break;
        }

        
    }
}
			
?>