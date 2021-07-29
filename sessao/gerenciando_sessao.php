<div class="titulo">Gerenciando Sessão</div>

<?php
session_start();
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;         //o contador vai crescendo com cada F5
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0 ){
    session_regenerate_id();                          //cada vez que o contador alcançar um multiplo de 5, ele muda o id da sessão, por segurança
}

if($_SESSION['contador'] >=15) {
    session_destroy();                           //destrói a sessão quando o contador chegar a 15
}