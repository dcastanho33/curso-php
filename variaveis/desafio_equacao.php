<div class="titulo">Desafio Equação</div>

<?php

$numA = ((6 * (3+2))**2);
//echo $numA . '<br>';
$denA = (3*2);
//echo $denA . '<br>';
$A = ($numA / $denA);
//echo $A . '<br>';

$B = (((1-5)*(2-7)/2)**2);

$C = (10**3);
//echo $C;

$sup = ($A - $B)**3;

$final = ($sup / $C);
echo "O resultado final é " . $final . ".";

/*resolução do professor

$numA = (6 * (3+2)**2);
$denA = 3 * 2;

$numB = (1-5) * (2-7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3
$inferior = (10**3);

$final = $superior / $inferior;
echo "O resultado final é" . $final . ".";