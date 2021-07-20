<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--;         //decremento
--$numero;         //decremento pré-fixado (antes da variável)
echo '<br>' . $numero;
$numero++;        //incremento
++$numero;
echo '<br>' . $numero;
$numero = 20;    //decremento de mais unidades
echo '<br>' . $numero;
$numero -= 5;    //decremento de mais unidades
echo '<br>' . $numero;
$numero += 5;    //incremento de mais unidades
echo '<br>' . $numero;
$numero *= 10;    //incremento multiplicando por 10
echo '<br>' . $numero;
$numero /= 2;    //decremento dividindo
echo '<br>' . $numero;
$numero %= 6;    
echo '<br>' . $numero;
$numero **= 4;    
echo '<br>' . $numero;

echo '<br>';
$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade';    //atribuição com concatenação
echo '<br>' . $texto;

//$variavelInexistente = 'valor inexistente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;