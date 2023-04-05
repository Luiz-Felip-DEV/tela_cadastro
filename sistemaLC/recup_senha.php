<?php 
    session_start();
    require_once('dao.php');

    if (isset($_POST['submit'])){
        $emailUsuario = str_replace(' ', '', $_POST['email']);
        $telefoneUsuario =  $_POST['telefone'];
        $novaSenhaUsuario = str_replace(' ', '', $_POST['nova-senha']);
        $telefoneFormatado = formatPhone($telefoneUsuario);

        if(checarDados($emailUsuario, $telefoneFormatado, $novaSenhaUsuario)){
            $mensagem = "Senha alterada com sucesso...";
            echo '<script>alert("'.$mensagem.'");</script>';
            header('Location: login.php');
        }else{
            $mensagem = "Dados não conferem...";
            echo '<script>alert("'.$mensagem.'");</script>';
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="recupSenha.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Mude a Senha <br>Não esqueça de anotar a senha dessa vez 😵🥴</h1>
            <img src="imagens/rabbit-animate.svg" class="left-mudSenha-image" alt="Animação Unicornio">
        </div>

        <form action="recup_senha.php" method="POST"> 
            <div class="right-login">
                    <div class="card-login">
                    <h1>ALTERAR SENHA</h1>
                            <div class="textfield">
                                <label for="usuario">Email</label>
                                <input type="text" name="email" placeholder="E-mail">
                            </div>

                            <div class="textfield">
                                <label for="usuario">Telefone</label>
                                <input type="text" name="telefone" placeholder="Telefone">
                            </div>

                            <div class="textfield">
                                <label for="usuario">Nova Senha</label>
                                <input type="password" name="nova-senha" placeholder="Nova Senha">
                            </div>
                            <button type="submit" name="submit" id="submit" class="btn-login">alterar</button>
                    </div>
            </div>
        </form>
    </div>
    </form>
</body>
</html>