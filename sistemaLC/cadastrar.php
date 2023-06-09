<?php
      if(isset($_POST['submit'])){

            $nomeUsuario = $_POST['nome'];
            $emailUsuario = str_replace(' ', '', $_POST['email']);
            $telefoneUsuario = $_POST['telefone'];
            $senhaUsuario = str_replace(' ', '', $_POST['senha']);
            $confirmarUsuario = str_replace(' ', '', $_POST['conf_senha']);

            $testeTelefone = "".$telefoneUsuario;

            if(strlen($nomeUsuario) >= 3){
                if(strlen($testeTelefone) == 10 || strlen($testeTelefone) == 11){
                    if ($senhaUsuario === $confirmarUsuario){
                        require_once('dao.php');
                        if (testarEmail($emailUsuario)){
                            if (emailRepetido($emailUsuario)){
                                $mensagem = "Email já consta na base de dados, FAÇA O LOGIN!";
                                echo '<script>alert("'.$mensagem.'");</script>';
                            }else{
                                if (telefoneRepetido($telefoneUsuario)){
                                    $mensagem = "Telefone já consta na base de dados, tente outro!";
                                    echo '<script>alert("'.$mensagem.'");</script>';
                                }else{
                                    $telefoneFormatado = formatPhone($testeTelefone);
                                    inserirUsuario(ucwords($nomeUsuario),$emailUsuario,$telefoneFormatado,$senhaUsuario);
                                    $mensagem = "SUCESSO! Cadastro feito com êxito!";
                                    echo '<script>alert("'.$mensagem.'");</script>';
                                }
                               
                            }
                        }else{
                            $mensagem = "ERRO! Email inválido";
                            echo '<script>alert("'.$mensagem.'");</script>';
                        } 
                    }else{
                        $mensagem = "ERROR! Confirmação de senha incorreta";
                        echo '<script>alert("'.$mensagem.'");</script>';
                    }
                }else{
                    $mensagem = "ERROR! Número de telefone inválido!";
                    echo '<script>alert("'.$mensagem.'");</script>';
                }
            }else{
                $mensagem = "ERROR! NOME DE USUARIO COM MENOS DE 3 CARACTERES";
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
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <title>CADASTRO</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                            <input name="telefone" type="number" required>
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
    <script src="script.js"></script>
</body>
</html>