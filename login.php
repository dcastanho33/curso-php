<?php
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($_POST['email']){
        $usuarios = [
            [
                "nome" => "Aluno Coder",
                "email" => "aluno@cod3r.com.br",
                "senha" => "123456",
            ],
            [
                "nome" => "Outro Aluno",
                "email" => "outro@email.com.br",
                "senha" => "654321",
            ],
            [
                "nome" => "fatec",
                "email" => "fatec@fatec",
                "senha" => "123",
            ],
        ];

        foreach ($usuarios as $usuario){
            $emailValido = $email === $usuario['email'];
            $senhaValida = $senha === $usuario['senha'];

            if($emailValido && $senhaValida){
                $_SESSION['erros'] = null;
                $_SESSION['usuario'] = $usuario['nome'];
                //criando cookie para permanecer logado
                $expiracao = time() + 60 * 60 * 24; //30 dias
                setcookie('usuario', $usuario['nome'], $expiracao);
                header('Location: index.php');
            }
        }

        if(!$_SESSION['usuario']) {
            $_SESSION['erros'] = ['Usuário/Senha inválido(s)!'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets\css\estilo.css">
    <link rel="stylesheet" href="assets\css\login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem-Vindo</h2>
    </header>

    <main class="principal">
        <div class="conteudo">    
        <h3>Identifique-se</h3>
        <?php if ($_SESSION['erros']): ?>
            <div class="erros">                         <!-- adiciona um espaço para se houver erros -->
                <?php foreach ($_SESSION['erros'] as $erro): ?>
                    <p><?= $erro ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <form action="#" method="post">
            <div>
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <button>Entrar</button>
        </form>
        </div>
    </main>
    <footer class="rodape">
        C0D3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>
