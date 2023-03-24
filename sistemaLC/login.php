<?php 

        include('config.php');
    if (isset($_POST['login']) || isset($_POST['senha'])){
        if(strlen($_POST['login'] == 0)){
            "<script>alert('Preencha seu email!')</script>";
        }else if(strlen($_POST['senha']) == 0){
            "<script>alert('Preencha sua senha!')</script>";
        }else{
            $email = $mysqli->real_escape_string($_POST['login']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM cadastro_dog WHERE email_cadas = '$email' AND senha_cadas = '$senha' ";

            $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){
                $usuario = $sql_query->fetch_assoc();
                "<script>alert('Logado Com sucesso!') </script>";
                "<script>console.log('ACESSO AUTORIZADO!') </script>";
            }else{
                "<script>alert('Falha ao Logar! E-mail ou senha incorreos') </script>";
                "<script>console.log('ACESSO NEGADO!') </script>";
            }

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
                        <label for=""><input type="checkbox">Lembrar-se <a href="">Lembrar Senha</a></label>
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