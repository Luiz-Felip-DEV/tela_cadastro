<?php
    function inserirDados($nome,$telefone,$email,$senha){
        $conn = new mysqli ("localhost","root", "", "dog_ti");
        if ($conn->connect_error){
            echo "ERRO: " . $conn->connect_error;
        }else{
            $stmt = $conn->prepare("INSERT INTO cadastro_dog (nome_cadas, telefone_cadas, email_cadas, senha_cadas) VALUES(?,?,?,?)");
            $stmt->bind_param("ssss", $nome, $telefone,$email,$senha);
            $stmt->execute();
        }

    }

    $nome = "Patricia Lima";
    $telefone = "349827462472";
    $email = "pattirib897@gmail.com";
    $senha = "lima45673";
    
    inserirDados($nome, $telefone, $email,$senha);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>CADASTRO</title>
</head>
<body>

    <header>
        <nav class="nav-bar">
            <a href="index.html" class="logo"><img src="imagens/favicon.ico" alt="" srcset=""></a>
            <ul class="nav-menu">
                <li class="nav-itens"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-itens"><a href="login.php" class="nav-link">Login</a></li>
                <li class="nav-itens"><a href="cadastrar.php" class="nav-link">Cadastrar-se</a></li>
            </ul>
            <div class="hamburguer">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <hr>
    <section class="cadastro">
        <div class="form-box-cadastro">
            <div class="form-value">
                <form action="">
                    <h2>CADASTRO</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" required>
                        <label for="">Email</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" required>
                        <label for="">Confirmar Email</label>
                    </div>
                        
                        <div class="inputbox">
                            <ion-icon name="call-outline"></ion-icon>
                            <input type="tel" required>
                            <label for="">Telefone</label>
                        </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Senha</label>
                    </div>

                    <button>Cadastrar</button>
                    
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>