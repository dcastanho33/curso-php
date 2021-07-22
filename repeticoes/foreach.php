<div class="titulo">For Each</div>

<?php
$array = [
    1 => 'Domingo', 
    'Segunda', 
    'Terça', 
    'Quarta', 
    'Quinta', 
    'Sexta', 
    'Sábado'
];

foreach ($array as $valor){                //for each é o melhor para percorrer o array todo
    echo "$valor <br>";
}

foreach ($array as $indice => $valor){
    echo "$indice => $valor <br>";
}

echo "<hr>";

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha){
    foreach ($linha as $letra){
        echo "$letra";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as &$dobrar) {               //& pega o endereço
    $dobrar *= 2;                              //dobrou a referencia
    echo "$dobrar <br>";
}