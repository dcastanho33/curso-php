<div class="titulo">Desafio Impressão</div>

<!-- Enunciado:
- Imprima apenas os valores do array que contém índice par
- Desafio Adicional: Resolver com for e for each
- Valores Esperados: AAA, CCC, EEE
-->



<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF",
];

for ($i = 0; $i < count($array); $i++){
    if ($i % 2 !== 0){
        continue;
    }
    echo "{$array[$i]} <br>";
}

echo "<hr>";

foreach ($array as $chave => $valor){
    if ($chave % 2 !== 0) continue;
    echo "$valor<br>";
}
