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

function trazerNome($email, $senha){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'dog_ti';
        $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql = "select nome_cadas from cadastro_dog where email_cadas = '$email' and senha_cadas = '$senha';";
        $query = mysqli_query($conn, $sql);

        $resultado = mysqli_fetch_array($query);
        return $resultado['nome_cadas'];
}

function excluirUsuario(){
// ainda será desenvolvido

}

function alterarDados(){
    // ainda será desenvolvido

}

function logout(){
    // ainda será desenvolvido
    
}

function testarEmail($email){
    if (strpos($email, '@') && strpos($email, 'gmail.com') || strpos($email, 'icloud.com') || strpos($email, 'hotmail.com') || strpos($email, 'yahoo.com')){
        echo "<script>console.log('Email confirmado!') </script>";
        return true;
    }else{
        echo "<script>console.log('Email Negado!') </script>";
        return false;
    }
}

function emailRepetido($email){
        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'dog_ti';
        $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql = "SELECT email_cadas FROM cadastro_dog";
        $query = mysqli_query($conn, $sql);

        while ($resultado = mysqli_fetch_array($query)){
            if ($resultado['email_cadas'] == $email){
                return true;
                break;
        }

        
    }
}

function telefoneRepetido($telefone){

        $dbHosta = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'dog_ti';
        $conn = mysqli_connect($dbHosta,$dbUsername,$dbPassword, $dbName);
        $sql = "SELECT telefone_cadas FROM cadastro_dog";
        $query = mysqli_query($conn, $sql);

        while ($resultado = mysqli_fetch_array($query)){
            if ($resultado['telefone_cadas'] == $telefone){
                return true;
                break;
        }


        
    }
}
			
?>