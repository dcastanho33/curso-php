<?php namespace contexto; ?>
<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante1 = 123;
define('contexto\constante2', 234); //definindo uma constante associada a um namespace fora do contexto
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 456);

echo constante1 . '<br>';
echo constante2 . '<br>';
//echo \contexto\constante3 . '<br>';
//echo \contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constante3');
//echo constante4 . '<br>'; errado
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b){
    return $a + $b;
}

echo \contexto\soma(1,2) . '<br>'; //acessando a função pelo caminho absoluto do namespace
echo soma(1,2). '<br>';

function strpos($str, $text){
    echo "Buscando o texto '{$text}' em '{$str}' <br>";
    return 1;
}

echo strpos('Texto genérico pra busca', 'busca') . '<br>';     //acessando o strpos do namespace resultado = 1
echo \strpos('Texto genérico pra busca', 'busca') . '<br>';    //acessando o strpos raíz do php resultado = 21 (correto)