<div class="titulo">Break/Continue</div>

<?php
$cont = 16;

for(;;){       //laço infinito
    echo "$cont <br>";
    $cont++;
    if($cont > 20){
        break;          //escapa do laço
    }
}

echo "<br><hr><br>";

for (;;){
    $cont++;
    if($cont % 2 === 1){
        continue;               //só vai passar pra proxima linha se o próximo numero for par
    }
    echo "$cont <br>";
    if($cont >= 30){
        break;                   //quebra quando chega no break
    }
}

echo"<hr>";
foreach (array(1,2,3,4,5,6) as $valor){
    if($valor === 5) break;                  //para no 5
    if($valor % 2 === 0) continue;           //volta pro laço caso o numero for par, ou seja, só imprime os impares
    echo "$valor<br>";
}

echo "Fim";