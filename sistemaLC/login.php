<?php 
    session_start();
    require_once('dao.php');
    if(isset($_POST['submit'])){
        $emailUsuario = str_replace(' ', '', $_POST['login']);
        $senhaUsuario = str_replace(' ', '', $_POST['senha']);
        if (trazerDados($emailUsuario, $senhaUsuario)){
            $mensagem = "Login Efetuado com sucesso...";
            $nome = trazerNome($emailUsuario, $senhaUsuario);
            session_start();
            $_SESSION['usuario'] = $nome;
            echo '<script>alert("'.$mensagem.'");</script>';
            header('Location: home.php');
            exit();
        }else{
            $mensagem = "Dados Incorretos, tente novamente!";
            echo '<script>alert("'.$mensagem.'");</script>';
        }

    }


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <title>TELA DE LOGIN</title>
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
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="login.php" method="POST">
                    <h2>Login <ion-icon name="logo-github"></h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="login" required>
                        <label for="">Email</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="senha" required>
                        <label for="">Senha</label>
                    </div>

                    <div class="forget">
                        <label for=""><input type="checkbox" required>Lembrar-se <a href="recup_senha.php">Lembrar Senha</a></label>
                    </div>
                    <button type="submit" name="submit" id="submit"><ion-icon name="paper-plane-outline"></ion-icon></button>
                    <div class="registrar">
                        <p>Não tenho conta <a href="cadastrar.php">registar-se</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>
</html>