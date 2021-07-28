<div class="titulo">Include Once</div>

<?php
ini_set('display_errors', 1);

include('include_once_arquivo.php');
//require('include_once_arquivo.php');

$variavel = 'Variável alterada';
echo "Variável = '{$variavel}'.<br>";

include('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>"; //mesmo que a variável tivesse sido alterada, o novo include resetará ela pro valor antigo novamente
$variavel = 'Variável alterada';
echo "Variável = {$variavel}'.<br>";

include_once('include_once_arquivo.php'); //só será realizado se esse include não foi usado antes (INCLUDE ONCE)
echo "Variável = '{$variavel}'.<br>";

require_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";