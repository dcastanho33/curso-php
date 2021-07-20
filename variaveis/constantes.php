<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);          //constante
echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
//const NOVISSIMA_TAXA = $valorVariavel   não fazer dessa forma
//define('NOVISSIMA_TAXA' , $valorVariavel);
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br>Linha: ' . __LINE__; //mostra a linha do código
echo '<br>' . __DIR__;
echo '<br>' . __FILE__;