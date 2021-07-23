<div class="titulo">Closure e Callable</div>

<?php

$soma1 = function ($a, $b){
    return $a + $b;
};

function soma2 ($a, $b){
    return $a + $b;
};


echo $soma1(2,3) . '  ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo soma2(2,3) . '  ';
//echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>'; > dá certo, mas o intelephense não entende <

/*$soma1 = 1;
echo (is_callable($soma1)) ? 'Sim' : 'Não' . '<br>';    //$soma passará a ter um valor inteiro, portanto não será mais 'callable'*/

var_dump($soma1); //será um OBJETO do tipo closure que aponta para uma função

function executar($a, $b, $op, callable $funcao){
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar(2, 3, '+', $soma1);
//executar(2, 3, '+', soma2);          > dá certo, mas o intelephense não entende <