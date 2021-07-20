<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';
$a = 3;                  /*atribuição de valor à variável*/
$b = 16;
$soma = $a + $b;
echo $soma;              /*variáveis são case-sensitive*/

echo '<br>';
echo isset($soma);       /*verifica se a variável está setada*/

unset($soma);           /*tira o set da variável*/
echo '<br>';
echo var_dump($soma);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";         /*você não precisa dizer qual é o tipo da variável no php, linguagem de tipagem fraca*/
echo '<br>' . $variavel;

//Nomes de variável
$var = 'válida';
$var2 = 'válida';
$VAR3 = 'válida';
$_var_4 = 'válida';
$vár5 = 'válida';             /* mas não é recomendado */
//$6var = 'inválida';          /* o php não aceita variáveis que começam com número */
//$%var7 = 'inválida';
//$var8% = 'inválida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);            /* variável pré-definida */