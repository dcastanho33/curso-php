<div class="titulo">Desafio FOR</div>

<!-- 
#
##
###
####
#####
Usar o FOR para imprimir o conteudo acima

1) liberado uso de incremento $++
2) não pode usar incremento $++
-->

<?php
$array = ["#", "##", "###", "####", "#####"];

for ($i = 0; $i < count($array); $i++){
    echo "$array[$i] <br>";
}

echo "<hr><br>";

$impressao = '';
for ($cont = 1; $cont <= 5; $cont++){
    $impressao .= '#';                  //atribuição + concatenação dentro do for, cada vez que o laço passar ele vai ter mais um '#'
    echo "$impressao <br>";
}

echo "<hr><br>";

for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#'){
    echo "$impressao2 <br>";
}