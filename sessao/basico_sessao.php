<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if (!$_SESSION['nome']) {            //se já não tiver o 'nome' no array da sessão então 
    $_SESSION ['nome'] = 'Gabriel';                                              //cria o nome no array
}

if (!$_SESSION['email']) {
    $_SESSION ['email'] = 'gabriel@azmail.com';
}

?>

<p>
    <a href = '/sessao/basico_sessao_alterar.php'>Alterar Sessão</a>
</p>
