<div class="titulo">Desafio do Módulo</div>

<?php
include_once('usuario.php');

$usuario1 = new Usuario("Gustavo Mendonça", 21, 'gust_mend');
$usuario1->apresentar();

unset($usuario1);
