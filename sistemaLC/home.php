<?php 
    session_start();

    $nomeUsuario = $_SESSION['usuario'];
    $mensagem = "Seja Bem vindo $nomeUsuario";
    echo '<script>alert("'.$mensagem.'");</script>';


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
</head>
<body>
    <aside class="sidebar">
        <header class="sidebar-header">
            <img src="imagens/luiz.jpg" alt="foto de usuario" class="logo-img">
        </header>

        <nav>
            <button>
                <span>
                    <i class="material-symbols-outlined"> home</i>
                    <span>Home</span>
                </span>
            </button>

            <button>
                <span>
                    <i class="material-symbols-outlined"> tag</i>
                    <span>Explorar</span>
                </span>
            </button>

            <button>
                <span>
                    <i class="material-symbols-outlined"> email</i>
                    <span>Mensagem</span>
                </span>
            </button>

            <button>
                <span>
                    <i class="material-symbols-outlined"> person</i>
                    <span>Perfil</span>
                </span>
            </button>
        </nav>
    </aside>
    <main class="main">
        <h1 class="finalizado"><strong>PROJETO FINALIZADO</strong>🔥🔥</h1>
        <span class="git-span"><p>feito por Luiz Felipe:</p> <a href="https://github.com/Luiz-Felip-DEV" class="git">git hub</a></span>
    </main>

    <script src="js/script.js"></script>
</body>
</html>