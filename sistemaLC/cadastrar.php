<?php
      if(isset($_POST['submit'])){

            $nomeUsuario = $_POST['nome'];
            $emailUsuario = $_POST['email'];
            $telefoneUsuario = $_POST['telefone'];
            $senhaUsuario = $_POST['senha'];
            require_once('func.phtml');
            inserirUsuario($nomeUsuario,$emailUsuario,$telefoneUsuario,$senhaUsuario);
            $mensagem = "DADOS ENVIADOS COM SUCESSO, VOLTE SEMPRE";
            echo '<script>alert("'.$mensagem.'");</script>';
    
      }

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
                <form action="cadastrar.php" method="POST">
                    <h2>CADASTRO <ion-icon name="logo-github"></ion-icon></h2>

                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input name= "nome" type="text" required >
                        <label for="">Nome</label>
                        <span class="span-required">Nome deve conter no mínimo 3 caracteres</span>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input name= "email" type="text" required>
                        <label for="">Email</label>
                        <span class="span-required">Digite um email válido</span>
                    </div>
                        
                        <div class="inputbox">
                            <ion-icon name="call-outline"></ion-icon>
                            <input name="telefone" type="tel" required>
                            <label for="">Telefone</label>
                            <span class="span-required">Digite um telefone válido</span>
                        </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name="senha" type="password" required>
                        <label for="">Senha</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name="conf_senha" type="password" required>
                        <label for="">Confirmar Senha</label>
                    </div>

                    <button type="submit" name="submit" id="submit">Cadastrar</button>
                    
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css
    " rel="stylesheet">
    </script>
</body>
</html>