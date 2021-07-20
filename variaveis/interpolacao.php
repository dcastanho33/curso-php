<div class="titulo">Interpolação</div>

<?php

$numero = 10;
echo $numero;
echo '<br> $numero';    //com aspas simples ele escreve o valor literal da string
echo "<br> $numero";    //com aspas duplas ele entende que se trata de uma variável

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos";    //a variável é objeto, então nada vai acontecer
echo "<br>Eu tenho 5 {$objeto}s.";  //aqui é a forma correta de adicionar o s no final da frase
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s"; //não usar espaços dentro da chave