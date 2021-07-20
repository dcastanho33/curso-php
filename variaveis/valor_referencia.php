<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br>$variavel";
$variavelValor = 'novo valor';
echo "<br>$variavel $variavelValor";                         //valores diferentes

// Atribuição por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';  
echo "<br>$variavel $variavelReferencia";                    //mesmos valores