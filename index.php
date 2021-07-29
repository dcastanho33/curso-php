<?php
session_start();

if($_COOKIE['usuario']){            //checa se existe um cookie ativo para o usuario
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']) {       //se na sessão não tiver o usuário setado então redirecionar para o login.php
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets\css\estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php" class="vermelho">Logout</a>
    </nav>
    <main class="principal">
        <div class="conteudo">    
            <?php require_once('menu.php'); ?>
        </div>
    </main>
    <footer class="rodape">
        C0D3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>