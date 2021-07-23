<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b){
    return $a + $b;
}

echo soma(14, 15) . '<br>';
echo soma(6, 5, 4) . '<br>';  //não dará erro, mas só vai ler os dois primeiros argumentos, pois a função pede apenas 2.

function somaCompleta(...$numeros){      //aqui ele vai criar um array com todos os parametros que forem passados
    $soma = 0;
    foreach($numeros as $num) {         //faz um loop para somar os numeros
        $soma += $num;                  //atribuição aditiva
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);

$array = [6, 7, 8];         //mandando um array pra função somacompleta
echo '<br>' . somaCompleta(...$array); //o parametro de array deve ser passado assim

function membros($titular, ...$dependentes){
    echo "Titular: $titular<br>";
    if ($dependentes){
        foreach ($dependentes as $dep){
            echo "Dependente:  $dep<br>";
        }
    }
}

echo '<hr>';
membros("Ana Silva", "Pedro", "Rafaela", "Amanda");

echo '<br>';
membros("Roberto", "Junior");