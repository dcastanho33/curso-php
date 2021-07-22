<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('laranja', 'abacaxi');
//ou assim: const FRUTAS = ['laranja', 'abacaxi'];
//FRUTAS[0] = 'banana';     não sobrescreverá pois a array é constante
//FRUTAS[] = 'banana';      não adiciona dados pois a array é constante

echo FRUTAS[0];

const CARROS = ["fiat" => "uno", "ford" => "fiesta"];
echo '<br>' . CARROS['Fiat'];

define('CIDADES', array('Belo Horizonte, Recife'));   //outra forma de escrever array
echo '<br>' . CIDADES[1];

//constantes só funcionam para leitura