<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);   /*verifica se é inteiro*/

// Int para float

echo '<br><p>Int para Float</p>';
var_dump(PHP_INT_MAX + 1);          /*passou do limite dos numeros inteiros, então ele virou float*/
echo '<br>';
var_dump(1 + 1.0);                  /*int + float = float*/
echo '<br>';
var_dump((float) 3);                /*aqui o proprio var_dump converte o 3 em float*/

// Float pra int
echo '<p>Float para int</p>';
var_dump((int) 2.8);               /*aqui ficará truncado, quando se converte float para int pode se perder informação, o 2.8 virará 2*/
echo '<br>';
var_dump(intval(2.8, 10));        /*pega apenas a parte inteira do numero, usando a base 10*/
echo '<br>';
var_dump((int) round(2.8));        /*converte para int e arredonda para 3*/

// Operações com string
echo '<p>Strings</p>';
var_dump(3 + "2");                 /*o php soma valores numéricos dentro de strings*/
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);                 /*nesse caso é uma concatenação, então não haverá soma*/
echo '<br>', is_string("3". 2);
//echo '<br>', is_string("3" + 2);   /*ficará vazio pois é false e não é string*/
echo '<br>';
var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco");          /*o php pega a parte inicial da string e realiza a soma*/
echo '<br>';
var_dump(1 + "cinco 5");          /*aqui não há adição*/
echo '<br>';
var_dump(1 + "2+5");              /*aqui será só 1+2, o 5 será ignorado por conta do "+"*/
echo '<br>';
var_dump(1 + "3.2");              /*aqui haverá a adição, mas o tipo se tornará float*/
echo '<br>';
var_dump(1 + "-3.2e2");           /*o php consegue ler notação e dentro de string também*/ 
echo '<br>';
var_dump((int) "10.5");          /*a string será convertida em 10 inteiro*/
echo '<br>';
var_dump((float) "10.5");        /*a string será convertida em ponto flutuante*/