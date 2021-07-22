<div class="titulo">Laço FOR</div>

<?php
for($cont = 1; $cont <=5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <=10; $cont++){
    echo "$cont<br>";
}

for(; $cont<=15; ) {
    echo "$cont <br>";
    $cont++;       //até pode usar o incremento aqui tambem
}

echo "<hr>";
$array = [
    1 => 'Domingo', 
    'Segunda', 
    'Terça', 
    'Quarta', 
    'Quinta', 
    'Sexta', 
    'Sábado'
];

print_r($sarray);
echo '<br>';

for($i=1; $i <= count($array); $i++) {             //count $array conta os elementos do array
    echo "{$array[$i]} <br>";                      //cuidado com a interpolação
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo '<hr>';

for($i = 0; $i < count($matrix); $i++){                      //conta o indice da matriz
    for($j = 0; $j < count($matrix[$i]); $j++) {             //conta o indice dos indices da matriz
    echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}