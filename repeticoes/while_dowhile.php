<div class="titulo">While / Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while ($contador < VALOR_LIMITE) {           //pode ser que não execute nenhuma vez o laço
    echo "while $contador<br>";
    $contador++;
}

do {                                        //vai executar o laço pelo menos uma vez pois o controle só fica no final
    echo "do-while $contador<br>";
    $contador++;
} while ($contador < VALOR_LIMITE);


$contador = 100;
do {
    echo "do-while $contador <br>";
    $contador++;
} while($contador < VALOR_LIMITE);

$contador = 0;
while(true){
    echo "While(true) $contador<br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}