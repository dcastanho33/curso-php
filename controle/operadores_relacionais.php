<div class="titulo">Operadores Relacionais</div>


<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 <> 1);
var_dump(4 < 23);
var_dump(1 != 1);
var_dump(1 <= 7);

var_dump(111 == '111');    //verdadeiro
var_dump(111 === '111');   //falso, pois a comparação estrita "===" também compara os tipos

echo"<p>Relacionais no IF/ELSE</p><hr>";
$idade = 75;
if ($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo '<p>Spaceship</p><hr>';
var_dump(5 <=> 3); /*operador spaceship (número da esquerda maior = 1 / números iguais = 0 / número da direita maior = -1*/
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p>Valores podem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump("");
var_dump(" ");
?>

<style>                              /*tirando a margem do parágrafo e do hr*/
p {
    margin-bottom: 0px;
}    

hr {
    margin-top: 0px;
}    
</style>